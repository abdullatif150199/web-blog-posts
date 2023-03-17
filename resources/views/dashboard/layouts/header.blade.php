<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  {{-- <input class="form-control form-control-light w-100 rounded-0 border-dark border-1" type="text" placeholder="Search" aria-label="Search" > --}}
  <div class="container">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">My Blog</a>
    <div class="navbar-nav">
    </div>
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link text-white bg-dark border-0">Logout <i class="bi bi-box-arrow-right"></i></button>
      </form>
    </div>
  </div>
</header>
<button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon bg-dark text-light" style="border: 1px solid white"><i class="bi bi-list"></i></span>
</button>