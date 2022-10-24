<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template-implements DomainConverter<\Codebros\RealkoCommon\Domain\Entity\ExternalDocument>
 */
class ExternalDocumentConverter implements DomainConverter
{

	/**
	 * @param \Codebros\RealkoCommon\Domain\Entity\ExternalDocument $object
	 */
	public function toArray(object $object): array
	{
		return [
			'url' => $object->url(),
			'position' => $object->position(),
			'description' => $object->description(),
		];
	}

	public function toObject(array $data): object
	{
		return new \Codebros\RealkoCommon\Domain\Entity\ExternalDocument(
			$data['url'],
			$data['position'],
			$data['description'],
		);
	}

}
