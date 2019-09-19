<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KelahiranM;
use App\PendudukM;
class KelahiranC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelahiran = KelahiranM::select('kelahiran.*','penduduk.nik')
        ->join('penduduk', 'penduduk.id','=', 'kelahiran.id_diri')
        ->get();
        return view('klh.KelahiranV', compact('kelahiran'));
    }

    /**
     * 
     * public function klh.index()
   
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $kelahiran = KelahiranM::all();
        $penduduk = PendudukM::all();
        return view('klh.tambah', compact('kelahiran','penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kl=new KelahiranM();
        $kl->id_diri=$request->id_diri;     
        $kl->akta= $request->akta;
        $kl->nama= $request->nama; 
        $kl->tempat_lahir= $request->tempat_lahir;
        $kl->tgl_lahir= $request->tgl_lahir;
        $kl->jk= $request->jk;
        $kl->anak_ke= $request->anak_ke;
      
        $kl->save();
        return redirect()->route('klh.index')->with('alert-success','Berhasil Menambahkan Data');

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
        $kelahiran = KelahiranM::select('kelahiran.*','penduduk.nik')
                    ->join('penduduk', 'penduduk.id','=', 'kelahiran.id_diri')
                    ->where('kelahiran.id', $id)->get();
        return view('klh.edit', compact('kelahiran'));
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
        $kl=KelahiranM::where('id',$id)->first(); 
        $kl->akta= $request->akta; 
        $kl->nama= $request->nama; 
        $kl->tempat_lahir= $request->tempat_lahir;
        $kl->tgl_lahir= $request->tgl_lahir;
        $kl->jk= $request->jk;
        $kl->anak_ke= $request->anak_ke;
      
        $kl->save();
        return redirect()->route('klh.index')->with('alert-success','Berhasil Menambahkan Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelahiran = KelahiranM::where('id', $id)->first();
        $kelahiran->delete();
        $penduduk = PendudukM::where('id', $kelahiran->id_diri)->first();
        $penduduk->delete();
        return redirect()->route('klh.index')->with('alert-success','Data berhasil dihapus');
  
    }
}
