<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Tamu</title>
    <link rel="icon" href=" {{ asset("assets/image1.png") }} ">
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
                <h5>Laporan Tamu</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $tamu["nama"] }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $tamu["alamat"] }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>: {{ $tamu["telepon"] }}</td>
                    </tr>
                    <tr>
                        <td>Intansi</td>
                        <td>: {{ $tamu["instansi"] }}</td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td>: {{ $tamu["keperluan"] }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: {{ $tamu["jenis_kelamin"] }}</td>
                    </tr>
                    <tr>
                        <td>Bertemu</td>
                        <td>: {{ $tamu["bertemu"] }}</td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><img src="{{ public_path("assets/tamu/".$tamu["image"]) }}"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>