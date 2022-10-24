<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\LocationSource>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_heating2_location_source')]
class LocationSource extends Enumeration implements Entity
{

}
