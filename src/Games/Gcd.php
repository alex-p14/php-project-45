<?php

namespace Brain\Games\Games\Gcd;

function getDescription()
{
    return function () {
        return 'Find the greatest common divisor of given numbers.';
    };
}

function getGcd($maxNum, $minNum)
{
    $remDivision = $maxNum % $minNum;
    return $remDivision === 0 ? $minNum : getGcd($minNum, $remDivision);
}

function getQuestionAnswer()
{
    return function () {
        $firstNum = mt_rand(1, 100);
        $secondNum = mt_rand(1, 100);
        $question = $firstNum . ' ' . $secondNum;
        if ($firstNum < $secondNum) {
            [$minNum, $maxNum] = [$firstNum, $secondNum];
        } else {
            [$minNum, $maxNum] = [$firstNum, $secondNum];
        }
        $gcd = getGcd($maxNum, $minNum);
        return [$question, $gcd];
    };
}
