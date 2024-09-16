<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <form class="d-flex" role="search" method="GET" action="{{ route($routeSearch) }}">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" autofocus>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <a href="{{ route($routeCreate) }}" class="btn btn-outline-success d-flex align-items-center">
            <i class="bi bi-plus-circle-fill"></i>
            <span class="ps-1 text-right">Add</span>
        </a>
    </div>
</nav>