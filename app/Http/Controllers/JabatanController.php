<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //panggil ke database
        $jabatan = Jabatan::all(); // SELECT * FROM jabatans;
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request,[
            'namajabatan'=>'required',
            'deskripsi'=>'required'
        ]);

        $jabatan = new Jabatan();
        $jabatan->namajabatan = $request->input('namajabatan');
        $jabatan->deskripsi = $request->input('deskripsi');
        if ($jabatan->save()) {
            return redirect()->route('jabatan.index')->with('success','Berhasil tambah data');
        } else{
            return redirect()->back()->with('errors');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jabatan = Jabatan::find($id);
        //redirect edit page
        return view('jabatan.edit', compact('jabatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $jabatan = Jabatan::findOrFail($id);
        $update = $jabatan->update($request->all());
        //logika
        if($update){
            return redirect()->route('jabatan.index')->withSuccessMessage('Data Berhasil Di ubah');
        } else{
            return redirect()->back()->withErrorMessage('Gagal Di Ubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        Jabatan::destroy($id);
        //notification
        $notification = array(
            'message'=>'Jabatan Dellete',
        'alert-type'=>'success' );
        return back()->with($notification);
    }
}
