<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionfoo = "foo";
$functionfoo();

$functionbar = "bar";
$functionbar();



function sayHello(string $name, $filter)
{
    $finalName = $filterName($name);
    echo "Hello $finalName" . PHP_EOL;
}
function samplefunction(string $name): string{
    return "Sample $name";
}

sayHello("chaerul", "samplefunction");
sayHello("chaerul", "strtoupper");
sayHello("chaerul", "strtolower");