<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\AccessToLot>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_access_to_lot')]
class AccessToLot extends Enumeration implements Entity
{

}
