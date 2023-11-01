<?php

//rekursivefunction adalah
//functionyang memanggil dirinya sendiri

//megggunkan rekursivefunction
function  factorialrecursive(int $value): int
{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialrecursive($value - 1);
    }
}


//menggunkan forlooping
function factorialloop (int $value): int
{
    $total = 1;

    for ($i =1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialloop(6));