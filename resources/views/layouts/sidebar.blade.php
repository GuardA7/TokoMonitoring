<style>
    .sidebar {
        background-color: #f8f9fa;
        min-height: 100vh;
        padding: 1.5rem 1rem;
        width: 240px;
        transition: all 0.3s ease;
    }

    .sidebar h5 {
        font-weight: bold;
        color: #343a40;
    }

    .sidebar .nav-link {
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        color: #495057;
        transition: all 0.2s ease-in-out;
        display: flex;
        align-items: center;
    }

    .sidebar .nav-link:hover {
        background-color: #e9ecef;
        color: #0d6efd;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link[aria-expanded="true"] {
        background-color: #0d6efd;
        color: #fff !important;
    }

    .sidebar .nav-link.active i,
    .sidebar .nav-link[aria-expanded="true"] i {
        color: #fff;
    }

    .sidebar .dropdown-icon {
        font-size: 0.8rem;
    }

    .sidebar .collapse .nav-link {
        padding-left: 1.5rem;
        font-size: 0.875rem;
    }
</style>

<div id="sidebar" class="sidebar d-flex flex-column border-end">
    <h5 class="mb-4">Menu Utama</h5>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </li>
        <li>
            <a href="{{ url('/produk') }}" class="nav-link {{ request()->is('produk') ? 'active' : '' }}">
                <i class="bi bi-box me-2"></i> Produk
            </a>
        </li>
        <li>
            <a href="{{ url('/kirim-paket') }}" class="nav-link {{ request()->is('kirim-paket') ? 'active' : '' }}">
                <i class="bi bi-send me-2"></i> Kirim Paket
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-people me-2"></i> Pengguna
            </a>
        </li>

        {{-- Dropdown Laporan --}}
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#laporanMenu" role="button" aria-expanded="false" aria-controls="laporanMenu">
                <span><i class="bi bi-file-earmark-text me-2"></i> Laporan</span>
                <i class="bi bi-caret-down-fill dropdown-icon"></i>
            </a>
            <div class="collapse ps-2" id="laporanMenu">
                <ul class="nav flex-column mt-1">
                    <li><a class="nav-link py-1" href="#">Laporan Barang</a></li>
                    <li><a class="nav-link py-1" href="#">Laporan Keuangan</a></li>
                    <li><a class="nav-link py-1" href="#">Laporan Penjualan</a></li>
                    <li><a class="nav-link py-1" href="#">Laporan User</a></li>
                    <li><a class="nav-link py-1" href="#">Laporan Packing</a></li>
                </ul>
            </div>
        </li>

        <li class="mt-3">
            <a href="#" class="nav-link">
                <i class="bi bi-gear me-2"></i> Pengaturan
            </a>
        </li>
    </ul>
</div>
