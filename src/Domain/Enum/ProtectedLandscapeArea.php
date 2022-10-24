<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum ProtectedLandscapeArea: int
{

	case YES = 1;
	case NO = 2;
	case PROTECTED_AREA = 3;
	case NEARBY = 4;

}
