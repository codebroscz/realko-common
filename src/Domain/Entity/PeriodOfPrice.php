<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\PeriodOfPrice>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_period_of_price')]
class PeriodOfPrice extends Enumeration implements Entity
{

}
