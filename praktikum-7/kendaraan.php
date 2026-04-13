<form method="POST">
    Masukkan Jumlah Roda: <input type="number" name="roda" required>
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['roda'])) {
    $jumlahRoda = $_POST['roda'];
    echo "<h3>Hasil:</h3>";
    switch ($jumlahRoda) {
        case 2: echo "Kendaraan: Motor/Sepeda"; break;
        case 3: echo "Kendaraan: Becak/Bajaj"; break;
        case 4: echo "Kendaraan: Mobil"; break;
        case 6: echo "Kendaraan: Truk/Bus"; break;
        default: echo "Jenis kendaraan dengan $jumlahRoda roda tidak terdaftar.";
    }
}
?>