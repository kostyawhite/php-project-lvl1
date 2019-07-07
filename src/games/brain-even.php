<?php

namespace BrainGames\Even;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $result = function () {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer]; 
    };
    $task = 'Answer "yes" if number even otherwise answer "no".';
    \BrainGames\Engine\run($task, $result);
}
