<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TypeOfCommission: int
{

	case SELL = 1;
	case RENT = 2;
	case AUCTION = 3;

}
