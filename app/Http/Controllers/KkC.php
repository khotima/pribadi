<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KkM;
use App\PendudukM;

class KkC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kk=KkM::select('kk.*','penduduk.nama','penduduk.nik')
        ->join('penduduk','penduduk.id','=','kk.id_diri')
        ->get();
        return view('kk.KkV',compact('kk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $kk=KkM::all();
        $penduduk=PendudukM::all();
        return view('kk.tambah', compact ('kk','penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kak=new KkM();
        $kak->id_diri=$request->id_diri;
        $kak->no_kk=$request->no_kk;
        $kak->status=$request->status;
        $kak->ayah=$request->ayah;
        $kak->ibu=$request->ibu;
        $kak->save();
        return redirect()->route('kk.index');

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
      $kk=KkM::where('id',$id)->get();
      $penduduk=PendudukM::all();
      return view('kk.edit', compact('kk','penduduk'));
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
        $kk =KkM::where('id',$id)->first();
        $kk->id_diri=$request->id_diri;
        $kk->no_kk=$request->no_kk;
        $kk->status=$request->status;
        $kk->ayah=$request->ayah;
        $kk->ibu=$request->ibu;
        $kk->save();
        return redirect()->route('kk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kk=KkM::where('id',$id)->first();
        $kk->delete();
        return redirect()->route('kk.index');
    }
    public function detail($id)
    {
        $kk=KkM::where('id',$id)->get();
        // dd($kk);
        // $kk=KkM::select('kk.*','penduduk.nama','penduduk.nik')
        // ->join('penduduk','penduduk.id','=','kk.id_diri')
        // ->get();
        $penduduk=PendudukM::all();
        dd($penduduk);
        return view('kk.detail',compact('kk','penduduk'));

    }
}
