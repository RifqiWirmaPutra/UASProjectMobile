<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kunjungans extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $table = 'kunjungans';
    protected $primaryKey = 'id_kunjungan';

    public function pasiens(): BelongsTo
    {
        return $this->belongsTo(pasiens::class, 'id_pasien');
    }

    public function dokters(): BelongsTo
    {
        return $this->belongsTo(dokters::class, 'id_dokter');
    }
}
