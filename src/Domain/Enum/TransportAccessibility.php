<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TransportAccessibility: int
{

	case PUBLIC_TRANSPORT = 1;
	case CITY_TRANSPORT = 2;
	case CAR = 3;
	case HIGHWAY = 4;
	case FIRST_CLASS_ROAD = 5;
	case SECOND_CLASS_ROAD = 6;
	case METRO = 7;
	case TRAIN = 8;
	case AIRPORT = 10;

}
