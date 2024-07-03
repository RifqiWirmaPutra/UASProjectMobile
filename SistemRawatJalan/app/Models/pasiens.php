<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasiens extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $table = 'pasiens';

    protected $primarykey = 'id_pasien';
}
