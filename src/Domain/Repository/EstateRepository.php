<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

interface EstateRepository
{

	/**
	 * @return \Codebros\RealkoCommon\Domain\Entity\Estate[]
	 */
	public function findActive(): array;

	public function findById(\Ramsey\Uuid\UuidInterface $id): ?\Codebros\RealkoCommon\Domain\Entity\Estate;

	public function findByExternalId(int $externalId): ?\Codebros\RealkoCommon\Domain\Entity\Estate;

	public function findByExternalIdAndStamp(int $externalId, int $stamp): ?\Codebros\RealkoCommon\Domain\Entity\Estate;

}
