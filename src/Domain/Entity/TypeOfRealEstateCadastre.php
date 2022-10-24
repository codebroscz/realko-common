<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstateCadastre>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_type_of_real_estate_cadastre')]
class TypeOfRealEstateCadastre extends Enumeration implements Entity
{

}
