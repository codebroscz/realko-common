<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum SubtypeOfRealEstate: int
{

	case STANDALONE = 1;
	case IN_ROW = 2;
	case VILLA = 3;
	case SMALL_COTTAGE = 4;
	case COTTAGE = 5;
	case FARM = 6;

	case OFFICE_SPACE = 7;
	case COMMERCIAL_SPACE = 8;
	case STORAGE_SPACE = 9;
	case MANUFACTURING_SPACE = 10;
	case RESTAURANT_SPACE = 11;
	case ADMINISTRATIVE_SPACE = 26;
	case AREAL = 27;
	case RESTAURANT_BAR = 28;
	case HOTEL = 29;
	case PENSION = 30;
	case MULTIFUNCTIONAL = 33;
	case MIXED_COMMERCIAL = 34;
	case AGRO = 35;
	case DOCTOR_OFFICE = 39;
	case OTHER_COMMERCIAL = 12;

	case INFERTILE_LAND = 22;
	case DEMOLITION = 23;
	case GREEN = 24;
	case BUILDABLE_HOUSING = 13;
	case BUILDABLE_COMMERCIAL = 14;
	case BUILDABLE_MIXED = 15;
	case GARDEN = 16;
	case AGRO_LAND = 17;
	case FIELD = 18;
	case FORREST = 19;
	case WATER_AREA = 20;
	case MINING_AREA = 21;
	case ORCHARD_VINEYARD = 36;
	case OTHER = 37;

	case GARAGE = 25;
	case SPECIAL_REAL_ESTATE = 32;
	case CASTLE = 31;
	case GARAGE_SPOT = 38;
	case WINE_CELLAR = 40;
	case ATTIC = 41;
	case MOBILHEIM = 42;

}
