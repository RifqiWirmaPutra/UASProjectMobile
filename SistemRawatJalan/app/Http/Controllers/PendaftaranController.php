<?php

namespace App\Http\Controllers;

use App\Models\pasiens;
use App\Models\dokters;
use App\Models\pendaftarans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
    //Menampilkan semua data pendaftaran
    public function index()
    {
        $pendaftarans = pendaftarans::paginate(10);
        return view('backend.pendaftarans.index', compact('pendaftarans'));
    }

    //Menampilkan form tambah data pendaftaran
    public function create()
    {
        $pasiens = pasiens::all();
        $dokters = dokters::all();
        return view('backend.pendaftarans.create', compact('pasiens', 'dokters'));
    }

    //Menyimpan data pendaftaran
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pasien' => 'required|exists:pasiens.id_pasien',
            'id_dokter' => 'required|exists:dokters.id_dokter',
            'nomor_antrian' => 'required|string|max:15',
            'tanggal' => 'required|date',
            'status' => 'required|string|max:15',
        ]);

        pendaftarans::create($validatedData);
        return redirect()->route('pendaftarans.index')->with('pesan', 'Data Berhasil Disimpan');
    }

    //Menampilkan detail data pendaftaran
    public function show(pendaftarans $pendaftarans)
    {
        return view('backend.pendaftarans.show', compact('pendaftarans'));
    }

    //Menampilkan form edit data pendaftaran
    public function edit(pendaftarans $pendaftarans)
    {
        return view('backend.pendaftarans.edit', compact('pendaftarans'));
    }

    //Mengubah data pendaftaran
    public function update(Request $request, pendaftarans $pendaftarans)
    {
        $validator = Validator::make($request->all(), [
            'id_pasien' => 'required|exists:pasiens.id_pasien',
            'id_dokter' => 'required|exists:dokters.id_dokter',
            'nomor_antrian' => 'required|string|max:15',
            'tanggal' => 'required|date',
            'status' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pendaftarans.edit', $pendaftarans->id)
                ->withErrors($validator)
                ->withInput();
        }

        $pendaftarans->update([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'nomor_antrian' => $request->nomor_antrian,
            'tanggal' => $request->tanggal,
           'status' => $request->status,
        ]);
        return redirect()->route('pendaftarans.index')->with('pesan', 'Data Berhasil Diubah');
    }

    //Menghapus data pendaftaran
    public function destroy(pendaftarans $pendaftarans)
    {
        $pendaftarans->delete();
        return redirect()->route('pendaftarans.index')->with('pesan', 'Data Berhasil Dihapus');
    }

}
