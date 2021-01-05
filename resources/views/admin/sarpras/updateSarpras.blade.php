@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Sarpras</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route("sarpras") }}">Sarpras</a></div>
            <div class="breadcrumb-item active" aria-current="page">Update Sarpras</div>
        </div>
      </div>


      <div class="section-body">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                  <h4>Form Update Sarpras</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("updateSarpras") }}" method="post" autocomplete="off" enctype="multipart/form-data">@csrf
                        <input type="hidden" name="gambarLama" value="{{ $sarpras->image }}">
                        <input type="hidden" name="id" value="{{ $sarpras->id }}">
                        <div class="form-group">
                          <label>Nama Sarana dan Prasana</label>
                          <input type="text" class="form-control" name="nama" value="{{ $sarpras->nama }}" placeholder="Masukkan Nama">
                          @error('nama')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label>Jumlah</label>
                          <input type="number" class="form-control" name="jumlah" value="{{ $sarpras->jumlah }}" placeholder="Masukkan Jumlah">
                          @error('jumlah')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label>Baik</label>
                          <input type="number" class="form-control" name="baik" value="{{ $sarpras->baik }}" placeholder="Masukkan Baik">
                          @error('baik')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label>Perawatan</label>
                          <input type="number" class="form-control" name="perawatan" value="{{ $sarpras->perawatan }}" placeholder="Masukkan Perawatan">
                          @error('perawatan')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" onchange="previewFile(this)" class="form-control">
                            <img id="previewImg" src="{{ asset('assets/sarpras/'.$sarpras->image) }}" width="100" alt="Hasil Upload Gambar" class="mt-2">
                            @error('image')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                      
                        <button type="submit" class="btn btn-block btn-primary">Update Sarpras</button>
                    </form>
                </div>
              </div>
        </div>
      </div>
    </section>
  </div>
@show
<script>
  function previewFile(input){
    var file = $("input[type=file]").get(0).files[0];
    if(file){
      var reader = new FileReader();
      reader.onload = function(){
        $("#previewImg").attr("src",reader.result);
      }
      reader.readAsDataURL(file);
    }
  }
</script>  
@include('admin.layouts.footer')