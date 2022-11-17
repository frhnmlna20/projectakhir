<nav class="navbar bg-light">
  <div class="container-fluid">
  <div class="d-flex">
  <div class="navbar-brand"><a href="/" style="text-decoration: none; color: black;"> HanChan </a></div>
  <div class="ms-auto p-2 text-muted">website Top-Up terbesar,tercepat,dan terpercaya untuk pembelian Games</div>
</div>
<!-- <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24"> -->
  
    <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">HanchanShop</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">about</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>