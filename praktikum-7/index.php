<?php
include 'header.php';

$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 'kendaraan';

$allowed = ['kendaraan', 'perulangan', 'daftarhewan', 'angka'];

if (in_array($halaman, $allowed)) {
    include $halaman . '.php';
} else {
    echo "Halaman tidak ditemukan.";
}
?>