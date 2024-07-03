<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class antrians extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table = 'antrians';
    protected $primaryKey = 'id_antrian';

    public function pasiens()
    {
        return $this->belongsTo(pasiens::class, 'id_pasien');
    }

    public function pendaftarans(): BelongsTo
    {
        return $this->belongsTo(pendaftarans::class, 'nomor_antrian');
    }

}
