<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Electricity: int
{

	case V_230 = 1;
	case V_234_400 = 2;
	case NONE = 3;

}
