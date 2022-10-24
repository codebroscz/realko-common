<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\ProtectionZone>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_protection_zone')]
class ProtectionZone extends Enumeration implements Entity
{

}
