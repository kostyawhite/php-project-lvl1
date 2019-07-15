<?php

namespace BrainGames\Even;
use function BrainGames\Engine\run;

const TASK = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function play()
{
    $getResult = function () {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
    run(TASK, $getResult);
}
