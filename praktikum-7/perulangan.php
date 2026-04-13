<form method="POST">
    Masukkan Angka Bebas: <input type="number" name="angka">
    <button type="submit">Cek Ganjil/Genap</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "<h3>Hasil:</h3>";
    echo "Angka $angka adalah bilangan <strong>$hasil</strong>.";
}
?>