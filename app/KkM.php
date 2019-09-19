<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KkM extends Model
{
    protected $table= "kk";
    protected $fillable=[
        'no_kk','status','ayah','ibu'

    ];
    public function penduduk()
    {
        return $this->belongsTo('app\PendudukM');
    }
    public function anaks()
    {
        return $this->belongsTo('app\AnakM');
    }

}
