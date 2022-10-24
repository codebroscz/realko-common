<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum InternetConnection: int
{

	case ADSL = 1;
	case CABLE = 2;
	case WIFI = 3;
	case OTHER = 4;
	case NONE = 5;

}
