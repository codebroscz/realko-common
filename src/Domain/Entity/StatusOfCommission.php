<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\StatusOfCommission>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_status_of_commission')]
class StatusOfCommission extends Enumeration implements Entity
{

}
