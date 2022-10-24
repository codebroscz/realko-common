<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum ProtectionZone: int
{

	case SEWERS = 1;
	case FORREST = 2;
	case NATURAL_PARK = 3;
	case TELECOM = 4;
	case WATER_BODY = 5;
	case WATER_PIPES = 6;
	case MILITARY = 7;
	case HIGH_VOLTAGE = 8;
	case GAS_PIPELINES = 9;
	case OTHER = 10;

}
