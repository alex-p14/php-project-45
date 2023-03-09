<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function welcomeUser()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function runGame($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $amountRounds = 3;
    for ($i = 0; $i < $amountRounds; $i++) {
        $question = mt_rand(1, 100);
        line("Quwstion: %s", $question);
        $ans = prompt('Your answer');
        $rAns = $question % 2 === 0 ? 'yes' : 'no';
        if ($ans != $rAns) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $ans, $rAns);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratilations, %s!", $name);
}
