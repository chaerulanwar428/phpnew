<?php

function  sayHello()
{
    echo "Hello function" . PHP_EOL;
}

sayHello();
sayHello();


//jika tidak pernah dibuat dalam global mak function tidak bisa dipanggil

// $buat = false;

// if ($buat){
//     function sayHeloo()
//     {
//         echo "Hello function" . PHP_EOL;
//     }
// }

// sayHello();
// sayHello();
