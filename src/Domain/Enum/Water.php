<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Water: int
{

	case PIPELINES = 1;
	case WELL = 2;
	case ON_BORDER = 3;
	case NEARBY = 4;
	case PLANNED = 5;
	case NONE = 6;

}
