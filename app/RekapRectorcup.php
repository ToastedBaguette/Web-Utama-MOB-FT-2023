<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapRectorcup extends Model
{
    protected $table = 'ambil_rc';
    public $timestamps=false;

    public function rc()
    {
        return $this->belongsTo(RectorCup::class);
    }

}
