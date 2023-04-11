<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num)
{
    if ($num === 1) {
        return false;
    } elseif ($num === 2) {
        return true;
    } else {
        if ($num % 2 === 0) {
            return false;
        } else {
            $halfNum = intdiv($num, 2);
            for ($i = 3; $i <= $halfNum; $i += 2) {
                if ($num % $i === 0) {
                    return false;
                }
            }
            return true;
        }
    }
}

function getQuestionAnswer()
{
    return function () {
        $question = mt_rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
}

function start()
{
    runGame(DESCRIPTION, getQuestionAnswer());
}
