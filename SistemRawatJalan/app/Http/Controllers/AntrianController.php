<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrians;
use App\Models\pasiens;
use App\Models\pendaftarans;
use Illuminate\Support\Facades\Validator;

class AntrianController extends Controller
{
    //Menampilkan Data Antrian
    public function index()
    {
        $antrians = antrians::paginate(5);
        return view('backend.antrians.index', compact('antrians'));
    }

    //Menampilkan Form Tambah Data Antrian
    public function create()
    {
        $pendaftarans = pendaftarans::all();
        $pasiens = pasiens::all();
        return view('backend.antrians.create', compact('pendaftarans', 'pasiens'));
    }

    //Menyimpan Data Antrian
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pasien' => 'required|exists:pasiens,id_pasien',
            'nomor_antrian' => 'required|exists:pendaftarans,nomor_antrian',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect('/antrians/create')
                ->withErrors($validator)
                ->withInput();
        }

        antrians::create($request->all());
        return redirect('/antrians')->with('success', 'Data Saved Successfully');
    }

    //Menampilkan Form Edit Data Antrian
    public function edit($id)
    {
        $antrians = antrians::find($id);
        if (!$antrians){
            return redirect('/antrians')->with('Error', 'Data Not Found');
        }
        return view('backend.antrians.edit', ['antrians' => $antrians]);
    }

    //Mengubah Data Antrian
    public function update(Request $request, $id)
    {
        $antrians = antrians::find($id);
        if (!$antrians){
            return redirect('/antrians')->with('Error', 'Data Not Found');
        }

        $validator = Validator::make($request->all(), [
            'id_pasien' =>'required|exists:pasiens,id_pasien',
            'nomor_antrian' =>'required|exists:pendaftarans,nomor_antrian',
            'tanggal' =>'required|date',
        ]);

        if ($validator->fails()) {
            return redirect('/antrians/'. $id. '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $antrians->update([
            'id_pasien' => $request->id_pasien,
            'nomor_antrian' => $request->nomor_antrian,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/antrians')->with('success', 'Data Updated Successfully');
    }

    //Menghapus Data Antrian
    public function destroy($id)
    {
        antrians::findOrFail($id)->delete();
        return redirect('/antrians')->with('success', 'Data Deleted Successfully');
    }

}
