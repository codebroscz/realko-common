<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\SourceOfHotWater>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_source_of_hot_water')]
class SourceOfHotWater extends Enumeration implements Entity
{

}
