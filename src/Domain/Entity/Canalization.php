<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\Canalization>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_canalization')]
class Canalization extends Enumeration implements Entity
{

}
