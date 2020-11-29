<?php

function readFromConsole($input='')
{
    if (!$input)
    {
        $input = trim(fgets(STDIN));
    }
    if ($input === 'true')
    {
        return true;
    }
    if ($input === 'false')
    {
        return false;
    }
    if ($input === '!stop')
    {
        return null;
    }
    if (is_numeric($input))
    {
        return +$input;
    }
    if (is_string($input))
    {
        return $input;
    }
}
