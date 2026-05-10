<?php
include 'koneksi_db.php';

$query = "
    SELECT Pesanan.ID AS Pesanan_ID, Pelanggan.Nama AS Nama_Pelanggan,
           Pesanan.Tanggal_Pesanan, Pesanan.Total_Harga
    FROM Pesanan
    JOIN Pelanggan ON Pesanan.Pelanggan_ID = Pelanggan.ID
";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Pesanan</title>
</head>
<body class="bg-gray-50 min-h-screen">
    <?php include 'nav.php' ?>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Pesanan</h2>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-600">ID Pesanan</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Nama Pelanggan</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Tanggal Pesanan</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Total Harga</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3 text-gray-500"><?= $row['Pesanan_ID'] ?></td>
                        <td class="px-4 py-3 font-medium text-gray-800"><?= htmlspecialchars($row['Nama_Pelanggan']) ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= $row['Tanggal_Pesanan'] ?></td>
                        <td class="px-4 py-3 text-gray-600">Rp<?= number_format($row['Total_Harga'], 2) ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
