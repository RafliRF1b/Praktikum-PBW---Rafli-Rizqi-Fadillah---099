<?php
   
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $biaya_ukt = $_POST['biaya_ukt'];

    $diskon_persen = 0;

   
    if ($biaya_ukt >= 5000000) {
        $diskon_persen = 10; 
    }
 
    if ($semester > 8) {
    $diskon_persen = 15;
    }
    
    $nominal_diskon = ($diskon_persen / 100) * $biaya_ukt;
    $total_bayar = $biaya_ukt - $nominal_diskon;

   
    echo "<h2>Luaran yang diharuskan</h2>";
    echo "<hr>";
    echo "NPM : $npm<br>";
    echo "NAMA : " . strtoupper($nama) . "<br>";
    echo "PRODI : " . strtoupper($prodi) . "<br>";
    echo "SEMESTER : $semester<br>";
    echo "BIAYA UKT : Rp. " . number_format($biaya_ukt, 0,). "<br>";
    echo "DISKON : $diskon_persen%". "<br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0,). "<br>";
    
    echo "<br><a href='input-pembayaran.php'>Kembali</a>";
?>