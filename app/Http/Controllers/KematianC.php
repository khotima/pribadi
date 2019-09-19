<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kematian;
use App\PendudukM;
class KematianC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kematians = Kematian::select('kematians.*','penduduk.nama')
        ->join('penduduk', 'penduduk.id','=', 'kematians.id_diri')
        ->get();
        return view ('kmt.KematianV', compact('kematians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
         $kematians = Kematian::all();
         $penduduk=PendudukM::all();
         return view ('kmt.tambah', compact('kematians','penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $km=new Kematian();
        $km->id_diri=$request->id_diri;  
        $km->tgl= $request->tgl;
        $km->tempat= $request->tempat;
        $km->penyebab= $request->penyebab;
        $km->makam= $request->makam;
        $km->pelapor= $request->pelapor;
        $km->save();
        return redirect()->route('kmt.index')->with('alert-success','Berhasil Menambahkan Data');
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
        $kematians = Kematian::select('kematians.*','penduduk.nama')
        ->join('penduduk','penduduk.id','=','kematians.id_diri')
        ->where('kematians.id',$id)->get();
        return view('kmt.edit', compact('kematians'));
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
        $km=Kematian::where('id',$id)->first();
        $km->tgl= $request->tgl;
        $km->tempat= $request->tempat;
        $km->penyebab= $request->penyebab;
        $km->makam= $request->makam;
        $km->pelapor= $request->pelapor;
        $km->save();
        return redirect()->route('kmt.index')->with('alert-success','Berhasil Menambahkan Data');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kematians=Kematian::where('id', $id)->first();
        $kematians->delete(); 
        $penduduk = PendudukM::where('id', $kematians->id_diri)->first();
        $penduduk->delete();      
        return redirect()->route('kmt.index');
        
    }
}
