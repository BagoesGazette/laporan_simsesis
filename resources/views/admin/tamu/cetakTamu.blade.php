@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Cetak Data Tamu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route("tamu") }}">Tamu</a></div>
            <div class="breadcrumb-item active" aria-current="page">Cetak Data Tamu</div>
        </div>
      </div>


      <div class="section-body">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div class="card">
              <div class="card-header">
                <h4>Form Cetak Tamu</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('pdfTamu') }}" method="post" target="_blank">@csrf
                <div class="form-group">
                  <label>Tanggal Awal</label>
                  <input type="date" class="form-control"  name="tglawal">
                </div>
                <div class="form-group">
                  <label>Tanggal Akhir</label>
                  <input type="date" class="form-control" name="tglakhir">
                </div>
                <div class="col-12">
                  <a href="{{ route("tamu") }}" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary float-right"><i class="far fa-file-pdf"></i> Cetak</button>
                </div>
                </form>
              </div>
          </div>
        </div>
      </div>
      </div>
    </section>
</div>
@show
@include('admin.layouts.footer')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#datatable').DataTable();
  });
</script>