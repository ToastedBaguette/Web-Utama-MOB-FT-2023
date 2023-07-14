<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapPelanggaran extends Model
{
    protected $table = 'user_pelanggarans';
    public $timestamps=false;
    protected $primaryKey = 'idrekap';
    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class);
    }
}
