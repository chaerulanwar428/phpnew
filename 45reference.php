<?php

$name = "chaerul";

$othername = &$name;

$othername = "anwar";

echo $name . PHP_EOL;

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;


function &getvalue()
{
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &$getvalue();
echo $b . PHP_EOL;