<header id="ms-header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light ms-navbar">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc-logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">CHARACTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('comics') }}">COMICS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MOVIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TV</a>
        </li>
      </ul>
    </div>

    <input type="text" name="searchbar" id="search-bar" placeholder="Search 🔍">
  </nav> 
</header>