<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container-fluid">

        {{-- Sidebar Toggle Button --}}
        <button class="btn btn-primary me-3" id="sidebarToggle">
            ☰
        </button>

        {{-- Brand --}}
        <a class="navbar-brand" href="#">Monitoring Toko</a>

        {{-- Spacer --}}
        <div class="flex-grow-1"></div>

        {{-- Dropdown: My Account --}}
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    My Account
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
