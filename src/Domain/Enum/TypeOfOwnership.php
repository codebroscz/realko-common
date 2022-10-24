<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TypeOfOwnership: int
{

	case PERSONAL = 1;
	case COMMUNAL = 2;
	case MUNICIPAL = 3;
	case ASK_OWNER = 5;

}
