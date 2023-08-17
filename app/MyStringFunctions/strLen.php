<?php

namespace App\MyStringFunctions;

class StrLen
{
    public static function strLen($string)
    {
        $len = strlen($string);
        $result = 0;
        for ($i = 0; $i < $len; $i++) {
            $result++;
        }
        return $result;
    }
}
