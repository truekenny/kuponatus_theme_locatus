<?php

class NumberHelper
{
    public static function rand($min, $max)
    {
        $range = $max - $min;
        $num = $min + $range * mt_rand(0, 32767) / 32767;

        $num = round($num, 4);

        return ((float)$num);
    }
}