<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Furnished: int
{

	case FURNISHED = 1;
	case NOT_FURNISHED = 2;
	case PARTIALLY_FURNISHED = 3;
	case CAN_BE_FURNISHED = 4;

}
