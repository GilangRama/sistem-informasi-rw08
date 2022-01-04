<?php

namespace App\Http\Controllers;

use App\Models\TemplateSurat;
use Illuminate\Http\Request;

class TemplateSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTemplateSurat = TemplateSurat::paginate(24);
        return view('pages.template-surat', compact('dataTemplateSurat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template-surat.create-template');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TemplateSurat::create([
            'name_surat' => $request -> nama_surat,
            'file_surat' => $request -> file -> getClientOriginalName(),
        ]);

        $request -> file -> move('uploads_file/template_surat', $request -> file -> getClientOriginalName());
        return redirect('template-surat')->with('success', 'File berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.template-surat', compact('dataTemplateSurat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tem = TemplateSurat::findOrFail($id);
        return view('template-surat.edit-template', compact('tem'));
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
        TemplateSurat::find($id)->update([
            'nama_surat' => $request -> nama_surat,
            'file_surat' => $request -> file -> getClientOriginalName(),
        ]);

        $request -> file -> move('uploads_file/template_surat', $request -> file -> getClientOriginalName());
        return redirect('template-surat')->with('success', 'File berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TemplateSurat::find($id)->delete();
        return back();
    }
}
