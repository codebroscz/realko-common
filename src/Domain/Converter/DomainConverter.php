<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template T of \Codebros\RealkoCommon\Domain\Entity\Entity
 */
interface DomainConverter
{

	/**
	 * @phpstan-param T $object
	 *
	 * @return array<string, mixed>
	 */
	public function toArray(object $object): array;

	/**
	 * @param array<string, {id: int, ...mixed}> $data
	 *
	 * @return T
	 */
	public function toObject(array $data): object;

}
