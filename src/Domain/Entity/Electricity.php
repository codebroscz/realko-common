<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Electricity>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_electricity')]
class Electricity extends Enumeration implements Entity
{

}
