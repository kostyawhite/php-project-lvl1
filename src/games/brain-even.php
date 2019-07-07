<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function isEven($number)
{
    return $number % 2 === 0;
}

function evenGame($name)
{
    $question = rand(1, 100);
    line("Question: %s", $question);
    $answer = prompt("Your answer");
    if (isEven($question) && $answer === 'yes' ||
        !isEven($question) && $answer === 'no') {
        line("Correct!");
        return true;
    } elseif (isEven($question) && $answer === 'no') {
        line("'%s' is wrong answer ;(. Correct answer was 'yes'.", $answer);
        line("Let's try again, %s!", $name);
        return false;
    } elseif (!isEven($question) && $answer === 'yes') {
        line("'%s' is wrong answer ;(. Correct answer was 'no'.", $answer);
        line("Let's try again, %s!", $name);
        return false;
    } else {
        line("'%s' is wrong answer ;(. Please try again!", $answer);
        return false;
    }
}


function run()
{
    $task = 'Answer "yes" if number even otherwise answer "no".';
    line("Welcome to the Brain Game");
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // number of trials to succeed
    $correct = 3;
    while ($correct !== 0) {
        if (evenGame($name)) {
            $correct -= 1;
        }
    }
    line("Congratulations, %s", $name);
}
