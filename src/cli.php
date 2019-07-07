<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($task, $result)
{
    line("Welcome to the Brain Game");
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // number of trials
    $correct = 3;
    while ($correct !== 0) {
        [$question, $rightAnswer] = $result();
        line("Question: %s", $question);
        $answer = prompt("Your asnwer");
        if ($rightAnswer == $answer) {
            line("Correct!");
            // as per one correct answer decrease $correct counter
            $correct -= 1;
        } else {
            line("'%s' is wrong answer ;(. Correct asnwer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
        }
    }
    line("Congratulations, %s!", $name);
}
