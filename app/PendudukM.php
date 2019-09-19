<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PendudukM extends Model
{
    protected $table = "penduduk";
    protected $fillable = [
         'nik', 'nama','tempat_lahir','tgl_lahir','agama','jk','umur','gol_darah','rtrw','pekerjaan','set_kawin','kwn','pend_terahir','ket_membaca'
         ];
         use SoftDeletes;
    protected $dates =['deleted_at'];
         public function kelahiran()
         {
             return $this->hasMany('app\KelahiranM');
         }
         public function kematians()
         {
             return $this->hasMany('app\Kematian');
         }
         public function pendatang()
         {
             return $this->hasMany('app\PendatangM');
         }
         public function pindah()
         {
             return $this->hasMany('app\PindahM');
         }
         public function kk()
         {
             return $this->hasMany(KkM::class);
         }
         public function anaks()
         {
             return $this->belongsTo('app\Anak');
         }
         public static function getJumlahPendudukPerTahun(){
             $tahun_awal=date('y')-5;
             $tahun_ahir=date('y');
             
             $category=[];

             $series[0]['name'] = 'Laki-laki';
             $series[1]['name'] = 'Perempuan';
             
             $j=0;
             for($i=$tahun_awal;$i<=$tahun_ahir;$i++){
                 $category[]=$i;

                 $series[0]['data'][] = Self::where('jk', '=', 'Laki-laki')->where('tgl_lahir','like', $i.'%')->count();
    		     $series[1]['data'][] = Self::where('jk', '=', 'Perempuan')->where('tgl_lahir','like', $i.'%')->count();
    		
             }
             return['category'=>$category,'series'=>$series];
         }
         
}
