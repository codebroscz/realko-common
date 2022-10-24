<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Floor>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_floor')]
class Floor extends Enumeration implements Entity
{

}
