<!-- Menu Navigasi -->
<nav class="bg-gray-900 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <a class="text-xl font-bold tracking-tight text-white hover:text-yellow-400 transition-colors" href="index.php">Toko Buku Online</a>
            <button class="md:hidden text-gray-300 hover:text-white focus:outline-none" onclick="document.getElementById('navMenu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <ul class="hidden md:flex items-center gap-1">
                <li><a class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors" href="index.php">Daftar Buku</a></li>
                <li><a class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors" href="tambah_buku.php">Tambah Buku</a></li>
                <li><a class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors" href="transaksi.php">Buat Pesanan</a></li>
                <li><a class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors" href="lihat_transaksi.php">Lihat Pesanan</a></li>
                <li><a class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors" href="hapus.php">Hapus Buku</a></li>
                <li><a class="px-3 py-2 rounded-md text-sm font-medium bg-red-600 hover:bg-red-700 text-white transition-colors" href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="navMenu" class="hidden md:hidden pb-3">
            <ul class="flex flex-col gap-1">
                <li><a class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" href="index.php">Daftar Buku</a></li>
                <li><a class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" href="tambah_buku.php">Tambah Buku</a></li>
                <li><a class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" href="transaksi.php">Buat Pesanan</a></li>
                <li><a class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" href="lihat_transaksi.php">Lihat Pesanan</a></li>
                <li><a class="block px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" href="hapus.php">Hapus Buku</a></li>
                <li><a class="block px-3 py-2 rounded-md text-sm font-medium bg-red-600 text-white" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
