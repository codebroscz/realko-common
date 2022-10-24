<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\HeatingElement>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_heating2_heating_element')]
class HeatingElement extends Enumeration implements Entity
{

}
