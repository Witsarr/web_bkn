@include('layouts.nav_includes')
<nav class="navbar navbar-expand-lg border-body sticky-top" style="background-color: #C4DFAA">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-3" href="#">
            <img class="img-fluid" src="{{ asset('assets/images/Logo_BKN.png') }}">
            <span style="color: #252758"> BINTANG KARYA </span>
            <span style="color: #A2B704"> NUSANTARA </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-semibold me-5 fs-4" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold me-5 fs-4" href="">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold me-5 fs-4" href="">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold me-5 fs-4" href="">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
