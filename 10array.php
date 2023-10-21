<?php

$values = array(10,9,8,7.5);
var_dump($values);


$names = ["chaerul","anwar","ahmad"];
var_dump($names);

var_dump($names[0]);

$names[0] = "budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[]= "Joko";
var_dump($names);

var_dump(count($names));

//kode map
$chaerul = array(
    "id" => "chaerul",
    "name" => "chaerul anwar",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country"=> "Indonesia"
    ]
);

var_dump($chaerul);
var_dump($chaerul["id"]);
var_dump($chaerul["address"]["country"]);

//kode map
$anwar = [
    "id" => "anwar",
    "name" => "anwar chaerul",
    "age" => 30
];

var_dump($anwar);
var_dump($anwar["id"]);