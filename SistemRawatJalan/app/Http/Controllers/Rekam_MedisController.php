<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rekam_medis;
use App\Models\pasiens;
use App\Models\dokters;
use Illuminate\Support\Facades\Validator;

class Rekam_MedisController extends Controller
{
    public function index()
    {
        $rekamMedis = rekam_medis::paginate(10);
        return view('backend.rekammediss.index', compact('rekamMedis'));
    }

    public function create()
    {
        $pasiens = pasiens::all();
        $dokters = dokters::all();
        return view('backend.rekammediss.create', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pasien' => 'required|exists:pasiens,id_pasien',
            'id_dokter' => 'required|exists:dokters,id_dokter',
            'nama_penyakit' => 'required|string|max:25',
            'keluhan' => 'required|string|max:35',
            'tanggal' => 'required|date',
            'tindakan' => 'required|string|max:35',
            'deskripsi' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect('/rekammedis/create')
                ->withErrors($validator)
                ->withInput();
        }

        rekam_medis::create($request->all());
        return redirect('/rekammedis')->with('Success','Data Saved Successfully');
    }

    public function edit($id)
    {
        $rekamMedis = rekam_medis::find($id);
        if (!$rekamMedis){
            return redirect('/rekammedis')->with('Error','Data Not Found');
        }
        return view('backend.rekammediss.edit', ['rekammedis' => $rekamMedis]);
    }

    public function update(Request $request, $id_tindakan)
    {
        $validatedData = $request->validate([
            'id_pasien' =>'required|exists:pasiens,id_pasien',
            'id_dokter' =>'required|exists:dokters,id_dokter',
            'nama_penyakit' =>'required|string|max:25',
            'keluhan' =>'required|string|max:35',
            'tanggal' =>'required|date',
            'tindakan' =>'required|string|max:35',
            'deskripsi' =>'required|string|max:50',
        ]);

        rekam_medis::where('id_tindakan', $id_tindakan)->update($validatedData);
        return redirect()->route('rekammedis.index')->with('success','Rekam Medis Berhasil Di Update');
    }

    public function destroy($id)
    {
        rekam_medis::destroy($id);
        return redirect()->route('rekammedis.index')->with('success','Rekam Medis Berhasil Di Hapus');
    }
}
