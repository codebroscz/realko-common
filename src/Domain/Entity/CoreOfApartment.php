<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\CoreOfApartment>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_core_of_apartment')]
class CoreOfApartment extends Enumeration implements Entity
{

}
