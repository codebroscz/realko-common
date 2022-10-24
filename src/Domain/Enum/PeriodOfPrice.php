<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum PeriodOfPrice: int
{

	case YEARLY = 1;
	case MONTHLY = 2;
	case WEEKLY = 3;

}
