<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\welcomeUser;
use function cli\line;
use function cli\prompt;

function welcomeUser()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function start()
{
    welcomeUser();
}
