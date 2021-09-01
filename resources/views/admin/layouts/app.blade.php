<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.head')
</head>
<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    @include('admin.layouts.sidenav')
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">  
      @include('admin.layouts.topnav')
    </nav>

    <!-- Header -->
    <div class="header bg-primary pb-6">
      @include('admin.layouts.header')
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6"> 
      <div class="row">
        <div class="col">
          <div class="card card-frame">
          @yield('content')
        </div>
      </div>
    </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        @include('admin.layouts.footer')
      </footer>
    </div>
  </div>

  <!-- Script -->
  @include('admin.layouts.script')
  
</body>
</html>
