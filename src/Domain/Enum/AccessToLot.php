<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum AccessToLot: int
{

	case YES = 1;
	case NO = 2;
	case BURDEN = 3;
	case PUBLIC_ROAD = 4;
	case PRIVATE_ROAD = 5;

}
