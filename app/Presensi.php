<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $table = 'presensis';
    public $timestamps=false;

    public function rekaps()
    {
       return $this->hasMany("App\RekapPresensi","presensi_idpresensi","ididpresensi");
    }
}
