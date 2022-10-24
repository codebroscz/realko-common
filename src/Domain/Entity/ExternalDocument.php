<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'realko_external_document')]
class ExternalDocument
{

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	protected int $id;

	#[ORM\Column]
	protected string $url;

	#[ORM\Column]
	protected int $position;

	#[ORM\Column]
	protected ?string $description = null;


	public function __construct(
		string $url,
		int $position,
		?string $description,
	)
	{
		$this->url = $url;
		$this->position = $position;
		$this->description = $description;
	}

	public function id(): int
	{
		return $this->id;
	}

	public function url(): string
	{
		return $this->url;
	}

	public function position(): int
	{
		return $this->position;
	}

	public function description(): ?string
	{
		return $this->description;
	}

}
