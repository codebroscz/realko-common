<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Source: int
{

	case GAS = 1;
	case ELECTRIC = 2;
	case FOSSIL = 3;
	case SOLAR = 4;
	case HEAT_PUMP = 5;
	case OTHER = 6;

}
