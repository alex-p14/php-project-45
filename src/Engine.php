<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\out;
use function cli\prompt;

function runGame(string $description, callable $getQuestionAnswer)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);

    $amountRounds = 3;
    for ($i = 0; $i < $amountRounds; $i++) {
        [$question, $rightAnswer] = $getQuestionAnswer();
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer != $rightAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
