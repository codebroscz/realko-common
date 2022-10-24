<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum CharacterOfVillage: int
{

	case BIG_CITY = 1;
	case SMALL_CITY = 2;
	case VILLAGE = 3;
	case TOURIST_CENTER = 4;
	case SPA = 5;
	case BORDER_CROSSING = 6;

}
