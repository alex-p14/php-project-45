<?php

namespace Brain\Games\Games\Even;

function getDescription()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getQuestionAnswer()
{
    return function () {
        $question = mt_rand(1, 100);
        $answer = $question % 2 === 0 ? 'yes' : 'no';
        return [$question, $answer];
    };
}
