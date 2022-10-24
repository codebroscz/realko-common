<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\KindOfPlotNumbers>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_kind_of_plot_numbers')]
class KindOfPlotNumbers extends Enumeration implements Entity
{

}
