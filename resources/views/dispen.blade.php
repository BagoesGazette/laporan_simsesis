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
                    <h3 class="text-center">Form Dispensasi Siswa</h3>
                    <form action="" id="formDismen" method="post" target="_blank" autocomplete="off">@csrf
                        <input type="hidden" name="image" id="image">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="md-form">
                                    <input type="text" class="form-control" name="nama_siswa">
                                    <label>Nama Siswa</label>
                                    @error('nama_siswa')
                                      <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="md-form md-outline input-with-post-icon datepicker">
                                    <input placeholder="Select date" type="date" name="tanggal" class="form-control">
                                    <label>Pilih Tanggal dan Bulan</label>
                                    @error('tanggal')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="kelas">
                                    <label>Kelas</label>
                                    @error('kelas')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="md-form">
                                    <input type="text" class="form-control" name="jurusan">
                                    <label>Jurusan</label>
                                    @error('jurusan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="md-form">
                                            <input placeholder="Selected time" name="jam1" value="<?php date_default_timezone_set('Asia/Jakarta');
                                            $waktu = date("H:i");
                                            echo $waktu;?>" type="text" id="input_starttime" class="form-control timepicker">
                                            <label for="input_starttime">Jam</label>
                                        </div>
                                    </div>
                                    <div class="col-md mt-4 mb-4">
                                        sampai
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="md-form">
                                            <input placeholder="Selected time" name="jam2" value="<?php date_default_timezone_set('Asia/Jakarta');
                                            $waktu = date("H:i");
                                            echo $waktu;?>" type="text" id="input_starttime" class="form-control timepicker">
                                            <label for="input_starttime">Jam</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="md-form">
                                    <input type="text" class="form-control" name="keperluan">
                                    <label>Keperluan Izin</label>
                                    @error('keperluan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Ambil Foto</label>
                                    <div id="camera"></div>
                                </div>
                                <button class="btn aqua-gradient btn-block" id="ambilFoto" onclick="take_snapshot()">Ambil Foto <i class="fas fa-camera"></i></button>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="tombolCetak">
                                                       
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
            document.getElementById('formDismen').action = "{{ route('cetakDispen') }}";
            document.getElementById('tombolCetak').innerHTML = '<button type="submit" class="btn aqua-gradient btn-block">Cetak Kartu Siswa <i class="far fa-file-pdf"></i></button>';
            $("#image").val(data_uri);
        });
    }
</script>