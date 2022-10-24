<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Source>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_heating2_source')]
class Source extends Enumeration implements Entity
{

}
