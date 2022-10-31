<?php declare(strict_types=1);

require __DIR__ . '/../../../bootstrap.php';

$location = new \Codebros\RealkoCommon\Domain\Entity\Location(
    1,
    null,
    null,
    1,
    'ABC',
);

$converter = new \Codebros\RealkoCommon\Domain\Converter\LocationConverter();

$array = $converter->toArray($location);

$expected = [
	'version' => 1,
    'lc1id' => null,
    'lc1name' => null,
    'lc2id' => 1,
    'lc2name' => 'ABC',
    'lc3id' => null,
    'lc3name' => null,
];

$intersection = \array_intersect_key($array, $expected);

\Tester\Assert::same($expected, $intersection);
