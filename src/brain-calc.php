<?php

namespace BrainGames\Calc;
// namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const TASK = "What is the result of the expression?";

function run()
{
    $result = function() {
        $operators = ['+', '-', '*'];
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $result = 0;
        $op = $operators[array_rand($operators, 1)];
        switch ($op) {
            case '+':
                $result = $operand1 + $operand2;
                break;

            case '-':
                $result = $operand1 - $operand2;
                break;

            case '*':
                $result = $operand1 * $operand2;
                break;
        }
        $question = "$operand1 $op $operand2";
        return [$question, $result];
    };
    \BrainGames\Cli\run(TASK, $result);
}