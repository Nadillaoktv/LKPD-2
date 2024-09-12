<?php
//pengulangan melakukan iterasi dari angka 1 hingga 29
for ($i = 1; $i < 30; $i++) { 
    if (90 % $i == 0) {
        //pengkondisian modulus 90, mengecek apakah setiap angka tersebut adalah pembagi dari 90
        echo "90 : $i = " . 90 / $i . "</br>";
    }
}
?>