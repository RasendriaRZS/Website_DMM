<nav id="main-navbar" class="navbar navbar-expand-lg floating-navbar fixed-top py-2">
  <div class="container-fluid px-4 px-lg-5">
    <a class="navbar-brand me-lg-4 me-2 d-flex align-items-center gap-2 fw-bold" href="/" style="font-size:1.5rem;">
      <img src="{{ asset('images/mining/logo.jpeg') }}" alt="DMM Logo" style="height:36px;">
      <span class="brand-text-gradient">DMM</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav mx-auto gap-lg-3 gap-2 fw-semibold align-items-lg-center">
        <li class="nav-item"><a class="nav-link nav-anim @if(request()->is('/')) active @endif" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link nav-anim" href="/about">About Us</a></li>
        <li class="nav-item dropdown">
          <li class="nav-item">
  <a class="nav-link nav-anim" href="/business">Our Business</a>
</li>

          <ul class="dropdown-menu custom-dropdown shadow rounded-4 animate__animated" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/business">Thermal Coal</a></li>
            <li><a class="dropdown-item" href="/business">Coking Coal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/resources">Key Resources</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link nav-anim" href="/management">Management</a></li>
        <li class="nav-item"><a class="nav-link nav-anim" href="/businessplan">Business Plan</a></li>
        <li class="nav-item"><a class="nav-link nav-anim" href="/clients">Clients</a></li>
        <li class="nav-item"><a class="nav-link nav-anim" href="/gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link nav-anim" href="/contact">Contact</a></li>
      </ul>
      <!-- Tombol contact DIHILANGKAN -->
    </div>
  </div>
</nav>
