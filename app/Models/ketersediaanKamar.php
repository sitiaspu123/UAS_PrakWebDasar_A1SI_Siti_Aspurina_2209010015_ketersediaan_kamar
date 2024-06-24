<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketersediaanKamar extends Model
{
    public function pasien()
{
    return $this->belongsTo(Pasien::class);
}
public function kamar()
{
    return $this->belongsTo(Kamar::class);
}
}
