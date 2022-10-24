<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum RoadType: int
{

	case ASPHALT = 1;
	case CONCRETE = 2;
	case TILED = 3;
	case NOT_HARDENED = 4;
	case HARDENED = 5;
	case ROCK = 6;
	case NONE = 7;

}
