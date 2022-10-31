<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template-implements DomainConverter<\Codebros\RealkoCommon\Domain\Entity\Location>
 */
class LocationConverter implements DomainConverter
{

    /**
     * @param \Codebros\RealkoCommon\Domain\Entity\Location $object
     */
	public function toArray(object $object): array
	{
		return [
			'version' => $object->version(),
            'lc1id' => $object->l1Id(),
            'lc1name' => $object->l1Name(),
            'lc2id' => $object->l2Id(),
            'lc2name' => $object->l2Name(),
            'lc3id' => $object->l3Id(),
            'lc3name' => $object->l3Name(),
            'lc4id' => $object->l4Id(),
            'lc4name' => $object->l4Name(),
            'lc5id' => $object->l5Id(),
            'lc5name' => $object->l5Name(),
            'lc6id' => $object->l6Id(),
            'lc6name' => $object->l6Name(),
            'lc7id' => $object->l7Id(),
            'lc7name' => $object->l7Name(),
            'lc8id' => $object->l8Id(),
            'lc8name' => $object->l8Name(),
            'lc9id' => $object->l9Id(),
            'lc9name' => $object->l9Name(),
            'lc10id' => $object->l10Id(),
            'lc10name' => $object->l10Name(),
            'lc11id' => $object->l11Id(),
            'lc11name' => $object->l11Name(),
            'lc12id' => $object->l12Id(),
            'lc12name' => $object->l12Name(),
            'lc13id' => $object->l13Id(),
            'lc13name' => $object->l13Name(),
            'lc14id' => $object->l14Id(),
            'lc14name' => $object->l14Name(),
            'lc15id' => $object->l15Id(),
            'lc15name' => $object->l15Name(),
            'lc16id' => $object->l16Id(),
            'lc16name' => $object->l16Name(),
		];
	}

	public function toObject(array $data): object
	{
		return new \Codebros\RealkoCommon\Domain\Entity\Location(
			$data['version'],
            $data['lc1id'],
            $data['lc1name'],
            $data['lc2id'],
            $data['lc2name'],
            $data['lc3id'],
            $data['lc3name'],
            $data['lc4id'],
            $data['lc4name'],
            $data['lc5id'],
            $data['lc5name'],
            $data['lc6id'],
            $data['lc6name'],
            $data['lc7id'],
            $data['lc7name'],
            $data['lc8id'],
            $data['lc8name'],
            $data['lc9id'],
            $data['lc9name'],
            $data['lc10id'],
            $data['lc10name'],
            $data['lc11id'],
            $data['lc11name'],
            $data['lc12id'],
            $data['lc12name'],
            $data['lc13id'],
            $data['lc13name'],
            $data['lc14id'],
            $data['lc14name'],
            $data['lc15id'],
            $data['lc15name'],
            $data['lc16id'],
            $data['lc16name'],
        );
	}

}
