@include('admin.layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Slide</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route("slide") }}">Slide</a></div>
            <div class="breadcrumb-item active" aria-current="page">Update Slide</div>
        </div>
      </div>


      <div class="section-body">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                  <h4>Form Update Slide</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("updateSlide") }}" method="post" enctype="multipart/form-data">@csrf
                        <input type="hidden" name="id" value="{{ $slide->id }}">
                        <input type="hidden" name="gambarLama" value="{{ $slide->image }}">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" onchange="previewFile(this)" class="form-control">
                            <img id="previewImg" src="{{ asset('assets/slide/'. $slide->image) }}" width="100" alt="Upload Gambar" class="mt-2">
                            @error('image')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <p class="text-danger">Upload gambar dengan resolusi 1950 x 1097</p>
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <select name="jenis" class="form-control">
                                <option>Pilih Jenis</option>
                                @php
                                if($slide->jenis === "dashboard") :
                                @endphp
                                <option value="dashboard" selected>Dashboard</option>
                                @php
                                    else :
                                @endphp
                                <option value="dashboard">Dashboard</option>
                                @php
                                    endif;
                                @endphp
                                
                                @php
                                    if($slide->jenis === "sarana") :
                                @endphp
                                <option value="sarana" selected>Sarana dan Prasarana</option>
                                @php
                                    else:
                                @endphp
                                <option value="sarana">Sarana dan Prasarana</option>
                                @php
                                    endif;
                                @endphp
                            </select>
                            @error('jenis')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                      
                        <button type="submit" class="btn btn-block btn-primary">Update Slide</button>
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