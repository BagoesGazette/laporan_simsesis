@include('layouts.master')
@section('content')
<style>
    #camera{
        width: 325px;
        height: 300px;
        border: 1px solid black;
    }
</style>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <h3 class="text-center">Form Buku Tamu</h3>
                    </div>
                    <form action="" autocomplete="off" id="formTamu" method="POST" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="image" id="image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="md-form">
                                    <input type="text" class="form-control" name="nama">
                                    <label>Nama</label>
                                    @error('nama')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="md-form">
                                    <textarea id="form7" class="md-textarea form-control" name="alamat" rows="3"></textarea>
                                    <label for="form7">Alamat</label>
                                    @error('alamat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" maxlength="13" onkeypress="isInputNumber(event)" name="telepon">
                                    <label>No.Telepon</label>
                                    @error('telepon')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="instansi">
                                    <label>Asal / Instansi</label>
                                    @error('instansi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="md-form">
                                    <textarea id="form7" class="md-textarea form-control" name="keperluan" rows="3"></textarea>
                                    <label for="form7">Keperluan</label>
                                    @error('keperluan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="browser-default custom-select">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="bertemu">
                                    <label>Bertemu</label>
                                    @error('bertemu')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ambil Foto</label>
                                    <div id="camera"></div>
                                </div>
                                <button class="btn aqua-gradient btn-block" id="ambilFoto" onclick="take_snapshot()">Ambil Foto <i class="fas fa-camera"></i></button>
                            </div>
                            <div class="col-md-12" id="tombolCetak">
                                                       
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@show
@include('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw==" crossorigin="anonymous"></script>
<script>
    Webcam.set({
        width:325,
        height:300,
        image_format:'jpeg',
        jpeg_quality:90
    });
    Webcam.attach("#camera");
    function take_snapshot(){
        Webcam.snap(function(data_uri){
            document.getElementById('camera').innerHTML = '<img src="'+data_uri+'"/>';
            var ambilFoto = document.getElementById("ambilFoto");
            ambilFoto.parentNode.removeChild(ambilFoto);
            document.getElementById('formTamu').action = "{{ url('kirimTamu') }}";
            document.getElementById('tombolCetak').innerHTML = '<button type="submit" class="btn aqua-gradient btn-block">Cetak Kartu Tamu <i class="far fa-file-pdf"></i></button>';
            $("#image").val(data_uri);
        });
    }
    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);

        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>