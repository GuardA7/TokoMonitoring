<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Monitoring Toko')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Bootstrap CSS & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
            display: flex;
            transition: margin-left 0.3s ease;
        }

        .sidebar {
            width: 250px;
            transition: margin-left 0.3s ease;
            background-color: #f8f9fa;
            padding: 1rem;
            height: 100vh;
        }

        .sidebar-hidden {
            margin-left: -250px;
        }

        .main-content {
            flex: 1;
            padding: 1.5rem;
        }

        .dropdown-icon {
            transition: transform 0.2s ease;
        }

        [aria-expanded="true"] .dropdown-icon {
            transform: rotate(180deg);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                z-index: 1050;
                height: 100vh;
                margin-left: -250px;
            }

            .sidebar.show {
                margin-left: 0;
            }

            .content-wrapper {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Wrapper --}}
    <div class="content-wrapper">
        {{-- Sidebar --}}
        @include('layouts.sidebar')

        {{-- Konten Utama --}}
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Sidebar Toggle Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');

        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('sidebar-hidden');
            sidebar.classList.toggle('show');

            // Tunggu hingga animasi selesai, lalu resize chart
            setTimeout(() => {
                if (typeof salesChartInstance !== 'undefined') {
                    salesChartInstance.resize();
                }
            }, 310); // lebih dari 300ms (durasi animasi CSS)
        });
    });
</script>

</body>
</html>
