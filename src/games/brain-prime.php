<?php

namespace BrainGames\Prime;
use function BrainGames\Engine\run;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    // false for negatives, 0 and 1
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function play()
{
    $getResult = function () {
        $num = rand(1, 100);
        $result = isPrime($num) ? "yes" : "no";
        $question = $num;
        return [$question, $result];
    };
    run(TASK, $getResult);
}
