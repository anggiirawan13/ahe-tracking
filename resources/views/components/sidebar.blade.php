<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark min-vh-100" style="width: 280px;">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="/dashboard" class="nav-link text-white d-flex align-items-center">
                <i class="bi bi-speedometer2"></i>
                <span class="ps-2">
                    Dashboard
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('shipment.index') }}" class="nav-link text-white d-flex align-items-center">
                <i class="bi bi-person"></i>
                <span class="ps-2">
                    Shipments
                </span>
            </a>
        </li>
    </ul>
</div>