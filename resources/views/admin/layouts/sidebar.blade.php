<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Administrator</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">SIM</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ set_active("dashboard") }}"><a class="nav-link" href="{{ route("dashboard") }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        
        <li class="menu-header">Interface</li>
        <li class="{{ set_active("slide") }} {{ set_active("createSlide") }} {{ set_active("showSlide") }}"><a class="nav-link" href="{{ route("slide") }}"><i class="fab fa-slideshare"></i> <span>Slide</span></a></li>
        <li class="{{ set_active("sarpras") }} {{ set_active("createSarpras") }} {{ set_active("showSarpras") }}"><a class="nav-link" href="{{ route("sarpras") }}"><i class="fas fa-feather-alt"></i> <span>Sarpras</span></a></li>

        <li class="menu-header">Data</li>
        <li class="{{ set_active("tamu") }} {{ set_active("cetakTamu") }}"><a class="nav-link" href="{{ route("tamu") }}"><i class="fas fa-user-secret"></i> <span>Tamu</span></a></li>
        <li class="{{ set_active("dispen") }}"><a class="nav-link" href="{{ route("dispen") }}"><i class="far fa-file"></i> <span>Dispen</span></a></li>
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>
  </aside>
</div>