<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\InternetConnection>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_internet_connection')]
class InternetConnection extends Enumeration implements Entity
{

}
