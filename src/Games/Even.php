<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function getQuestionAnswer()
{
    return function () {
        $question = mt_rand(1, 100);
        $answer = $question % 2 === 0 ? 'yes' : 'no';
        return [$question, $answer];
    };
}

function start()
{
    runGame(DESCRIPTION, getQuestionAnswer());
}
