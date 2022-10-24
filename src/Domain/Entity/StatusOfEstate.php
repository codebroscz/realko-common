<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\StatusOfEstate>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_status_of_estate')]
class StatusOfEstate extends Enumeration implements Entity
{

}
