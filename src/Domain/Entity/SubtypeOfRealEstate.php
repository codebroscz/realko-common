<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\SubtypeOfRealEstate>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_subtype_of_real_estate')]
class SubtypeOfRealEstate extends Enumeration implements Entity
{

}
