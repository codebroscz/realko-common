<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Infrastructure: int
{

	case SCHOOL = 1;
	case KINDER_GARDEN = 2;
	case SHOPPING_MALL = 3;
	case RESTAURANT = 4;
	case POST_OFFICE = 5;
	case MUNICIPAL_OFFICE = 6;
	case DOCTOR = 7;
	case CULTURE_FACILITY = 8;
	case POOL = 9;

}
