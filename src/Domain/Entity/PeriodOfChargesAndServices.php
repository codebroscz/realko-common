<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\PeriodOfChargesAndServices>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_period_of_charges_and_services')]
class PeriodOfChargesAndServices extends Enumeration implements Entity
{

}
