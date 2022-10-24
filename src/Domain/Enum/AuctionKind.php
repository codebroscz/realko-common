<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum AuctionKind: int
{

	case INVOLUNTARY = 1;
	case VOLUNTARY = 2;
	case EXECUTION = 3;
	case AUCTION = 4;
	case COMMERCIAL_PUBLIC_AUCTION = 5;

}
