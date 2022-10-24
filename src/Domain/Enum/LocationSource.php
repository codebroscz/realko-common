<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum LocationSource: int
{

	case IN_ROOM = 1;
	case IN_HOUSE = 2;
	case REMOTE = 3;
	case NONE = 4;

}
