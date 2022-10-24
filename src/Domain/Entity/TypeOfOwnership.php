<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\TypeOfOwnership>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_type_of_ownership')]
class TypeOfOwnership extends Enumeration implements Entity
{

}
