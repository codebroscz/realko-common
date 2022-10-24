<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\EcologicalLoad>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_ecological_load')]
class EcologicalLoad extends Enumeration implements Entity
{

}
