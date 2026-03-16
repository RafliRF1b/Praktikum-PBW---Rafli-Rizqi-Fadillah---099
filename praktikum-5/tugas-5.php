<?php

$barang = [
    "nama" => "Keyboard",
    "harga" => 150000,
    "jumlah" => 2
];

$total_harga = $barang['harga'] * $barang['jumlah'];
$pajak = 0.10 * $total_harga;
$total_bayar = $total_harga + $pajak;

function format($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

echo "Perhitungan Total Pembelian (Dengan Array)";
echo "<br>------------------------------------------------------------<br>";
echo "Nama Barang: " . $barang['nama'] . "<br>";
echo "Harga Satuan: " . format($barang['harga']) . "<br>";
echo "Jumlah Beli: " . $barang['jumlah'] . "<br>";
echo "Total Harga (Sebelum Pajak): " . format($total_harga) . "<br>";
echo "Pajak (10%): " . format($pajak) . "<br>";
echo "<b>Total Bayar: " . format($total_bayar) . "</b>";
?>