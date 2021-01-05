<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 2 TRENGGALEK</title>
    <link rel="icon" href=" {{ asset("user/assets/images/image1.png") }} ">
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
            <div class="col-md-12 text-center">
                <h5>SURAT DISPENSASI</h5>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: @php
                            echo $siswa["nama_siswa"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Hari Tanggal</td>
                        <td>: @php
                            echo date("m-d-Y", strtotime($siswa["tanggal"]))
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: @php
                            echo $siswa["kelas"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Jam</td>
                        <td>: @php
                            echo $siswa["jam1"]
                        @endphp Sampai @php
                            echo $siswa["jam2"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: @php
                            echo $siswa["jurusan"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Keperluan Izin</td>
                        <td>: @php
                            echo $siswa["keperluan"]
                        @endphp</td>
                    </tr>
                </table>
                <img src="{{ public_path('assets/siswa/'.$siswa["image"]) }}" style="position: absolute; margin-left: 300px; margin-top:-170px;" width="200" height="200">
                <p class="mt-5" style="font-size:15px">Demikian surat dispensasi ini dibuat untuk digunakan sesuai dengan keperluan</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h6 class="mt-3">SISWA</h6>
                <hr style="margin-top:100px; margin-right:500px" width="100px">
            </div>
            <div class="col-md-6">
                <h6 class="text-right">Hormat Kami,</h6>
                <h6 class="text-right">Petugas Piket</h6>
                <hr style="margin-top:90px; margin-right:1px" width="100px">
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
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
            <div class="col-md-12 text-center">
                <h5>SURAT DISPENSASI</h5>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: @php
                            echo $siswa["nama_siswa"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Hari Tanggal</td>
                        <td>: @php
                            echo date("m-d-Y", strtotime($siswa["tanggal"]))
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: @php
                            echo $siswa["kelas"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Jam</td>
                        <td>: @php
                            echo $siswa["jam1"]
                        @endphp Sampai @php
                            echo $siswa["jam2"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: @php
                            echo $siswa["jurusan"]
                        @endphp</td>
                    </tr>
                    <tr>
                        <td>Keperluan Izin</td>
                        <td>: @php
                            echo $siswa["keperluan"]
                        @endphp</td>
                    </tr>
                </table>
                <img src="{{ public_path('assets/siswa/'.$siswa["image"]) }}" style="position: absolute; margin-left: 300px; margin-top:-170px;" width="200" height="200">
                <p class="mt-5" style="font-size:15px">Demikian surat dispensasi ini dibuat untuk digunakan sesuai dengan keperluan</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h6 class="mt-3">SISWA</h6>
                <hr style="margin-top:100px; margin-right:500px" width="100px">
            </div>
            <div class="col-md-6">
                <h6 class="text-right">Hormat Kami,</h6>
                <h6 class="text-right">Petugas Piket</h6>
                <hr style="margin-top:90px; margin-right:1px" width="100px">
            </div>
        </div>
    </div>
</body>
</html>