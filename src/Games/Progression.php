<?php

namespace Brain\Games\Games\Progression;

function getDescription()
{
    return function () {
        return 'What number is missing in the progression?';
    };
}

function getQuestionAnswer()
{
    return function () {
        $startNum = mt_rand(1, 100);
        $step = mt_rand(1, 10);
        $hiddenNum = mt_rand(1, 10);
        $amountNum = 10;
        $question = [];
        $answer = null;
        for ($i = 1; $i <= $amountNum; $i++) {
            if ($i != $hiddenNum) {
                $question[] = $startNum + $step * $i;
            } else {
                $question[] = '..';
                $answer = $startNum + $step * $i;
            }
        }
        $question = implode(' ', $question);
        return [$question, $answer];
    };
}
