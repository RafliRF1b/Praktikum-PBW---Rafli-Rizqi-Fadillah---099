<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Pembayaran UKT</title>
</head>
<body>
    <h2>Form Input Pembayaran Mahasiswa</h2>
    <form method="post" action="proses-pembayaran.php">
        NPM: <input type="text" name="npm" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Prodi: <input type="text" name="prodi" required><br><br>
        Semester: <input type="number" name="semester" required><br><br>
        Biaya UKT (Rp): <input type="number" name="biaya_ukt" required><br><br>
        <input type="submit" value="Hitung Pembayaran">
    </form>
</body>
</html>