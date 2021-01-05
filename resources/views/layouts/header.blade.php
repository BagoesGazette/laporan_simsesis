<div class="container">
    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-center">
            <img src="{{ url("assets/image1.png") }}" width="200" height="200">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center mt-5">
            <h3>SISTEM INFORMASI TERPADU</h3>
            <h3>SIMSESIS</h3>
            <h3>SMKN 2 TRENGGALEK</h3>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark elegant-color mt-5">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="offset-md-3">
        <ul class="navbar-nav">
          <li class="nav-item {{ set_active("dashboardUser") }}">
            <a class="nav-link" href="{{ url('/') }}"><h5>Home</h5></a>
          </li>
          <li class="nav-item {{ set_active("bukuTamu") }}">
            <a class="nav-link" href="{{ route('bukuTamu') }}"><h5>Buku Tamu</h5></a>
          </li>
          <li class="nav-item {{ set_active("dispen") }}">
            <a class="nav-link" href="{{ route("dispen") }}"><h5>Surat Dispensasi Siswa</h5></a>
          </li>
          <li class="nav-item {{ set_active("sarpras") }}">
              <a class="nav-link" href="{{ route("sarpras") }}"><h5>Sarana dan Prasarana</h5></a>
          </li>
        </ul>
      </div>
    </div>
    </div>
</nav>