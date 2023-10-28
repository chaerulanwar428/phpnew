<?php

$nilai = "A";

if ($nilai == "A"){
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if (Snilai == "B" || $nilai == "C"){
    echo "Anda lulus dengan baik" . PHP_EOL;
} else if ($nilai == "D"){
    echo "Anda tidak lulus" . PHP_EOL;
} else{
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

$nilai = "B";

switch ($nilai){
     case "A":
     echo "Anda lulus dengan sangat baik" . PHP_EOL;
     break;
     case "B":
     case "C":
     echo "Anda lulus" . PHP_EOL;
     break;
     case "D":
     echo "Anda tidak lulus" . PHP_EOL;
     break;
     default:
     echo "Mungkin anda salah jurusan" . PHP_EOL;
}