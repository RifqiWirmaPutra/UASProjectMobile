<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pembayarans extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran';

    public function pendaftarans(): BelongsTo
    {
        return $this->belongsTo(pendaftarans::class, 'id_pendaftaran');
    }
}
