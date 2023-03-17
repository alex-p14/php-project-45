<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runGame($description, $getQuestionAnswer)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description());
    $amountRounds = 3;
    for ($i = 0; $i < $amountRounds; $i++) {
        [$question, $rAns] = $getQuestionAnswer();
        line("Question: %s", $question);
        $ans = prompt('Your answer');
        if ($ans != $rAns) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $ans, $rAns);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratilations, %s!", $name);
}
