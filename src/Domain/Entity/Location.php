<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'realko_location')]
class Location implements Entity
{

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	protected int $id;

	#[ORM\Column]
	protected int $version;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l1Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l1Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l2Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l2Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l3Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l3Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l4Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l4Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l5Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l5Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l6Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l6Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l7Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l7Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l8Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l8Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l9Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l9Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l10Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l10Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l11Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l11Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l12Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l12Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l13Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l13Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l14Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l14Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l15Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l15Name = null;

	#[ORM\Column(type: 'bigint', nullable: true)]
	protected ?int $l16Id = null;

	#[ORM\Column(nullable: true)]
	protected ?string $l16Name = null;

	public function __construct(
		int $version,
		?int $l1Id = null,
		?string $l1Name = null,
		?int $l2Id = null,
		?string $l2Name = null,
		?int $l3Id = null,
		?string $l3Name = null,
		?int $l4Id = null,
		?string $l4Name = null,
		?int $l5Id = null,
		?string $l5Name = null,
		?int $l6Id = null,
		?string $l6Name = null,
		?int $l7Id = null,
		?string $l7Name = null,
		?int $l8Id = null,
		?string $l8Name = null,
		?int $l9Id = null,
		?string $l9Name = null,
		?int $l10Id = null,
		?string $l10Name = null,
		?int $l11Id = null,
		?string $l11Name = null,
		?int $l12Id = null,
		?string $l12Name = null,
		?int $l13Id = null,
		?string $l13Name = null,
		?int $l14Id = null,
		?string $l14Name = null,
		?int $l15Id = null,
		?string $l15Name = null,
		?int $l16Id = null,
		?string $l16Name = null,
	) {
		$this->version = $version;
		$this->l1Id = $l1Id;
		$this->l1Name = $l1Name;
		$this->l2Id = $l2Id;
		$this->l2Name = $l2Name;
		$this->l3Id = $l3Id;
		$this->l3Name = $l3Name;
		$this->l4Id = $l4Id;
		$this->l4Name = $l4Name;
		$this->l5Id = $l5Id;
		$this->l5Name = $l5Name;
		$this->l6Id = $l6Id;
		$this->l6Name = $l6Name;
		$this->l7Id = $l7Id;
		$this->l7Name = $l7Name;
		$this->l8Id = $l8Id;
		$this->l8Name = $l8Name;
		$this->l9Id = $l9Id;
		$this->l9Name = $l9Name;
		$this->l10Id = $l10Id;
		$this->l10Name = $l10Name;
		$this->l11Id = $l11Id;
		$this->l11Name = $l11Name;
		$this->l12Id = $l12Id;
		$this->l12Name = $l12Name;
		$this->l13Id = $l13Id;
		$this->l13Name = $l13Name;
		$this->l14Id = $l14Id;
		$this->l14Name = $l14Name;
		$this->l15Id = $l15Id;
		$this->l15Name = $l15Name;
		$this->l16Id = $l16Id;
		$this->l16Name = $l16Name;
	}

	public function id(): int
	{
		return $this->id;
	}

	public function version(): int
	{
		return $this->version;
	}

	public function l1Id(): ?int
	{
		return $this->l1Id;
	}

	public function l1Name(): ?string
	{
		return $this->l1Name;
	}

	public function l2Id(): ?int
	{
		return $this->l2Id;
	}

	public function l2Name(): ?string
	{
		return $this->l2Name;
	}

	public function l3Id(): ?int
	{
		return $this->l3Id;
	}

	public function l3Name(): ?string
	{
		return $this->l3Name;
	}

	public function l4Id(): ?int
	{
		return $this->l4Id;
	}

	public function l4Name(): ?string
	{
		return $this->l4Name;
	}

	public function l5Id(): ?int
	{
		return $this->l5Id;
	}

	public function l5Name(): ?string
	{
		return $this->l5Name;
	}

	public function l6Id(): ?int
	{
		return $this->l6Id;
	}

	public function l6Name(): ?string
	{
		return $this->l6Name;
	}

	public function l7Id(): ?int
	{
		return $this->l7Id;
	}

	public function l7Name(): ?string
	{
		return $this->l7Name;
	}

	public function l8Id(): ?int
	{
		return $this->l8Id;
	}

	public function l8Name(): ?string
	{
		return $this->l8Name;
	}

	public function l9Id(): ?int
	{
		return $this->l9Id;
	}

	public function l9Name(): ?string
	{
		return $this->l9Name;
	}

	public function l10Id(): ?int
	{
		return $this->l10Id;
	}

	public function l10Name(): ?string
	{
		return $this->l10Name;
	}

	public function l11Id(): ?int
	{
		return $this->l11Id;
	}

	public function l11Name(): ?string
	{
		return $this->l11Name;
	}

	public function l12Id(): ?int
	{
		return $this->l12Id;
	}

	public function l12Name(): ?string
	{
		return $this->l12Name;
	}

	public function l13Id(): ?int
	{
		return $this->l13Id;
	}

	public function l13Name(): ?string
	{
		return $this->l13Name;
	}

	public function l14Id(): ?int
	{
		return $this->l14Id;
	}

	public function l14Name(): ?string
	{
		return $this->l14Name;
	}

	public function l15Id(): ?int
	{
		return $this->l15Id;
	}

	public function l15Name(): ?string
	{
		return $this->l15Name;
	}

	public function l16Id(): ?int
	{
		return $this->l16Id;
	}

	public function l16Name(): ?string
	{
		return $this->l16Name;
	}

}
