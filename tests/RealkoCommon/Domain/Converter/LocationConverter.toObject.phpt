<?php declare(strict_types=1);

require __DIR__ . '/../../../bootstrap.php';

$converter = new \Codebros\RealkoCommon\Domain\Converter\LocationConverter();

$array = [
	'version' => 1,
	'lc1id' => null,
    'lc1name' => null,
    'lc2id' => 1,
    'lc2name' => 'ABC',
    'lc3id' => null,
    'lc3name' => null,
    'lc4id' => null,
    'lc4name' => null,
    'lc5id' => null,
    'lc5name' => null,
    'lc6id' => null,
    'lc6name' => null,
    'lc7id' => null,
    'lc7name' => null,
    'lc8id' => null,
    'lc8name' => null,
    'lc9id' => null,
    'lc9name' => null,
    'lc10id' => null,
    'lc10name' => null,
    'lc11id' => null,
    'lc11name' => null,
    'lc12id' => null,
    'lc12name' => null,
    'lc13id' => null,
    'lc13name' => null,
    'lc14id' => null,
    'lc14name' => null,
    'lc15id' => null,
    'lc15name' => null,
    'lc16id' => null,
    'lc16name' => null,
];

$entity = $converter->toObject($array);

\Tester\Assert::same(1, $entity->version());
\Tester\Assert::null($entity->l1Id());
\Tester\Assert::null($entity->l1Name());
\Tester\Assert::same(1, $entity->l2Id());
\Tester\Assert::same('ABC', $entity->l2Name());
\Tester\Assert::null($entity->l3Id());
\Tester\Assert::null($entity->l3Name());
