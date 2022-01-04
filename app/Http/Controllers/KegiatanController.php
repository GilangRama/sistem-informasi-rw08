<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKegiatan = Kegiatan::paginate(24);
        // dd($dataKegiatan);
        return view('pages.kegiatan', compact('dataKegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suratMasuk = SuratMasuk::all();
        // dd($suratMasuk);
        return view('kegiatan.create-kegiatan', compact('suratMasuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Kegiatan::create([
            'nama_kegiatan' => $request-> nama_kegiatan,
            'tanggal_pelaksanaan' => $request-> tanggal_kegiatan,
            'penanggung_jawab' => $request -> penanggung_jawab,
            'izin' => $request -> izin,
            'detail' => $request -> detail,
            'daerah_RT' => $request -> daerah_RT,
            'surat_masuks_id' => $request -> surat_masuks_id ,
            
        ]);
        return redirect('kegiatan')->with('success','File berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.kegiatan', compact('dataKegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $keg = Kegiatan::findOrFail($id);
        $suratMasuk = SuratMasuk::all();
        return view('kegiatan.edit-kegiatan', compact('keg','suratMasuk'));
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
        Kegiatan::find($id)->update([
            'nama_kegiatan' => $request-> nama_kegiatan,
            'tanggal_pelaksanaan' => $request-> tanggal_kegiatan,
            'penanggung_jawab' => $request -> penanggung_jawab,
            'izin' => $request -> izin,
            'detail' => $request -> detail,
            'daerah_RT' => $request -> daerah_RT,
            'surat_masuks_id' => $request -> surat_masuks_id ,            
        ]);

        return redirect('kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kegiatan::find($id)->delete();

        return back();
    }
}
