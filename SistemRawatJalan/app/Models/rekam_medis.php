<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rekam_medis extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table ='rekam_medis';
    protected $primaryKey = 'id_tindakan';

    public function pasiens(): BelongsTo
    {
        return $this->belongsTo(pasiens::class, 'id_pasien');
    }

    public function dokters(): BelongsTo
    {
        return $this->belongsTo(dokters::class, 'id_dokter');
    }
}
