<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokters extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "dokters";
    protected $primaryKey = "id_dokter";
}
