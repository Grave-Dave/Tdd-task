<?php

namespace App\MyStringFunctions;

use function Laravel\Prompts\search;

class StrReplace
{
    public static function strReplace($search, $replace, $subject)
    {
        if (!is_array($search)) {
            $search = array($search);
        }
        if (!is_array($replace)) {
            $replace = array($replace);
        }
        $result = '';

        if (strlen($search[0]) > 1) {
            $subjectArr = explode(' ', $subject);
            $len = count($subjectArr);
            for ($i = 0; $i < $len; $i++) {
                $c = $subjectArr[$i];

                if (in_array($c, $search)) {
                    $c = $replace[0];
                    count($replace) && array_shift($replace);
                }

                $i ? $result .= " $c" : $result .= "$c";
            }
            return $result;
        } else {
            $len = strlen($subject);
            for ($i = 0; $i < $len; $i++) {
                $c = $subject[$i];
                if (in_array($c, $search)) {
                    $c = $replace[0];
                    count($replace) > 1 && array_shift($replace);
                }
                $result .= $c;
            }
            return $result;
        }
    }
}
