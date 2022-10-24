<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\TypeOfPrice>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_type_of_price')]
class TypeOfPrice extends Enumeration implements Entity
{

}
