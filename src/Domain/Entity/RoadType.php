<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\RoadType>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_road_type')]
class RoadType extends Enumeration implements Entity
{

}
