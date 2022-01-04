<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSurat = SuratMasuk::paginate(24);
        return view('pages.surat', compact('dataSurat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('surat.create-surat');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->all(); 
        // $file = $request-> file_surat;
        // dd($request);
        SuratMasuk::create([
            'nama_surat' => $request -> nama_surat,
            'pengirim_surat' => $request -> pengirim_surat ,
            'file_surat' => $request -> file -> getClientOriginalName(),
        ]);

        $request -> file -> move('uploads_file/surat_masuk', $request -> file -> getClientOriginalName());
        return redirect('surat')->with('success','File berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.surat', compact('dataSurat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sur = SuratMasuk::findOrFail($id);
        return view('surat.edit-surat', compact('sur'));
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
        SuratMasuk::find($id)->update([
            'nama_surat' => $request -> nama_surat,
            'pengirim_surat' => $request -> pengirim_surat ,
            'file_surat' => $request -> file -> getClientOriginalName(),
        ]);

        $request -> file -> move('uploads_file/surat_masuk', $request -> file -> getClientOriginalName());
        return redirect('surat')->with('success','File berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratMasuk::find($id)->delete();
        return back();
    }
}
