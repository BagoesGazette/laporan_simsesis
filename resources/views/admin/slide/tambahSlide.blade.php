@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah Slide</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route("slide") }}">Slide</a></div>
            <div class="breadcrumb-item active" aria-current="page">Tambah Slide</div>
        </div>
      </div>


      <div class="section-body">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Slide</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("storeSlide") }}" method="post" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" onchange="previewFile(this)" class="form-control">
                            <img id="previewImg" src="{{ asset('assets/image-not-found.jpg') }}" width="100" alt="Hasil Upload Gambar" class="mt-2">
                            @error('image')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <p class="text-danger">Upload gambar dengan resolusi 1950 x 1097</p>
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <select name="jenis" class="form-control">
                                <option>Pilih Jenis</option>
                                <option value="dashboard">Dashboard</option>
                                <option value="sarana">Sarana dan Prasarana</option>
                            </select>
                            @error('jenis')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                      
                        <button type="submit" class="btn btn-block btn-primary">Tambah Slide</button>
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