<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TypeOfPrice: int
{

	case TOTAL = 1;
	case PER_M2 = 2;

}
