<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'realko_heating2')]
class Heating2
{

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	protected int $id;

	#[ORM\ManyToOne(targetEntity: Estate::class, cascade: ['persist'], inversedBy: 'heating2')]
	protected Estate $estate;

	#[ORM\ManyToOne(targetEntity: LocationSource::class)]
	#[ORM\JoinColumn(nullable: true)]
	protected ?\Codebros\RealkoCommon\Domain\Entity\LocationSource $locationSource = null;

	#[ORM\ManyToOne(targetEntity: Source::class)]
	#[ORM\JoinColumn(nullable: true)]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Source $source = null;

	#[ORM\ManyToOne(targetEntity: HeatingElement::class)]
	#[ORM\JoinColumn(nullable: true)]
	protected ?\Codebros\RealkoCommon\Domain\Entity\HeatingElement $heatingElement = null;

	public function __construct(
		?\Codebros\RealkoCommon\Domain\Entity\LocationSource $locationSource,
		?\Codebros\RealkoCommon\Domain\Entity\Source $source,
		?\Codebros\RealkoCommon\Domain\Entity\HeatingElement $heatingElement,
	)
	{
		$this->locationSource = $locationSource;
		$this->source = $source;
		$this->heatingElement = $heatingElement;
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function setEstate(Estate $estate): void
	{
		$this->estate = $estate;
	}

	public function estate(): Estate
	{
		return $this->estate;
	}

	public function locationSource(): ?\Codebros\RealkoCommon\Domain\Entity\LocationSource
	{
		return $this->locationSource;
	}

	public function source(): ?\Codebros\RealkoCommon\Domain\Entity\Source
	{
		return $this->source;
	}

	public function heatingElement(): ?\Codebros\RealkoCommon\Domain\Entity\HeatingElement
	{
		return $this->heatingElement;
	}

}
