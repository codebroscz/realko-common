<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Enum;

enum TypeOfDocument: int
{

	case PHOTO = 1;
	case VIDEO = 2;
	case OTHER = 3;

}
