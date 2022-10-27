<?php declare(strict_types=1);

require __DIR__ . '/../../../bootstrap.php';

$estate = new \Codebros\RealkoCommon\Domain\Entity\Estate(
	1,
	 2,
);

$enumsRepository = new class extends \Codebros\RealkoCommon\Domain\Repository\EnumerationsRepository {

	private array $cache;

	public function __construct()
	{
		$this->cache = [
			\Codebros\RealkoCommon\Domain\Enum\AccessToLot::class => [
				\Codebros\RealkoCommon\Domain\Enum\AccessToLot::NO->value => new \Codebros\RealkoCommon\Domain\Entity\AccessToLot(
					\Codebros\RealkoCommon\Domain\Enum\AccessToLot::NO->value,
					'Ne',
				),
			],
		];
	}

	public function precacheEnumerations(): void {}

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

$converter = new \Codebros\RealkoCommon\Domain\Converter\EstateConverter(
	new \Codebros\RealkoCommon\Domain\Converter\DocumentConverter($enumsRepository),
	new \Codebros\RealkoCommon\Domain\Converter\ExternalDocumentConverter(),
	new \Codebros\RealkoCommon\Domain\Converter\LocationConverter(),
	$enumsRepository,
);

$array = [
	'id' => 1,
	'stamp' => 1,
	'accessToLot' => [
        'id' => \Codebros\RealkoCommon\Domain\Enum\AccessToLot::NO->value,
        'title' => \Codebros\RealkoCommon\Domain\Enum\AccessToLot::NO->name,
    ],
    'characterOfVillage' => [
        [
            'id' => \Codebros\RealkoCommon\Domain\Enum\CharacterOfVillage::BIG_CITY->value,
            'title' => \Codebros\RealkoCommon\Domain\Enum\CharacterOfVillage::BIG_CITY->name,
        ]
    ]
];

$entity = $converter->toObject($array);

\Tester\Assert::same(1, $entity->externalId());
\Tester\Assert::same(\Codebros\RealkoCommon\Domain\Enum\AccessToLot::NO->value, $entity->accessToLot()->id());
\Tester\Assert::count(1, $entity->characterOfVillage()->toArray());
\Tester\Assert::type(\Codebros\RealkoCommon\Domain\Entity\CharacterOfVillage::class, $entity->characterOfVillage()->get(0));
\Tester\Assert::null($entity->water());
