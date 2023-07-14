<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    protected $table = 'pelanggarans';
    public $timestamps=false;
    protected $primaryKey = 'idpelanggaran';
    
    public function RekapPelanggaran()
    {
        return $this->hasMany(RekapPelanggaran::class);
    }
}
