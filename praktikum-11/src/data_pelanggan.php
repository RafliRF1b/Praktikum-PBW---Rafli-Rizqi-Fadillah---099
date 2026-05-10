<?php
include 'koneksi_db.php';
$data = $conn->query("SELECT * FROM pelanggan");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Pelanggan</title>
</head>
<body class="bg-gray-50 min-h-screen">
    <?php include 'nav.php'; ?>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Data Pelanggan</h2>

        <div class="flex gap-3 mb-6">
            <a href="tambah_pelanggan.php" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">+ Tambah Pelanggan</a>
            <a href="index.php" class="bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-colors">← Kembali ke Menu</a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-600">ID</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Nama</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Alamat</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Email</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Telepon</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php while($row = $data->fetch_assoc()) { ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3 text-gray-500"><?= $row['ID']; ?></td>
                        <td class="px-4 py-3 font-medium text-gray-800"><?= $row['Nama']; ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= $row['Alamat']; ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= $row['Email']; ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= $row['Telepon']; ?></td>
                        <td class="px-4 py-3">
                            <a href="hapus_pelanggan.php?id=<?= $row['ID'] ?>"
                                onclick="return confirm('Yakin ingin menghapus?')"
                                class="bg-red-500 hover:bg-red-600 text-white text-xs font-medium px-3 py-1 rounded-md transition-colors">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
