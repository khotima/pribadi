<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PindahM;
use App\PendudukM;
class PindahC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pindah = PindahM::select('pindah.*','penduduk.nik','penduduk.nama')
        ->join('penduduk','penduduk.id','=','pindah.id_diri')
        ->get();
        return view('pin.PindahV' ,compact ('pindah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $pindah =PindahM::all();
        $penduduk=PendudukM::all();
        return view('pin.tambah', compact('pindah','penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pi= new PindahM();
        $pi->id_diri= $request->id_diri;
        $pi->tgl_pindah=$request->tgl_pindah;
        $pi->almt_tujuan=$request->almt_tujuan;
        $pi->alasan=$request->alasan;
        $pi->save();
        return redirect()->route('pin.index');

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
        $pindah=PindahM::select('pindah.*','penduduk.nik','penduduk.nama')
        ->join('penduduk','penduduk.id','=','pindah.id_diri')
        ->where('pindah.id',$id)->get();
        return view('pin.edit', compact ('pindah'));
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
        $pi=PindahM::where('id',$id)->first();
        $pi->tgl_pindah= $request->tgl_pindah;
        $pi->almt_tujuan=$request->almt_tujuan;
        $pi->alasan=$request->alasan;
        $pi->save();
        return redirect()->route('pin.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pindah=PindahM::where('id',$id)->first();
        $pindah->delete();
        return redirect()->route('pin.index');
    }
}
