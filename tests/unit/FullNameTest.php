<?php

namespace unit;

use OSCRM\Domain\Contact\FullName;
use PHPUnit\Framework\TestCase;

class FullNameTest extends TestCase
{
    /**
     * @dataProvider validFullNameProvider
     * @test
     * @void
     */
    public function it_confirms_valid_full_names(string $input, string $expected): void
    {
        $name = new FullName($input);
        $this->assertEquals($expected, $name->get());
    }

    public function validFullNameProvider(): array
    {
        return [
            'simple name' => ['John Doe', 'John Doe'],
            'name with extra whitespace' => ['  John   Doe  ', 'John Doe'],
            'international characters' => ['José Álvarez', 'José Álvarez'],
            'compound name' => ["Anne-Marie O'Connor", "Anne-Marie O'Connor"],
            'minimum name' => ['J D', 'J D'],
        ];
    }

    /**
     * @todo implement
     */
    public function invalidFullNameProvider(): array
    {
        return [
        ];
    }
}
