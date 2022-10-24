<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template-implements DomainConverter<\Codebros\RealkoCommon\Domain\Entity\Location>
 */
class LocationConverter implements DomainConverter
{

	public function toArray(object $object): array
	{
		return [
			'version' => $object->version(),
		];
	}

	public function toObject(array $data): object
	{
		return new \Codebros\RealkoCommon\Domain\Entity\Location(
			$data['version'],
		);
	}

}
