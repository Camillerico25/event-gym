<nav class="navbar navbar-expand-lg text-info bg-primary mb-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gym Member Application</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if (auth()->check())
          <a class="nav-link" href="/dashboard">Dashboard</a>
          <a class="nav-link" href="{{'/logout'}}">Logout</a>
          @else
          <a class="nav-link" href="/register">Register</a>
          <a class="nav-link" href="/">Login</a>

          @endif

        </div>
      </div>
    </div>
  </nav>
