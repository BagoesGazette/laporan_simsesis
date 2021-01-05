<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispen;
use App\Models\Tamu;
use PDF;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = DB::table('tb_slide')->where("jenis","dashboard")->get();
        return view("index",["slide" => $slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function bukuTamu(){
        return view("bukuTamu");
    }

    public function dispen(){
        return view("dispen");
    }

    public function cetakDispen(Request $request){
        $dispen = new Dispen();
        $request->validate([
            'nama_siswa' => 'required',
            'tanggal' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'keperluan' => 'required',
        ]);
        $folderPath = "assets/siswa/";
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);

        $data["siswa"] = [
            "nama_siswa"    => $request->nama_siswa,
            "tanggal"       => $request->tanggal,
            "kelas"         => $request->kelas,
            "jurusan"       => $request->jurusan,
            "jam1"          => $request->jam1,
            "jam2"          => $request->jam2,
            "keperluan"     => $request->keperluan,
            "image"         => $fileName
        ];
        $dispen->nama_siswa        = $request->nama_siswa;
        $dispen->tanggal           = $request->tanggal;
        $dispen->kelas             = $request->kelas;
        $dispen->jurusan           = $request->jurusan;
        $dispen->jam1              = $request->jam1;
        $dispen->jam2              = $request->jam2;
        $dispen->keperluan         = $request->keperluan; 
        $dispen->image             = $fileName;
        $dispen->save();
        $contxt = stream_context_create([
            'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed'=> TRUE
            ]
            ]);
            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf = PDF::loadview('cetakDispen',$data)->setPaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function sarpras()
    {
        $slide = DB::table('tb_slide')->where('jenis', 'sarana')->get();
        $sarpras = DB::table('tb_sarpras')->get();
        return view("sarana", ["slide" => $slide, "sarpras" => $sarpras]);
    }

    public function kirimTamu(Request $request){
        $tamu = new Tamu();
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'instansi' => 'required',
            'keperluan' => 'required',
            'jenis_kelamin' => 'required',
            'bertemu' => 'required'
        ]);
        $folderPath = "assets/tamu/";
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);
        $tamu->nama             = $request->nama;
        $tamu->alamat           = $request->alamat;
        $tamu->telepon          = $request->telepon;
        $tamu->instansi         = $request->instansi;
        $tamu->keperluan        = $request->keperluan;
        $tamu->jenis_kelamin    = $request->jenis_kelamin;
        $tamu->bertemu          = $request->bertemu;
        $tamu->image            = $fileName;
        $tamu->save();
        $data["tamu"] = [
            "nama"          => $request->nama,
            "alamat"        => $request->alamat,
            "telepon"       => $request->telepon,
            "instansi"      => $request->instansi,
            "keperluan"     => $request->keperluan,
            "jenis_kelamin" => $request->jenis_kelamin,
            "bertemu"       => $request->bertemu,
            "image"         => $fileName
        ];
        $contxt = stream_context_create([
            'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed'=> TRUE
            ]
            ]);
            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf = PDF::loadview('cetakTamu',$data)->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}
