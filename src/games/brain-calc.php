<?php

namespace BrainGames\Calc;
use function BrainGames\Engine\run;

const TASK = "What is the result of the expression?";

function calculate($operand1, $operand2, $operator)
{
    switch ($operator) {
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

function play()
{
    $getResult = function () {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators, 1)];
        $result = calculate($operand1, $operand2, $operator);
        $question = "$operand1 $operator $operand2";
        return [$question, $result];
    };
    run(TASK, $getResult);
}
