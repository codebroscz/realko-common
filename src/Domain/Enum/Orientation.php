<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Orientation: int
{

	case N = 1;
	case S = 2;
	case E = 3;
	case W = 4;
	case NE = 5;
	case NW = 6;
	case SE = 7;
	case SW = 8;

}
