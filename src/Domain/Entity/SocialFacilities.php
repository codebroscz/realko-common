<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\SocialFacilities>
 */
#[ORM\Entity()]
#[ORM\Table(name: 'realko_enum_social_facilities')]
class SocialFacilities extends Enumeration implements Entity
{

}
