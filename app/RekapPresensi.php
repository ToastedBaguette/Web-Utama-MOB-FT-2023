<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapPresensi extends Model
{
    protected $table = 'rekap_presensis';
    public $timestamps=false;

    public function users() {
        return $this->belongsTo('App\User','nrp');
    }
    public function presensis() {
        return $this->belongsTo('App\Presensi','idpresensi');
    }

}
