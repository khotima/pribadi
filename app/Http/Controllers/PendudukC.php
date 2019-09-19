<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendudukM;
use PDF;
use App\Exports\PendudukExport;
use Maatwebsite\Excel\Facades\Excel;
class PendudukC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = PendudukM::all();
    
        return view('pend.PendudukV', compact('penduduk','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $penduduk = PendudukM::all();
        return view('pend.tambah', compact('penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return redirect()->route('pend.index')->with('alert-success','Berhasil Menambahkan Data');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $penduduk=PendudukM::where('id',$id)->get();
    //     return view('show',compact('penduduk'));
    // }

    public function detail($id)
    {
        $penduduk=PendudukM::where('id',$id)->get();
        return view('pend.detail',compact('penduduk'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk=PendudukM::where('id',$id)->get();
        return view('pend.edit',compact('penduduk'));
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
        $pn = PendudukM::where('id',$id)->first();
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
        if($pn->save()){
            return redirect()->route('pend.index')->with('alert','Berhasil Mengubah Data');

        }else{
            echo"Gagal Mengedit!!!";
        }}
      
       
            
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = PendudukM::where('id', $id)->first();
        $penduduk->delete();
        return redirect()->route('pend.index')->with('alert-success','Data berhasil dihapus');
  
    }
    public function cari(Request $request){
        $search = $request->get('search');
        
        $penduduk = PendudukM::where('nik', 'like', "%".$search."%")->
                orWhere('nama', 'like', "%".$search."%")->paginate(5);
 
      return view('pend/PendudukV', compact('penduduk', 'search'));
     }
     public function cetak_pdf()
    {
    	$penduduk = PendudukM::all();
 
        $pdf = PDF::loadview('pend.penduduk_pdf',['penduduk'=>$penduduk]);
        $pdf->setPaper('f4', 'landscape');
    	return $pdf->stream('laporan-penduduk-pdf');
    }
    public function cetak_excel()
    {
        return Excel::download(new PendudukExport,'penduduk.xlsx');
    }
    public function cetak_id($id)
    {
        $penduduk=PendudukM::select('penduduk.*')
        ->where('penduduk.id',$id)
        ->get();
        $pdf = PDF::loadview('pend.pdf_id',compact('penduduk','id'));
        $pdf->setPaper('f4','portrait');
        return $pdf->stream('laporan-detail-penduduk-pdf');
    }
    public function grafik(){
        $jml_warga= \App\PendudukM::getJumlahPendudukPerTahun();

        return view('pend.grafik',compact('jml_warga'));
    }

}
