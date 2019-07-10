<?php

namespace BrainGames\Gcd;

function gcd($a, $b)
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function run()
{
    $result = function () {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $result = gcd($a, $b);
        $question = "$a $b";
        return [$question, $result];
        // TODO
    };
    $task = 'Find the greatest common divisor of given numbers.';
    \BrainGames\Engine\run($task, $result);
}
