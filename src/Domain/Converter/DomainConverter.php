<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template T of object
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
	 * @param array<string, mixed> $data
	 *
	 * @return T
	 */
	public function toObject(array $data): object;

}
