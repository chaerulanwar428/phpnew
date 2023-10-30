<?php

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("yanto");
$sayHello("anwar");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("chaerul", function (string $name):string{
    return strtoupper($name);
});

$filterfunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("chaerul", $filterfunction);


//mengakses variable diluar function

$finalName = "chaerul";
$lastName = "anwar";

$sayHello2 = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHello2();