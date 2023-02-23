<?php

// Buat Array
$animals = ["Kucing", "Monyet", "Harimau", "Buaya"];
echo $animals[3] . "<br>";
echo $animals[1] . "<br>";

foreach($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array asosiatif
$mahasiswa = ["nama "=>"Fauzan", "jurusan "=>"SI", "semester "=>2]; 
echo $mahasiswa["jurusan "] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "key nya adalah " . $key . "value: " . $value . "<br>";

}

// Buat array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"],
];
// 00 01 10 11 20 21
echo $dosen[0][0];

?>