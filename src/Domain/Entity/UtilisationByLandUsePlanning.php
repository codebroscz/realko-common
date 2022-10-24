<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Furniture>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_utilisation_by_land_use_planning')]
class UtilisationByLandUsePlanning extends Enumeration implements Entity
{

}
