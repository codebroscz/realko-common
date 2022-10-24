<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceCertificate>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_energy_performance_certificate')]
class EnergyPerformanceCertificate extends Enumeration implements Entity
{

}
