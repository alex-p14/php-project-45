<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';

function getQuestionAnswer()
{
    return function () {
        $startNum = mt_rand(1, 100);
        $step = mt_rand(1, 10);
        $hiddenNum = mt_rand(1, 10);
        $amountNum = 10;
        $question = [];
        for ($i = 1; $i <= $amountNum; $i++) {
            $question[] = $startNum + $step * $i;
        }
        $question[$hiddenNum - 1] = '..';
        $answer = $startNum + $step * $hiddenNum;
        $question = implode(' ', $question);
        return [$question, $answer];
    };
}

function start()
{
    runGame(DESCRIPTION, getQuestionAnswer());
}
