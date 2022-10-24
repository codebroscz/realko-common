<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\StructureOfBuilding>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_structure_of_building')]
class StructureOfBuilding extends Enumeration implements Entity
{

}
