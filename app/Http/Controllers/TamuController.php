<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Illuminate\Support\Facades\DB;
use PDF;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamu = Tamu::all();
        return view("admin.tamu.index",["tamu" => $tamu]);
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
    public function destroy($image){
        \File::delete(public_path('assets/tamu/'.$image));
        DB::table('tb_tamu')->where('image',$image)->delete();
        return redirect('tamu')->with('success','Data berhasil dihapus');
    }

    public function cetakTamu(){
        return view('admin.tamu.cetakTamu');
    }

    public function pdfTamu(Request $request){
        $cetakTamu = Tamu::whereBetween(DB::raw('DATE(created_at)'), [$request->tglawal, $request->tglakhir])->get();
        $data["tanggal"] = [
            "tglawal"   => $request->tglawal,
            "tglakhir"  => $request->tglakhir
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
        $pdf = PDF::loadview('admin.tamu.pdfTamu',["cetakTamu" => $cetakTamu],$data)->setPaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function pdfTamuAll(){
        $tamu = Tamu::all();
        $contxt = stream_context_create([
            'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed'=> TRUE
            ]
            ]);
            $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            $pdf->getDomPDF()->setHttpContext($contxt);
        $pdf = PDF::loadview('admin.tamu.pdfTamuAll',["tamu" => $tamu])->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}
