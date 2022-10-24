<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum ElectricityOnLot: int
{

	case V_230 = 1;
	case V_234_400 = 2;
	case ON_BORDER = 3;
	case NEARBY = 4;
	case PLANNED = 5;
	case NONE = 6;

}
