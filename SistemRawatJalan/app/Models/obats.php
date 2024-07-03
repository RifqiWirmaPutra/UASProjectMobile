<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class obats extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'obats';
    protected $primaryKey = 'id_obat';

    public function pasiens(): BelongsTo
    {
        return $this->belongsTo(pasiens::class, 'id_pasien');
    }
}
