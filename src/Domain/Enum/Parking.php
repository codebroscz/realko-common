<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Parking: int
{

	case GARAGE = 1;
	case OUTDOOR = 2;
	case BY_BUILDING_PUBLIC = 3;
	case COVERED = 4;
	case NONE = 5;
	case GARAGE_SPOT = 6;

}
