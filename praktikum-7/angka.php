<form method="POST">
    Tampilkan genap dari 2 sampai: <input type="number" name="limit" value="10">
    <button type="submit">Tampilkan</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['limit'])) {
    $limit = $_POST['limit'];
    echo "<h3>Bilangan Genap:</h3>";
    for ($i = 2; $i <= $limit; $i += 2) {
        echo $i . " ";
    }
}
?>