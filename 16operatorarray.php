<?php

//union
$first = [
    "first_name" => "chaerul"
];

$last = [
    "first_name" => "yanto",
    "last_name" => "anwar"
];

$full = $first + $last;
var_dump($full);

//identity
$a = [
    "first_name" => "chaerul",
    "last_name" => "anwar"
];

$b = [
    "last_name" => "anwar",
    "first_name" => "chaerul"
];

var_dump($a == $b);
var_dump($a === $b);