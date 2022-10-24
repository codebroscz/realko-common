<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Locality>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_locality')]
class Locality extends Enumeration implements Entity
{

}
