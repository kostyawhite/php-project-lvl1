<?php

namespace BrainGames\Calc;
// namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;


function calculate($operand1, $operand2, $op)
{
    switch ($op) {
        case '+':
            return $operand1 + $operand2;
            break;

        case '-':
            return $operand1 - $operand2;
            break;

        case '*':
            return $operand1 * $operand2;
            break;
    }
}

function run()
{
    $result = function () {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operators = ['+', '-', '*'];
        $op = $operators[array_rand($operators, 1)];
        $result = calculate($operand1, $operand2, $op);
        $question = "$operand1 $op $operand2";
        return [$question, $result];
    };
    $task = "What is the result of the expression?";
    \BrainGames\Cli\run($task, $result);
}
