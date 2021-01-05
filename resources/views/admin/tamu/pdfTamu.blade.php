<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 2 TRENGGALEK</title>
    <link rel="icon" href=" {{ public_path("assets/image1.png") }} ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ public_path("assets/image2.png") }}" alt="image" width="100" style="position: absolute;">
            </div>
            <div class="col-md-8 text-center">
                <h6>PEMERINTAH PROVINSI JAWA TIMUR</h6>
                <h6>DINAS PENDIDIKAN</h6>
                <h6>SEKOLAH MENENGAH KEJURUAN NEGERI 2</h6>
                <h5>TRENGGALEK</h5>
                <p style="font-size: 10px">Jln. Ronggowarsito Gg Sidomukti Nomor 01 Telp.(0355) 7690148</p>
                <p style="font-size: 10px; margin-top:-15px">e-mail : <span class="text-primary">smknduatrenggalek@yahoo.co.id</span> || http:\\<span class="text-primary text-underlined"> www.smk2trenggalek.sch.id</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-right" style="margin-top: -20px;">Kode Pos:66315</p>
                <hr size="5" style="margin-top: -10px;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-center">Data Tamu</h5>
                <p class="text-center">Tanggal awal {{ date("d-m-Y", strtotime($tanggal["tglawal"])) }} sampai Tanggal akhir {{ date("d-m-Y",strtotime($tanggal["tglakhir"])) }}</p>
            </div>
        </div>
    </div>
    <div class="container">
       <div class="row">
            <div class="col-12">
                @php
                    $no=1
                @endphp
                @foreach ($cetakTamu as $t)
                <br>
                <table>
                    <tr>
                        <td>No</td>
                        <td>: {{ $no++ }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $t->nama }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $t->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>: {{ $t->telepon }}</td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>: {{ $t->instansi }}</td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td>: {{ $t->keperluan }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: {{ $t->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Bertemu</td>
                        <td>: {{ $t->bertemu }}</td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                            <img src="{{ public_path("assets/tamu/".$t->image) }}" alt="">
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
       </div>
   </div>

</body>
</html>