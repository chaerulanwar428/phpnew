<?php

$firstname = "chaerul";
$lastname = "anwar";


$anonymousfunction = function () use ($firstname, $lastname) : string {
    return "Hello $firstname $lastname" . PHP_EOL;
};


$arrowfunction = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $anonymousfunction();
echo $arrowfunction();