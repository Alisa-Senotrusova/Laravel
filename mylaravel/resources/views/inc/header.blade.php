<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href=""></use></svg>
        <span class="fs-4">My Laravel</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ route('form') }}" class="nav-link">Form</a></li>
        <li class="nav-item"><a href="{{ route('admin') }}" class="nav-link">Admin</a></li>
    </ul>
</header>
