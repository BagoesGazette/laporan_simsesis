@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Detail Data Dismen</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="/admin">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/admin/dismen">Dismen</a></div>
            <div class="breadcrumb-item active">Detail Dismen</div>
        </div>
      </div>


      <div class="section-body">
          <div class="row">
              <div class="col-6">
                  <div class="card">
                        <div class="card-body">
                            <h5 class="text-center">Form Detail Dismen</h5>
                            <table>
                                <tr>
                                    <td>Nama Siswa</td>
                                    <td>: {{ $dismen["nama_siswa"] }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>: {{ date("d-m-Y",strtotime($dismen["tanggal"])) }}</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>: {{ $dismen["kelas"] }}</td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>: {{ $dismen["jam1"] }} Sampai {{ $dismen["jam2"] }}</td>
                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td>: {{ $dismen["keperluan"] }}</td>
                                </tr>
                            </table>
                            <div class="col-12 mt-3">
                                <a href="/admin/dismen" class="btn btn-primary btn-block"><i class="fas fa-backspace"></i> Kembali</a>
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