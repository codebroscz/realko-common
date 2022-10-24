<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum SourceOfHotWater: int
{

	case GAS_THROUGH = 1;
	case GAS_WITH_TANK = 2;
	case REMOTE = 3;
	case SOLAR = 4;
	case ELECTRIC_BOILER = 5;
	case OTHER = 6;
	case ELECTRIC_THROUGH = 7;
	case FOSSIL_TANK = 8;
	case SAME_AS_HEATING = 9;

}
