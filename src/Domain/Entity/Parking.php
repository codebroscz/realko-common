<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Parking>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_parking')]
class Parking extends Enumeration implements Entity
{

}
