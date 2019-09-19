<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anak;
use App\PendudukM;
use App\KkM;
class AnakC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anaks= Anak::select('anaks.*','penduduk.nik','penduduk.nama','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.jk', 'kk.no_kk','kk.status')
        ->join('penduduk','penduduk.id','=','anaks.id_diri')
        ->join('kk','kk.id','=','anaks.id_kk')
        ->get();
        return view('ank.AnakV', compact('anaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $anaks=Anak::all();
        $penduduk=PendudukM::all();
        $kk=KkM::all();
        return view('ank.tambah',compact('penduduk','kk'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $an=new Anak();
        $an->id_diri=$request->id_diri;
        $an->id_kk=$request->id_kk;
        $an->save();
        return redirect()->route('ank.index');
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
        $anaks= Anak::where('id', $id)->get();
        $penduduk=PendudukM::all();
        $kk=KkM::all();
        // ('anaks.*','penduduk.nik','penduduk.nama','penduduk.tempat_lahir','penduduk.tgl_lahir','penduduk.jk', 'kk.no_kk')
        // ->join('penduduk','penduduk.id','=','anaks.id_diri')
        // ->join('kk','kk.id','=','anaks.id_kk')
        // ->where('anaks.id',$id)->get();

        return view('ank.edit',compact('anaks','penduduk','kk'));

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
        $an=Anak::where('id',$id)->first();
        $an->id_diri=$request->id_diri;
        $an->id_kk=$request->id_kk;
        $an->save();
        return redirect()->route('ank.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anaks=Anak::where('id',$id)->first();
        $anaks->delete();
        return redirect()->route('ank.index');
    }
    public function detail($id)
    {
    $an=Anak::where('id',$id)->first();
    $penduduk=PendudukM::all();
    $kk=KkM::all();
    return view('ank.detail',compact('anaks','penduduk','kk'));
    
    }

}
