<?php
function createArray(...$jurusan) {
    //Spread Operator (...)Digunakan untuk menangkap sejumlah argumen yang tidak terbatas dan menyimpannya sebagai array di dalam variabel $jurusan
    // createArray yang menerima sejumlah parameter yang tidak terbatas.
    // parameter tersebut di simpah di $jurusan menggunakan sintaksis spread operator 
    $arr = [];
    //$arr digunakan untuk menyimpan nama-nama jurusan yang sudah dikonversi menjadi huruf kapital dan bebas duplikasi.
    foreach ($jurusan as $value) {
        // Setiap elemen yang diiterasi disimpan dalam variabel $value
        if (in_array(strtoupper($value), $arr) == false) {
            //Mengecek apakah versi kapital dari nilai $value sudah ada di dalam array $arr
            //jika belum ada, maka jurusan tersebut akan ditambahkan ke array $arr.
            // Mengubah nilai $value menjadi huruf kapital menggunakan fungsi strtoupper().
            array_push($arr, strtoupper($value));
            //array push itu fungsi yang digunakan untuk menambah elemen baru di akhir array.
        }
    }

    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
//print_r() digunakan untuk mencetak isi array hasilnya
?>