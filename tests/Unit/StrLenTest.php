<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\MyStringFunctions\StrLen;

use function PHPUnit\Framework\assertEquals;

class StrLenTest extends TestCase
{
    private StrLen $class;
    /**
     * @before
     */
    public function initTest(): void
    {
        $this->class = new StrLen();
    }

    /**
     * @test
     * @dataProvider test
     */

    public function strLen($string, $expectedValue)
    {
        $testValue = $this->class::strLen($string);

        assertEquals($testValue, $expectedValue);
    }

    public static function test()
    {
        return [
            ['test', 4],
            ['Test number two', 15],
            ['', 0],
            [' ab cd ', 7],
        ];
    }
}
