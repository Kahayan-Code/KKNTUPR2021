 <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">
              
              <i class="ni ni-book-bookmark text-orange"></i>
              <span class="nav-link-text">Artikel</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tags.index') }}">
              <i class="fa fa-solid fa-newspaper"></i>
              <span class="nav-link-text">Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('orgs.index') }}">
              <i class="ni ni-badge text-primary"></i>
              <span class="nav-link-text">Struktur Organisasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profiles.show', "1") }}">
              <i class="ni ni-single-02 text-yellow"></i>
              <span class="nav-link-text">Profil Desa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('potens.index') }}">
              <i class="ni ni-bullet-list-67 text-default"></i>
              <span class="nav-link-text">Potensi Desa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('demos.index') }}">
              <i class="ni ni-world-2 text-info"></i>
              <span class="nav-link-text">Demografi Desa</span>
            </a>
          </li>
        </ul>
        
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">
        <span class="docs-normal">Admin</span>
        </h6>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>