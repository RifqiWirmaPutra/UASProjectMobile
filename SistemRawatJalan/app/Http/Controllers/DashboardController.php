<?php

namespace App\Http\Controllers;

use App\Models\pasiens;
use App\Models\dokters;
use App\Models\obats; //added
use App\Models\antrians; //added
use App\Models\jDokters;
use App\Models\kunjungans; //added
use App\Models\pembayarans;
use App\Models\rekam_medis;
use App\Models\pendaftarans;

class DashboardController extends Controller
{
    public function index()
    {
        $pasienCount = pasiens::count();
        $dokterCount = dokters::count();
        $obatCount = obats::count();
        $antrianCount = antrians::count();
        $jDokterCount = jDokters::count();
        $kunjunganCount = kunjungans::count();
        $pendaftaranCount = pendaftarans::count();
        $rekamMedisCount = rekam_medis::count();
        $pembayaranCount = pembayarans::count();



        return view('backend.dashboards.index', [
            'total_pasien' => $pasienCount,
            'total_dokter' => $dokterCount,
            'total_obat' => $obatCount,
            'total_antrian' => $antrianCount,
            'total_jDokter' => $jDokterCount,
            'total_kunjungan' => $kunjunganCount,
            'total_pendaftaran' => $pendaftaranCount,
            'total_rekam_medis' => $rekamMedisCount,
            'total_pembayaran' => $pembayaranCount,
        ]);
    }
}
