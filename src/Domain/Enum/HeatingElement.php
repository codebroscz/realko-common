<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum HeatingElement: int
{

	case RADIATOR = 1;
	case FLOOR = 2;
	case DIRECT_HEATER = 3;
	case INFRA_HEATER = 4;
	case INDUCTION = 5;
	case FANCOIL = 6;
	case VAF = 7;
	case FIREPLACE = 8;
	case FIRE_STOVE = 9;
	case STOVE = 10;
	case FURNACE = 11;
	case OTHER = 12;

}
