<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

interface ExternalDocumentRepository
{

	public function findById(int $id): ?\Codebros\RealkoCommon\Domain\Entity\Document;

//	public function findByExternalId(int $externalId): ?\Codebros\RealkoCommon\Domain\Entity\Estate;

}
