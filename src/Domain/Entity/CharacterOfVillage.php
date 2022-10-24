<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\CharacterOfVillage>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_character_of_village')]
class CharacterOfVillage extends Enumeration implements Entity
{

}
