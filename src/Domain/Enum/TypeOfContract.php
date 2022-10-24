<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TypeOfContract: int
{

	case EXCLUSIVE = 1;
	case NON_EXCLUSIVE = 2;
	case NONE = 3;

}
