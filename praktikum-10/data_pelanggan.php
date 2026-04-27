<?php
include 'koneksi_db.php';
$data = $conn->query("SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pelanggan</title>
</head>

<body>

    <h2>Data Pelanggan</h2>

    <a href="tambah_pelanggan.php">+ Tambah Pelanggan</a>
    <br><br>
    <a href="index.php" class="btn btn-secondary mb-3">← Kembali ke Menu</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php while($row = $data->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['ID']; ?></td>
            <td><?= $row['Nama']; ?></td>
            <td><?= $row['Alamat']; ?></td>
            <td><?= $row['Email']; ?></td>
            <td><?= $row['Telepon']; ?></td>
            <td>
                <a href="hapus_pelanggan.php?id=<?= $row['ID'] ?>" onclick="return confirm('Yakin ingin menghapus?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>

</body>

</html>