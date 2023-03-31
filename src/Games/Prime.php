<?php

namespace Brain\Games\Games\Prime;

function getDescription()
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function isPrime(int $num)
{
    if ($num === 1) {
        return false;
    }
    $halfNum = intdiv($num, 2);
    for ($i = 2; $i <= $halfNum; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function getQuestionAnswer()
{
    return function () {
        $question = mt_rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
}
