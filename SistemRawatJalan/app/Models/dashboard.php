<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    /**
     * get the welcome message for the dashboard
     * 
     * @return string
     */

    public static function welcomeMessage()
    {
        return " Selamat datang di Sistem Rawat Jalan Rumah Sakit";
    }
}
