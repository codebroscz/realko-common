<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum StatusOfCommission: int
{

	case ACTIVE = 2;
	case RESERVED = 3;
	case REALIZED = 4;

}
