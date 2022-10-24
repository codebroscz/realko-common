<?php declare(strict_types=1);

require __DIR__ . '/../../../bootstrap.php';

$enumRepository = new class extends \Codebros\RealkoCommon\Domain\Repository\EnumerationsRepository {
	public function precacheEnumerations(): void {}

	private array $cache = [];

	public function get(string $enumType, int $id): \Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		return $this->cache[$enumType][$id] ?? throw new \Codebros\RealkoCommon\Domain\EntityNotFound();
	}

	public function find(string $enumType, int $id): ?\Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		return $this->cache[$enumType][$id] ?? null;
	}

	public function findOrCreateNew(string $enumType, int $id, string $title): \Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		return $this->cache[$enumType][$id] ?? ($this->cache[$enumType][$id] = new $this->knownEnums[$enumType]($id, $title));
	}

};

$estate = new \Codebros\RealkoCommon\Domain\Entity\Estate(
	1,
	 2,
);

$converter = new \Codebros\RealkoCommon\Domain\Converter\EstateConverter(
	new \Codebros\RealkoCommon\Domain\Converter\DocumentConverter($enumRepository),
	new \Codebros\RealkoCommon\Domain\Converter\ExternalDocumentConverter(),
	new \Codebros\RealkoCommon\Domain\Converter\LocationConverter(),
	$enumRepository
);

$array = $converter->toArray($estate);

$expected = [
	'id' => 1,
];

$intersection = \array_intersect_key($array, $expected);

\Tester\Assert::same($expected, $intersection);
