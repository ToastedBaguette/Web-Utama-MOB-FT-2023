<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RectorCup extends Model
{
    protected $table = 'rc_cabang';
    public $timestamps=false;
    protected $primaryKey = 'idrc';

    public function RekapRC()
    {
        return $this->hasMany(RekapRectorcup::class);
    }

}
