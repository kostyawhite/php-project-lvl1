<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function run($task, $result)
{
    line("Welcome to the Brain Game");
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // number of correct trials
    $correct = 0;
    while ($correct < ROUNDS) {
        [$question, $rightAnswer] = $result();
        line("Question: %s", $question);
        $answer = prompt("Your answer");
        if ($rightAnswer == $answer) {
            line("Correct!");
            // as per one correct answer increase $correct counter
            $correct += 1;
        } else {
            line("'%s' is wrong answer ;(. Correct asnwer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
        }
    }
    line("Congratulations, %s!", $name);
}
