<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\ProtectedLandscapeArea>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_protected_landscape_area')]
class ProtectedLandscapeArea extends Enumeration implements Entity
{

}
