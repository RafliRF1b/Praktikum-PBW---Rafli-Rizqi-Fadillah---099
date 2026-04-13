<form method="POST">
    Masukkan nama-nama hewan (pisahkan dengan koma): <br>
    <input type="text" name="hewan_input" placeholder="Kucing, Anjing, Kelinci" style="width: 300px;">
    <button type="submit">Buat List</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hewan_input'])) {

    $daftarHewan = explode(",", $_POST['hewan_input']);
    echo "<h3>Daftar Hewan Anda:</h3><ul>";
    foreach ($daftarHewan as $hewan) {
        echo "<li>" . htmlspecialchars(trim($hewan)) . "</li>";
    }
    echo "</ul>";
}
?>