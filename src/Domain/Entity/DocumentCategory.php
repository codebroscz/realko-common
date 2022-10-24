<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @extends Enumeration<\Codebros\RealkoCommon\Domain\Enum\DocumentCategory>
 */
#[ORM\Entity]
#[ORM\Table(name: 'realko_enum_document_category')]
class DocumentCategory extends Enumeration implements Entity
{

}
