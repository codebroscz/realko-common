<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

class DoctrineEstateRepository implements EstateRepository
{

	/**
	 * @var \Doctrine\ORM\EntityRepository<\Codebros\RealkoCommon\Domain\Entity\Estate>
	 */
	private \Doctrine\ORM\EntityRepository $repository;

	public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager)
	{
		$this->repository = $entityManager->getRepository(\Codebros\RealkoCommon\Domain\Entity\Estate::class);
	}

	/**
	 * @inheritDoc
	 */
	public function findActive(): array
	{
		return $this->repository->findBy([
			'deletedAt' => null,
		]);
	}

	public function findById(\Ramsey\Uuid\UuidInterface $id): ?\Codebros\RealkoCommon\Domain\Entity\Estate
	{
		return $this->repository->find($id);
	}

    /**
     * Search is performed with respect to deleted state of entity
     */
	public function findByExternalId(int $externalId): ?\Codebros\RealkoCommon\Domain\Entity\Estate
	{
		return $this->repository->findOneBy([
			'externalId' => $externalId,
            'deletedAt' => null,
		], [
			'version' => 'DESC',
		]);
	}

    /**
     * Search is NOT performed with respect to deleted state of entity
     */
	public function findByExternalIdAndStamp(int $externalId, int $stamp): ?\Codebros\RealkoCommon\Domain\Entity\Estate
	{
		return $this->repository->findOneBy([
			'externalId' => $externalId,
			'version' => $stamp,
		]);
	}

}
