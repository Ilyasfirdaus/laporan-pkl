<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengunjung extends Model
{   
    protected $table = "pengunjung";
    protected $fillable = ["nama", "email", "no_hp", "id_ktp", "pengunjung_id"];
    
    public function kunjungan(): HasMany
    {
        return $this->hasMany(Kunjungan::class);
    }

    
}