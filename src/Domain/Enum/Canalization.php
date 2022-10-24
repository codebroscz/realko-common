<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Canalization: int
{

	case CITY = 1;
	case SEPTIC = 2;
	case CLEANER = 3;
	case NO_PREMISE = 4;
	case NEARBY = 5;
	case PLANNED = 6;
	case NONE = 7;
	case RETENTION = 8;

}
