<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Currency: int
{

	case CZK = 1;
	case EUR = 2;
	case USD = 3;
	// todo other currencies

}
