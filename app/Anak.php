<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table= "anaks";
    protected $fillable=[
      
    'id'

    ];
    public function penduduk(){
        return $this->belongsTo('App\PendudukM');
    }
    public function kk(){
        return $this->belongsTo('App\KkM');
    }
}
