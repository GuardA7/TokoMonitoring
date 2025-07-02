<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Monitoring Toko')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .content-wrapper {
            flex: 1;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 1rem;
            height: 100%;
        }
        .main-content {
            flex: 1;
            padding: 1.5rem;
        }
    </style>
</head>
@stack('scripts')
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebar = document.querySelector('.sidebar');
        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('sidebar-hidden');
        });
    });
</script>

</body>


</html>
