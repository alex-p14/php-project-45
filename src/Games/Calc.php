<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';

function getQuestionAnswer()
{
    return function () {
        $firstNum = mt_rand(1, 100);
        $secondNum = mt_rand(1, 100);
        $operator = array_rand(['+' => 0, '-' => 1, '*' => 2]);
        $answer = match ($operator) {
            '+' => $firstNum + $secondNum,
            '-' => $firstNum - $secondNum,
            '*' => $firstNum * $secondNum,
            default => throw new \Exception("Неизвестный оператор"),
        };
        $question = $firstNum . ' ' . $operator . ' ' . $secondNum;
        return [$question, $answer];
    };
}

function start()
{
    runGame(DESCRIPTION, getQuestionAnswer());
}
