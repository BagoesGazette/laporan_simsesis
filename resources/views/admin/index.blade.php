@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Dashboard</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="fab fa-slideshare"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Slide</h4>
                </div>
                <div class="card-body">
                  {{ $slide }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="fas fa-user-secret"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Tamu</h4>
                </div>
                <div class="card-body">
                  {{ $tamu }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Dispen</h4>
                </div>
                <div class="card-body">
                  {{ $dismen }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success">
                <i class="fas fa-feather-alt"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Sarpras</h4>
                </div>
                <div class="card-body">
                  {{ $sarpras }}
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
@show
@include('admin.layouts.footer')