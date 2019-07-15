<?php

namespace BrainGames\Gcd;
use function BrainGames\Engine\run;

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function play()
{
    $getResult = function () {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $result = gcd($a, $b);
        $question = "$a $b";
        return [$question, $result];
    };
    run(TASK, $getResult);
}
