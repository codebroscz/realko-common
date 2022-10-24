<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @template E
 */
#[ORM\MappedSuperclass]
abstract class Enumeration
{

	#[ORM\Id]
	#[ORM\Column(type: 'integer')]
	protected int $id;

	#[ORM\Column(type: 'string')]
	protected string $title;

	public function __construct(int $id, string $title)
	{
		$this->id = $id;
		$this->title = $title;
	}

	public function id(): int
	{
		return $this->id;
	}

	public function title(): string
	{
		return $this->title;
	}

}
