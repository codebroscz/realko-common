<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum StructureOfBuilding: int
{

	case PANEL = 1;
	case BRICK = 2;
	case SKELET = 4;
	case WOOD = 5;
	case ROCK = 6;
	case CONSTRUCTED = 7;
	case COMBINED = 8;

}
