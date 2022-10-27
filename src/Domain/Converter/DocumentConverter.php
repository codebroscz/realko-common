<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template-implements DomainConverter<\Codebros\RealkoCommon\Domain\Entity\Document>
 */
class DocumentConverter implements DomainConverter
{

	public function __construct(
		private readonly \Codebros\RealkoCommon\Domain\Repository\EnumerationsRepository $enumerationsRepository,
	)
	{
	}

	/**
	 * @param \Codebros\RealkoCommon\Domain\Entity\Document $object
	 */
	public function toArray(object $object): array
	{
		return [
			'id' => $object->externalId(),
			'position' => $object->position(),
			'dateOfUpdate' => $object->dateOfUpdate()?->format('c'),
			'typeOfDocument' => $object->typeOfDocument()->toArray(),
			'description' => $object->description(),
			'category' => $object->documentCategory()?->toArray(),
		];
	}

	public function toObject(array $data): object
	{
		return new \Codebros\RealkoCommon\Domain\Entity\Document(
			$data['id'],
			$data['position'],
			$data['dateOfUpdate'] ? new \DateTimeImmutable($data['dateOfUpdate']) : null,
            ($data['typeOfDocument'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfDocument::class, $data['typeOfDocument']['id'], $data['typeOfDocument']['title']) : null,
			$data['description'],
            ($data['category'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\DocumentCategory::class, $data['category']['id'], $data['category']['title']) : null,
		);
	}

}
