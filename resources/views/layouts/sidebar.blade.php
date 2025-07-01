<div class="sidebar animated-sidebar d-flex flex-column p-3 text-dark bg-light border-end" style="width: 250px; height: 100vh;">
    <h5 class="mb-4">Menu</h5>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </li>
        <li>
            <a href="/produk" class="nav-link text-dark">
                <i class="bi bi-box me-2"></i> Produk
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-send me-2"></i> Kirim Paket
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-dark">
                <i class="bi bi-people me-2"></i> Pengguna
            </a>
        </li>

        {{-- Dropdown Laporan --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                <i class="bi bi-file-earmark-text me-2"></i> Laporan
            </a>
            <ul class="dropdown-menu border-0 bg-light shadow-sm">
                <li><a class="dropdown-item" href="#">Laporan Barang</a></li>
                <li><a class="dropdown-item" href="#">Laporan Keuangan</a></li>
                <li><a class="dropdown-item" href="#">Laporan Penjualan</a></li>
                <li><a class="dropdown-item" href="#">Laporan User</a></li>
                <li><a class="dropdown-item" href="#">Laporan Packing</a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="nav-link text-dark mt-2">
                <i class="bi bi-gear me-2"></i> Pengaturan
            </a>
        </li>
    </ul>
</div>
