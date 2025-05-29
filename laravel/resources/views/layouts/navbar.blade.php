<nav class="navbar navbar-expand-lg navbar-light bg-dark position-fixed w-100 z-3">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav d-flex align-items-center">
      <li class="nav-item active mx-3">
        <a class="nav-link text-light" href="{{ route('about') }}">About me</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link text-light" href="{{ route('projects') }}">Pet projects</a>
      </li>
    </ul>
  </div>
</nav>
