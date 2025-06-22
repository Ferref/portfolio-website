<nav class="navbar navbar-expand-lg navbar-dark bg-custom-dark fixed-top border-light-bottom">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item active mx-3">
          <a class="nav-link neonize custom-text-light" href="{{ route('about') }}">About me</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link neonize custom-text-light" href="{{ route('projects') }}">Pet projects</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

