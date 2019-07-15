<?php

namespace BrainGames\Progression;
use function BrainGames\Engine\run;

const TASK = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function progression($init, $step)
{
    $progression = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        // initial element
        $progression[] = $init;
        // next element
        $init += $step;
    }
    return $progression;
}

function play()
{
    $getResult = function () {
        $init = rand(1, 10);
        $step = rand(1, 10);
        $result = progression($init, $step);
        $idxToFind = array_rand($result);
        $question = $result;
        $question[$idxToFind] = "..";
        $question = implode(' ', $question);
        return [$question, $result[$idxToFind]];
    };
    run(TASK, $getResult);
}
