<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendatangM extends Model
{
    protected $table = "pendatang";
    protected $fillable =[
      'tgl_datang','asal','ket_pindah','nik', 'nama','tempat_lahir','tgl_lahir','agama','jk','umur','gol_darah','rtrw','pekerjaan','set_kawin','kwn','pend_terahir','ket_membaca'
    ];


    public function penduduk()
    {
        return $this->belongsTo('app\PendudukM');
    }
}
