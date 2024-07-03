<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kunjungans;
use App\Models\pasiens;
use App\Models\dokters;
use Illuminate\Support\Facades\Validator;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungans = kunjungans::paginate(10);
        return view('backend.kunjungans.index', compact('kunjungans'));
    }

    public function create()
    {
        $pasiens = pasiens::all();
        $dokters = dokters::all();
        return view('backend.kunjungans.create', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'id_pasien' => 'required|exists:pasiens,id_pasien',
            'id_dokter' => 'required|exists:dokters,id_dokter',
            'pemeriksaan' => 'required|string|max:30',
            'tanggal' => 'required|date',
        ]);

        kunjungans::create($validatedData);
        return redirect()->route('kunjungan.index')->with('pesan', 'Data Saved Successfully');
    }

    //Menampilkan data kunjungan berdasarkan ID

    public function show(kunjungans $kunjungans)
    {
        return view('backend.kunjungans.show', compact('kunjungans'));
    }
    public function edit(Kunjungans $kunjungans)
    {
        return view('backend.kunjungans.edit', compact('kunjungans'));
    }

    //Update data Kunjungan
    public function update(Request $request, kunjungans $kunjungans)
    {
        $validator = Validator::make($request->all(), [
            'id_pasien' => 'required|exists:pasiens,id_pasien',
            'id_dokter' => 'required|exists:dokters,id_dokter',
            'pemeriksaan' => 'required|string|max:30',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('kunjungan.edit', $kunjungans->id)
                ->withErrors($validator)
                ->withInput();
        }

        $kunjungans->update([
            //'id_antrian => $request->id_antrian,
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'pemeriksaan' => $request->pemeriksaan,
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('kunjungan.index')->with('pesan', 'Data Updated Successfully');

    }
    public function destroy(kunjungans $kunjungans)
    {
        $kunjungans->delete();
        return redirect()->route('kunjungan.index')->with('pesan', 'Data Deleted Successfully');
    }
}
