<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Gas: int
{

	case YES = 1;
	case CAN_BE_ESTABLISHED = 2;
	case NO_BORDER = 3;
	case NEARBY = 4;
	case PLANNED = 5;
	case NONE = 6;

}
