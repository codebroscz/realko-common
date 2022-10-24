<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\TransportAccessibility>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_transport_accessibility')]
class TransportAccessibility extends Enumeration implements Entity
{

}
