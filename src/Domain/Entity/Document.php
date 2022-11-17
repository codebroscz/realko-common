<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'realko_document')]
class Document
{

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	protected int $id;

	#[ORM\Column]
	protected int $externalId;

	#[ORM\Column]
	protected int $position;

	#[ORM\Column]
	protected ?\DateTimeImmutable $dateOfUpdate = null;

	#[ORM\ManyToOne(targetEntity: TypeOfDocument::class, cascade: ['persist'])]
	#[ORM\JoinColumn(nullable: true)]
	protected TypeOfDocument $typeOfDocument;

	#[ORM\Column]
	protected ?string $description = null;

	#[ORM\ManyToOne(targetEntity: DocumentCategory::class, cascade: ['persist'])]
	#[ORM\JoinColumn(nullable: true)]
	protected ?DocumentCategory $documentCategory = null;

	public function __construct(
		int $externalId,
		int $position,
		?\DateTimeImmutable $dateOfUpdate,
		?TypeOfDocument $typeOfDocument,
		?string $description,
		?DocumentCategory $documentCategory
	)
	{
		$this->externalId = $externalId;
		$this->position = $position;
		$this->dateOfUpdate = $dateOfUpdate;
		$this->typeOfDocument = $typeOfDocument;
		$this->description = $description;
		$this->documentCategory = $documentCategory;
	}

	public function id(): int
	{
		return $this->id;
	}

	public function externalId(): int
	{
		return $this->externalId;
	}

	public function position(): int
	{
		return $this->position;
	}

	public function dateOfUpdate(): ?\DateTimeImmutable
	{
		return $this->dateOfUpdate;
	}

	public function typeOfDocument(): TypeOfDocument
	{
		return $this->typeOfDocument;
	}

	public function description(): ?string
	{
		return $this->description;
	}

	public function documentCategory(): ?DocumentCategory
	{
		return $this->documentCategory;
	}

}
