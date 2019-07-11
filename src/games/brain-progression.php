<?php

namespace BrainGames\Progression;

function progression($init, $step)
{
    $progression = [];
    $counter = 10;
    while ($counter > 0) {
        // initial element
        $progression[] = $init;
        // next element
        $init += $step;
        $counter -= 1;
    }
    return $progression;
}

function run()
{
    $result = function () {
        $init = rand(1, 10);
        $step = rand(1, 10);
        $result = progression($init, $step);
        $idxToFind = array_rand($result);
        $questionArray = $result;
        $questionArray[$idxToFind] = "..";
        $question = implode(' ', $questionArray);
        return [$question, $result[$idxToFind]];
    };
    $task = 'What number is missing in the progression?';
    \BrainGames\Engine\run($task, $result);
}
