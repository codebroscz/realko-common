<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Heating: int
{

	case PUBLIC_CENTRAL = 1;
	case CENTRAL_GAS = 2;
	case CENTRAL_FOSSIL = 3;
	case CENTRAL_ELECTRIC = 4;
	case SOLAR_COLLECTORS = 5;
	case NONE = 6;
	case LOCAL_GAS = 7;
	case LOCAL_FOSSIL = 8;
	case LOCAL_ELECTRIC = 9;
	case OTHER = 10;

}
