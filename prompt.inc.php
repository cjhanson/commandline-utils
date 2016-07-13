<?php
function prompt($prompt)
{
    echo $prompt;

    $handle = fopen('php://stdin', 'r');

    $line = fgets($handle);

    fclose($handle);

    return trim($line);
}
