<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendatangM;
use App\PendudukM;
class PendatangC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendatang = PendatangM::all();
        return view('pnd.PendatangV',compact('pendatang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $pendatang =PendatangM::all();
        $penduduk=PendudukM::all();
        return view('pnd.tambah', compact('pendatang','penduduk'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pn = new PendatangM();
        $pn->nik= $request->nik;
        $pn->nama= $request->nama;
        $pn->tempat_lahir= $request->tempat_lahir;
        $pn->tgl_lahir= $request->tgl_lahir; 
        $pn->agama= $request->agama; 
        $pn->jk= $request->jk;    
        $pn->umur= $request->umur;
        $pn->gol_darah= $request->gol_darah;
        $pn->rtrw= $request->rtrw;
        $pn->pekerjaan= $request->pekerjaan;
        $pn->set_kawin= $request->set_kawin;
        $pn->kwn= $request->kwn;
        $pn->pend_ahir= $request->pend_ahir;
        $pn->ket_membaca= $request->ket_membaca;

        $pn->tgl_datang= $request->tgl_datang;
        $pn->asal= $request->asal;
        $pn->ket_pindah= $request->ket_pindah;
        $pn->save();
        $pn=new PendudukM();
        $pn->nik= $request->nik;
        $pn->nama= $request->nama;
        $pn->tempat_lahir= $request->tempat_lahir;
        $pn->tgl_lahir= $request->tgl_lahir; 
        $pn->agama= $request->agama; 
        $pn->jk= $request->jk;    
        $pn->umur= $request->umur;
        $pn->gol_darah= $request->gol_darah;
        $pn->rtrw= $request->rtrw;
        $pn->pekerjaan= $request->pekerjaan;
        $pn->set_kawin= $request->set_kawin;
        $pn->kwn= $request->kwn;
        $pn->pend_ahir= $request->pend_ahir;
        $pn->ket_membaca= $request->ket_membaca;
        $pn->save();
        return redirect()->route('pnd.index');

        // $pn=new PendudukM();
        // $pn->nik= $request->nik;
        // $pn->nama= $request->nama;
        // $pn->tempat_lahir= $request->tempat_lahir;
        // $pn->tgl_lahir= $request->tgl_lahir; 
        // $pn->agama= $request->agama; 
        // $pn->jk= $request->jk;    
        // $pn->umur= $request->umur;
        // $pn->gol_darah= $request->gol_darah;
        // $pn->rtrw= $request->rtrw;
        // $pn->pekerjaan= $request->pekerjaan;
        // $pn->set_kawin= $request->set_kawin;
        // $pn->kwn= $request->kwn;
        // $pn->pend_ahir= $request->pend_ahir;
        // $pn->ket_membaca= $request->ket_membaca;

        // $pn->save();
        // return redirect()->route('pnd.index');


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
        $pendatang=PendatangM::where('id',$id)->get();
        $penduduk=PendudukM::all(); 
        // select('pendatang.*','penduduk.id','penduduk.nik','penduduk.nama')
        // ->join('penduduk','penduduk.id','=','pendatang.id_diri')
        // ->where('pendatang.id',$id)->get();
        return view ('pnd.edit', compact('pendatang','penduduk'));
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
        $pn =PendatangM::where('id',$id)->first();
        
        $pn->id_diri= $request->id_diri;        
        $pn->tgl_datang=$request->tgl_datang;
        $pn->asal= $request->asal;
        $pn->ket_pindah= $request->ket_pindah;

        $pn->save();
        return redirect()->route('pnd.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendatang = PendatangM::where('id', $id)->first();
        $pendatang->delete();
        return redirect()->route('pnd.index');
    }
}
// DB::transaction(function () {
//     DB::table('pendatang')->insert('nik','nama','tempat_lahir','tgl_lahir','agama','jk','umur','gol_darah','rtrw','pekerjaan','set_kawin','kwn','pend_ahir','ket_membaca');
//     DB::table('penduduk')->insert('nik','nama','tempat_lahir','tgl_lahir','agama','jk','umur','gol_darah','rtrw','pekerjaan','set_kawin','kwn','pend_ahir','ket_membaca');
// });