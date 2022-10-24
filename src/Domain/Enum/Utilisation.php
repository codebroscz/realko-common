<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Utilisation: int
{

	case COMMERCIAL = 1;
	case NON_COMMERCIAL = 2;
	case COMBINED = 3;

}
