<?php
include 'koneksi_db.php';
include 'nav.php';
$buku_result = $conn->query("SELECT ID, Judul FROM Buku");
$pelanggan_result = $conn->query("SELECT ID, Nama FROM Pelanggan");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buat Pesanan</title>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-lg mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Buat Pesanan Baru</h2>

            <?php if (isset($_GET['message'])): ?>
            <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-lg mb-5">
                <?= htmlspecialchars($_GET['message']) ?>
            </div>
            <?php endif; ?>

            <form method="post" action="proses_transaksi.php" class="space-y-5">
                <div>
                    <label for="pelanggan_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Pelanggan</label>
                    <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        name="pelanggan_id" id="pelanggan_id" required>
                        <option value="">Pilih Pelanggan</option>
                        <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
                        <option value="<?= $row['ID'] ?>"><?= $row['Nama'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="border-t border-gray-100 pt-4">
                    <h3 class="text-lg font-semibold text-gray-700 mb-3">Daftar Buku</h3>

                    <div>
                        <label for="buku_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Buku</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                            name="buku[1][id]" id="buku_id" required>
                            <option value="">Pilih Buku</option>
                            <?php while ($row = $buku_result->fetch_assoc()): ?>
                            <option value="<?= $row['ID'] ?>"><?= $row['Judul'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="kuantitas" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Buku</label>
                        <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                            id="kuantitas" name="buku[1][kuantitas]" min="1" required>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors">
                    Buat Pesanan
                </button>
            </form>
        </div>
    </div>
</body>
</html>
