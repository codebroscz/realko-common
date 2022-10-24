<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum UtilisationByLandUsePlanning: int
{

	case TRANSPORT = 1;
	case RESIDENCE = 2;
	case NATURE = 3;
	case COMBINED = 4;
	case SPECIFIC = 5;
	case SPORT = 6;
	case TECHNICAL = 7;
	case PUBLIC = 8;
	case WATER = 9;
	case MANUFACTURING_SERVICES = 10;
	case AGRICULTURE = 11;
	case SPECIAL = 12;

}
