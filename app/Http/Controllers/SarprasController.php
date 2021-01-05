<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sarpras;
use Illuminate\Support\Facades\DB;

class SarprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarpras = Sarpras::all();
        return view('admin.sarpras.index',["sarpras" => $sarpras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.sarpras.tambahSarpras");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'jumlah'    => 'required',
            'baik'      => 'required',
            'perawatan' => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $sarpras = new Sarpras();
        $sarpras->nama      = $request->input('nama');
        $sarpras->jumlah    = $request->input('jumlah');
        $sarpras->baik      = $request->input('baik');
        $sarpras->perawatan = $request->input('perawatan');
        
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('assets/sarpras/'), $imageName);
        $sarpras->image = $imageName;
        $sarpras->save();
        
        return redirect('sarpras')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sarpras = Sarpras::find($id);
        return view('admin.sarpras.updateSarpras', compact('sarpras'));
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
    public function update(Request $request)
    {
        $image = $request->image;
        $sarpras = Sarpras::find($request->id);
        if($image){
            \File::delete(public_path('assets/sarpras/'.$request->gambarLama));
            $imageName = time().'.'.$request->image->extension();
            $image->move(public_path('assets/sarpras/'), $imageName);
            $sarpras->nama          = $request->nama;
            $sarpras->jumlah        = $request->jumlah;
            $sarpras->baik          = $request->baik;
            $sarpras->perawatan     = $request->perawatan;
            $sarpras->image         = $imageName;
            $sarpras->save();
        }else{
            $sarpras->nama          = $request->nama;
            $sarpras->jumlah        = $request->jumlah;
            $sarpras->baik          = $request->baik;
            $sarpras->perawatan     = $request->perawatan;
            $sarpras->image         = $request->gambarLama;
            $sarpras->save();
        }

        return redirect('sarpras')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($image)
    {
        \File::delete(public_path('assets/sarpras/'.$image));
        DB::table('tb_sarpras')->where('image',$image)->delete();
        return redirect('sarpras')->with('success','Data berhasil dihapus');
    }
}
