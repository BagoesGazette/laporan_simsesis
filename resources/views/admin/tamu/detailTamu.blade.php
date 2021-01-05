@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Detail Data Tamu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route("tamu") }}">Tamu</a></div>
            <div class="breadcrumb-item active">Detail Tamu</div>
        </div>
      </div>


      <div class="section-body">
          <div class="row">
              <div class="col-6">
                  <div class="card">
                        <div class="card-body">
                            <h5 class="text-center">Form Detail Tamu</h5>
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{ $tamu["nama"] }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>: {{ $tamu["alamat"] }}</td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>: {{ $tamu["telepon"] }}</td>
                                </tr>
                                <tr>
                                    <td>Instansi</td>
                                    <td>: {{ $tamu["instansi"] }}</td>
                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td>: {{ $tamu["keperluan"] }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>: {{ $tamu["jenis_kelamin"] }}</td>
                                </tr>
                                <tr>
                                    <td>Bertemu</td>
                                    <td>: {{ $tamu["bertemu"] }}</td>
                                </tr>
                                <tr>
                                    <td>Foto Tamu </td>
                                    <td>: <a data-fancybox="gallery" href="{{ asset("assets/tamu/". $tamu["image"]) }}"><img src="{{ asset("user/assets/images/tamu/". $tamu["image"]) }}" class="img-fluid" width="100" height="100"></a></td>
                                </tr>
                            </table>
                            <div class="col-12 mt-3">
                                <a href="{{ route("tamu") }}" class="btn btn-primary btn-block"><i class="fas fa-backspace"></i> Kembali</a>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
</div>
@show
@include('admin.layouts.footer')
