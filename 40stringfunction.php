<?php

//mengggabungkan array menjadi string

var_dump(join(",", [10,11,12,13,14,15]));

//memecahkan string menjadi array

var_dump(explode(" ", "chaerul anwar yanto"));


//memperbesar

var_dump(strtoupper("chaerul anwar"));


//memperkecil

var_dump(strtolower("CHAERUL ANWAR"));

//menghilangkan spasi yang banyak depan dan belakang

var_dump(trim("    chaerul     anwar    "));


//memeotong dari indeks ke indeks

var_dump(substr("tri wahyudi", 0, 3));
