<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelahiranM extends Model
{
    protected $table= "kelahiran";
    protected $fillable=[
        'akta','nama','tempat_lahir','tgl_lahir','jk','anak_ke',

    ];

public function penduduk()
{
    return $this->belongsTo('app\PendudukM');
}

}