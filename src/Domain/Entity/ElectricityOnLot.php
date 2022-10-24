<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\ElectricityOnLot>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_electricity_on_lot')]
class ElectricityOnLot extends Enumeration implements Entity
{

}
