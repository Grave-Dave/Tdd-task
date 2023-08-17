<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\MyStringFunctions\StrReplace;

use function PHPUnit\Framework\assertEquals;

class StrReplaceTest extends TestCase
{
    private StrReplace $class;
    /**
     * @before
     */
    public function initTest(): void
    {
        $this->class = new StrReplace();
    }

    /**
     * @test
     * @dataProvider test
     */

    public function StrReplace($search, $replace, $subject, $expectedValue)
    {
        $testValue = $this->class::strReplace($search, $replace, $subject);

        assertEquals($testValue, $expectedValue);
    }

    public static function test()
    {
        return [
            ['a', 'b', 'abb', 'bbb'],
            ['cat', 'fish', 'Ala has cat', 'Ala has fish'],
            [
                ["fruits", "vegetables", "fiber"],
                ["pizza", "beer", "ice cream"],
                'You should eat fruits and vegetables and fiber every day.',
                'You should eat pizza and beer and ice cream every day.'
            ],
            [["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"], '', 'Hello World of PHP', 'Hll Wrld f PHP']
        ];
    }
}
