<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

class DoctrineDocumentRepository implements DocumentRepository
{

	/**
	 * @var \Doctrine\ORM\EntityRepository<\Codebros\RealkoCommon\Domain\Entity\Document>
	 */
	private \Doctrine\ORM\EntityRepository $repository;

	public function __construct(
		private readonly \App\Doctrine\EntityManager $entityManager,
	)
	{
		$this->repository = $this->entityManager->getRepository(\Codebros\RealkoCommon\Domain\Entity\Document::class);
	}

	public function findById(int $id): ?\Codebros\RealkoCommon\Domain\Entity\Document
	{
		return $this->repository->find($id);
	}

}
