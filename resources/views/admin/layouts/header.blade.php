<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
   
  </form>
  <ul class="navbar-nav navbar-right">
    <a href="/" target="_blank" class="nav-link"><i class="fas fa-laptop"></i></a>
    <li><a href="#"  class="nav-link nav-link-lg nav-link-user">
      <img alt="image" src="{{ url('assets/image1.png') }}" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
    </li>
  </ul>
</nav>