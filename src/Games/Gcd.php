<?php

namespace Brain\Games\Games\Gcd;

function getDescription()
{
    return 'Find the greatest common divisor of given numbers.';
}

function getGcd(int $firstNum, int $secondNum)
{
    $remDivision = $firstNum % $secondNum;
    return $remDivision === 0 ? $secondNum : getGcd($secondNum, $remDivision);
}

function getQuestionAnswer()
{
    return function () {
        $firstNum = mt_rand(1, 100);
        $secondNum = mt_rand(1, 100);
        $question = $firstNum . ' ' . $secondNum;
        $gcd = getGcd($firstNum, $secondNum);
        return [$question, $gcd];
    };
}
