<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Gas>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_gas')]
class Gas extends Enumeration implements Entity
{

}
