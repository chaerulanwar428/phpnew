<?php

function sayHello (string $name, callable $filter)
{
    $filterName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("chaerul", "strtouppper");
sayHello("anwar", "strtolower");

//anonymousfunctiomn
sayHello ("chaerul", function(string $nsme): string{
    return strtoupper($name);
});

//arrowfunction
sayHello("anwar", fn($name) => strtoupper($name));