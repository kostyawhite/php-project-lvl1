<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const ROUNDSCOUNT = 3;

function run($task, $getResult)
{
    line("Welcome to the Brain Game");
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // play 3 rounds
    for ($i = 0; $i < ROUNDSCOUNT; $i++) {
        [$question, $rightAnswer] = $getResult();
        line("Question: %s", $question);
        $answer = prompt("Your answer");
        if ($rightAnswer == $answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct asnwer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            // exit if wrong answer
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
