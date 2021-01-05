<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = DB::table('tb_slide')->get();
        return view("admin.slide.index",['slide' => $slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.slide.tambahSlide");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slide = new Slide();
        $slide->jenis = $request->input('jenis');
        
        $request->validate([
            'jenis' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('assets/slide/'), $imageName);
        $slide->image = $imageName;
        $slide->save();
        
        return redirect('slide')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.updateSlide', compact('slide'));
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
        $slide = Slide::find($request->id);
        if($image){
            \File::delete(public_path('assets/slide/'.$request->gambarLama));
            $imageName = time().'.'.$request->image->extension();
            $image->move(public_path('assets/slide/'), $imageName);
            $slide->jenis = $request->jenis;
            $slide->image = $imageName;
            $slide->save();
        }else{
            $slide->image = $request->gambarLama;
            $slide->jenis = $request->jenis;
            $slide->save();
        }

        return redirect('slide')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($image)
    {
        \File::delete(public_path('assets/slide/'.$image));
        DB::table('tb_slide')->where('image',$image)->delete();
        return redirect('slide')->with('success','Data berhasil dihapus');
    }
}
