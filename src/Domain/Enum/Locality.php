<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Locality: int
{

	case CENTRE = 1;
	case CALM = 2;
	case OUT_OF_CITY = 3;
	case NEW_NEIGHBORHOOD = 4;
	case EDGE = 5;
	case BLOCK_OF_BUILDINGS = 6;
	case HALF_WILDERNESS = 7;
	case WILDERNESS = 8;
	case OLD_NEIGHBORHOOD = 9;
	case IN_CITY = 10;

}
