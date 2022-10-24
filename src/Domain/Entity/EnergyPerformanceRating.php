<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceRating>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_energy_performance_rating')]
class EnergyPerformanceRating extends Enumeration implements Entity
{

}
