<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kunjungan extends Model
{
   
    protected $table = "kunjungan";
    protected $fillable = ["tujuan", "keperluan", "kesan", "pengunjung_id"];

    public function pengunjung(): BelongsTo
    {
        return $this->belongsTo(pengunjung::class);
    }

    public function institusi(): HasOne
    {
        return $this->hasOne(institusi::class); 
    }

    
}

