<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

class DoctrineExternalDocumentRepository implements ExternalDocumentRepository
{

	/**
	 * @var \Doctrine\ORM\EntityRepository<\Codebros\RealkoCommon\Domain\Entity\ExternalDocument>
	 */
	private \Doctrine\ORM\EntityRepository $repository;

	public function __construct(
		private readonly \Doctrine\ORM\EntityManagerInterface $entityManager,
	)
	{
		$this->repository = $this->entityManager->getRepository(\Codebros\RealkoCommon\Domain\Entity\ExternalDocument::class);
	}

	public function findById(int $id): ?\Codebros\RealkoCommon\Domain\Entity\ExternalDocument
	{
		return $this->repository->find($id);
	}

}
