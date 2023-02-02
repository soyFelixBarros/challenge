<?php

namespace App\Helpers;

class NumberHelper
{
    public static function isEven(int $number) : bool
	{
        return $number % 2 == 0;
	}
}