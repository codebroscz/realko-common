<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum Disposition: int
{

	case GARSONIER = 1;
	case ONE_KK = 2;
	case ONE_ONE = 3;
	case TWO_KK = 4;
	case TWO_ONE = 5;
	case THREE_KK = 6;
	case THREE_ONE = 7;
	case FOUR_KK = 8;
	case FOUR_ONE = 9;
	case FIVE_ONE = 10;
	case FOUR_TWO = 11;
	case FIVE_TWO = 12;
	case SIX_ONE = 13;
	case SIX_TWO = 14;
	case SEVEN_ONE = 15;
	case SEVEN_TWO = 16;
	case EIGHT_ONE = 17;
	case EIGHT_TWO = 18;
	case NINE_ONE = 19;
	case NINE_TWO = 20;
	case ABOVE_NINE_TWO = 21;
	case FIVE_KK = 22;
	case SIX_KK = 23;
	case SEVEN_KK = 24;
	case ROOM = 25;
	// todo other currencies

}
