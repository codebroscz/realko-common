<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

/**
 * @template E of object
 * @template T of \Codebros\RealkoCommon\Domain\Entity\Enumeration
 */
class DoctrineEnumerationsRepository extends EnumerationsRepository
{

	/**
	 * @var array<class-string<E>, array<int, T>>
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
	 * @inheritDoc
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
	 * @inheritDoc
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
	 * @inheritDoc
	 */
	public function findOrCreateNew(string $enumType, int $id, string $title): \Codebros\RealkoCommon\Domain\Entity\Enumeration
	{
		if ( ! \array_key_exists($enumType, $this->knownEnums)) {
			throw new \LogicException(\sprintf('Unknown enum %s.', $enumType));
		}

		$this->precacheEnumerations();

		if ( ! \array_key_exists($id, $this->cache[$enumType] ?? [])) {
			$class = $this->enumToEntity($enumType);

			/**
			 * @phpstan-var T $enum
			 * @var \Codebros\RealkoCommon\Domain\Entity\Enumeration $enum
			 */
			$enum = new $class($id, $title);

			$this->entityManager->persist($enum);

			$this->cache[$enumType][$id] = $enum;
		}

		return $this->cache[$enumType][$id];
	}

	/**
	 * @phpstan-param class-string<E> $enumType
	 *
	 * @phpstan-return class-string<T>
	 */
	private function enumToEntity(string $enumType): string
	{
		return $this->knownEnums[$enumType];
	}

}
