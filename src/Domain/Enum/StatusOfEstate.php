<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum StatusOfEstate: int
{

	case NEW_BUILDING = 1;
	case VERY_GOOD = 2;
	case GOOD = 3;
	case BAD = 4;
	case DEVASTATED = 5;
	case INVESTMENT_PLAN = 6;
	case PROJECT = 7;
	case UNDER_CONSTRUCTION = 8;
	case NEW_BUILDING_FIRST_OWNER = 10;
	case AFTER_RECONSTRUCTION_FIRST_OWNER = 12;
	case AFTER_RECONSTRUCTION = 13;
	case MAINTAINED_OLD_STATE = 14;
	case BEFORE_RECONSTRUCTION = 15;
	case BEFORE_COMPLETE_RECONSTRUCTION = 16;
	case INCOMPLETE_CONSTRUCTION = 17;

}
