<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Heating>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_heating')]
class Heating extends Enumeration implements Entity
{

}
