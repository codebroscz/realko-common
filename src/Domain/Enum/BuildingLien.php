<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum BuildingLien: int
{

	case PERSONS = 1;
	case BANKS = 2;
	case COMPANIES = 3;
	case OTHER_SUBJECTS = 4;
	case NONE = 5;

}
