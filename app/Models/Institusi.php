<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Institusi extends Model
{ 
    protected $table = "institusi";
    protected $fillable = ["nama_institusi","alamat", "kunjungan_id"];

    public function Kunjungan(): HasOne
    {
        return $this->hasOne(kunjungan::class); 
    }

}
 