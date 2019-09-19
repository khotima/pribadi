<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PindahM extends Model
{
    protected $table="pindah";
    protected $fillable=[
        'tgl_pindah','almt_tujuan','alasan'
    ];
    public function penduduk()
    {
        return $this->belongsTo('app\PendudukM');
    }
}
