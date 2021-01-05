@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Slide</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></div>
            <div class="breadcrumb-item active" aria-current="page">Slide</div>
        </div>
      </div>

      @if (session('success'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>x</span>
          </button>
          {{ session('success') }}
        </div>
      </div>
    @endif

      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('createSlide') }}" class="btn btn-warning">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="datatable" class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Jenis</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no=1
                  @endphp
                  @foreach ($slide as $s)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td><a data-fancybox="gallery" href="{{ asset("assets/slide/". $s->image) }}"><img src="{{ asset("assets/slide/". $s->image) }}" width="200" height="100"></a></td>
                    <td>{{ $s->jenis }}</td>
                    <td>
                      <a href="destroySlide/{{ $s->image }}"  class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                      <a href="showSlide/{{ $s->id }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@show
@include('admin.layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
  $('.tombol-hapus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Hapus Data',
      text: "Apakah anda ingin menghapus data ini",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })

  })

  $(document).ready(function() {
    $('#datatable').DataTable();
  });
</script>