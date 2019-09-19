<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = "kematians";
    protected $fillable=[
        'tgl','tempat','sebab','makam','pelapor',
        
    ];

 public function penduduk()
 {
     return $this->belongTo('app\PendudukM');
 }




}