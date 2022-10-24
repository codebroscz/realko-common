<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Orientation>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_orientation')]
class Orientation extends Enumeration implements Entity
{

}
