<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jDokters extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table = 'j_dokters';
    protected $primaryKey = 'id_dokter';

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(dokters::class, 'id_dokter');
    }
}
