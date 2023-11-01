<?php

$data = [1,2,3,4,5,6,7];

//mengubah semua data array dengan callback
$dataresult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataresult);

//mengambil semua values milik array
var_dump(array_values($data));




//mengambil key milik array
var_dump(array_keys($data));


//mengurutkan array
$rsortdata($data);
var_dump($data);

//mengubah posisi data di array secar random

