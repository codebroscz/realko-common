<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TypeOfRealEstate: int
{

	case FLAT = 1;
	case HOUSE = 2;
	case BLOCK_OF_FLATS = 3;
	case COMMERCIAL = 4;
	case LOT = 5;
	case OTHER = 6;

}
