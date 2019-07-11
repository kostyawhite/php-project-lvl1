<?php

namespace BrainGames\Prime;

function isPrime($number)
{
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $result = function () {
        $num = rand(1, 100);
        $result = isPrime($num) ? "yes" : "no";
        $question = "$num";
        return [$question, $result];
    };
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    \BrainGames\Engine\run($task, $result);
}
