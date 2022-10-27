<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

class DoctrineEnumerationsRepository extends EnumerationsRepository
{

	/**
	 * @var array<class-string, \Codebros\RealkoCommon\Domain\Entity\Enumeration[]>
	 */
	private ?array $cache = null;

	public function __construct(
		private readonly \Doctrine\ORM\EntityManagerInterface $entityManager,
	)
	{
	}

	/**
	 * @inheritDoc
	 */
	private function precacheEnumerations(): void
	{
		if ($this->cache !== null) {
			return;
		}

		$this->cache = [];

		foreach ($this->knownEnums as $enumType => $entityType) {
			$indexedEntities = [];

			/** @var \Codebros\RealkoCommon\Domain\Entity\Enumeration $entity */
			foreach ($this->entityManager->getRepository($entityType)->findAll() as $entity) {
				$indexedEntities[$entity->id()] = $entity;
			}

			$this->cache[$enumType] = $indexedEntities;
		}
	}

	/**
	 * @param class-string $enumType
	 */
	public function get(string $enumType, int $id): \Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		if ( ! \array_key_exists($enumType, $this->knownEnums)) {
			throw new \LogicException(\sprintf('Unknown enum %s.', $enumType));
		}

		$this->precacheEnumerations();

		if ( ! \array_key_exists($id, $this->cache[$enumType])) {
			throw new \LogicException(\sprintf('Unknown enum with ID %d of type %s.', $id, $enumType));
		}

		return $this->cache[$enumType][$id];
	}

	/**
	 * @param class-string $enumType
	 */
	public function find(string $enumType, int $id): ?\Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		if ($id === 0) { // shortcut
			return null;
		}

		$this->precacheEnumerations();

		if (\array_key_exists($enumType, $this->knownEnums) && \array_key_exists($id, $this->cache[$enumType])) {
			return $this->cache[$enumType][$id];
		}

		return $this->cache[$enumType][$id] = $this->entityManager->find($this->knownEnums[$enumType], $id);
	}

	/**
	 * @template E of \Codebros\RealkoCommon\Domain\Entity\Enumeration
	 * @param class-string<E> $enumType
	 * @phpstan-return E
	 */
	public function findOrCreateNew(string $enumType, int $id, string $title): \Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		if ( ! \array_key_exists($enumType, $this->knownEnums)) {
			throw new \LogicException(\sprintf('Unknown enum %s.', $enumType));
		}

		$this->precacheEnumerations();

		if ( ! \array_key_exists($id, $this->cache[$enumType] ?? [])) {
			/** @var \Codebros\RealkoCommon\Domain\Entity\Enumeration $enum */
			$enum = new $this->knownEnums[$enumType]($id, $title);

			$this->entityManager->persist($enum);

			$this->cache[$enumType][$id] = $enum;
		}

		return $this->cache[$enumType][$id];
	}

}
