<?php

    
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $predikat = "";
    $status = "status";

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } 
    elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
    } 
    elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
    } 
    elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
    } 
    elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
    } 
    else {
        $predikat = "TIDAK VALID";
    }
    if ($nilai >= 75 && $nilai <= 100) {
        $status = "LULUS";
    }
    elseif ($nilai >= 0 && $nilai <= 74){
        $status = "TIDAK LULUS";
    }
    else{
        $status = "TIDAK VALID";
    }
    
    echo "<h2>Hasil Pengolahan Nilai</h2>";
    echo "Nama Mahasiswa: <b>$nama</b><br>";
    echo "Nilai Ujian: <b>$nilai</b><br>";
    echo "Predikat: <b>$predikat</b><br>";
    echo "Status: <b>$status</b><br>";
    
    echo "<br><a href='input-nilai.php'>Kembali ke Form</a>";


?>