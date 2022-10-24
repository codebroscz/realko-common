<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Furniture>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_furniture')]
class Furniture extends Enumeration implements Entity
{

}
