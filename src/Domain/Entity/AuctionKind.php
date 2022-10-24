<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\AuctionKind>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_auction_kind')]
class AuctionKind extends Enumeration implements Entity
{

}
