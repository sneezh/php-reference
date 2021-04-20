<?php

namespace tests\FulltextSearch;

use App\References\FulltextSearch\HashSearch;
use PHPUnit\Framework\TestCase;

class HashSearchTest extends TestCase
{
    /**
     * @param string $needle
     * @param string $haystack
     * @param bool $result
     *
     * @dataProvider containsFixtures
     */
    public function testSuccess(string $needle, string $haystack, bool $result): void
    {
        self::assertEquals($result, HashSearch::contains($needle, $haystack));
    }

    public function containsFixtures(): array
    {
        return [
            [
                'needle' => '123',
                'haystack' => '123',
                'result' => true,
            ],
            [
                'needle' => 'z123',
                'haystack' => 'az122b',
                'result' => false,
            ],
            [
                'needle' => '123',
                'haystack' => 'aasdasdasf123',
                'result' => true,
            ],
            [
                'needle' => '',
                'haystack' => 'aasdasdasf123',
                'result' => true,
            ],
            [
                'needle' => 'asdfasdf',
                'haystack' => '',
                'result' => false,
            ],
            [
                'needle' => 'asdfasdf',
                'haystack' => 'asd',
                'result' => false,
            ],
            [
                'needle' => '',
                'haystack' => '',
                'result' => false,
            ],
            [
                'needle' => 'asdfasdf',
                'haystack' => '',
                'result' => false,
            ],
        ];
    }
}
