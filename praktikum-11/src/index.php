<?php include 'proses_index.php'; ?>
<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Buku</title>
</head>
<body class="bg-gray-50 min-h-screen">
    <?php include 'nav.php'; ?>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Buku</h2>

        <div class="flex gap-3 mb-6">
            <a href="data_pelanggan.php" class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">Data Pelanggan</a>
            <a href="tambah_pelanggan.php" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">+ Tambah Pelanggan</a>
        </div>

        <!-- Form Pencarian -->
        <form method="get" class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                <div class="md:col-span-2">
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Cari Berdasarkan Judul</label>
                    <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        id="judul" name="judul" placeholder="Masukkan judul buku"
                        value="<?= htmlspecialchars($search_judul ?? '') ?>">
                </div>
                <div>
                    <label for="tahun_terbit" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                    <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        id="tahun_terbit" name="tahun_terbit" placeholder="Tahun terbit"
                        value="<?= htmlspecialchars($search_tahun ?? '') ?>">
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors">Cari</button>
                    <a href="index.php" class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-medium px-4 py-2 rounded-lg transition-colors">Reset</a>
                </div>
            </div>
        </form>

        <!-- Tabel -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-600">ID</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Judul</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Penulis</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Tahun Terbit</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Harga</th>
                        <th class="px-4 py-3 font-semibold text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3 text-gray-500"><?= $row['ID'] ?></td>
                        <td class="px-4 py-3 font-medium text-gray-800"><?= htmlspecialchars($row['Judul']) ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= htmlspecialchars($row['Penulis']) ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= $row['Tahun_Terbit'] ?></td>
                        <td class="px-4 py-3 text-gray-600">Rp<?= number_format($row['Harga'], 2) ?></td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="form_edit.php?id=<?= $row['ID'] ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-md transition-colors">Edit</a>
                                <a href="proses_hapus.php?id=<?= $row['ID'] ?>" class="bg-red-500 hover:bg-red-600 text-white text-xs font-medium px-3 py-1 rounded-md transition-colors"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
