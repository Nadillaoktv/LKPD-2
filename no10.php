<?php

// diberikan array berisi jawaban jawaban yang benar, data yan di perlukan 

function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];
    $arrBenar = [];// array untuk menyimpan hasil penilaian jawaban

    // mengecek jawaban yang diberikan dengan jawaban yang benar
    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1; //jawban yang benar
        } else {
            $arrBenar[$key] = 0; //jawaban yang salah
        }
    }
    // foreach itu perulangan digunakan khusus ketika kita memakai array
    // key itu menjadi index awal jawaban

    // menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";
    // count ini untuk menghitung jumlah elemen array
}

checkJawaban("Putri", "A",  "D", "B", "C", "E", "B", "B", "A", "Z", "Z");
?>