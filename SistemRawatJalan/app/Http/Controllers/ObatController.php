<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obats;
use App\Models\pasiens;
use Illuminate\Support\Facades\Validator;

class ObatController extends Controller
{
    //Menampilkan Daftar Obat
    public function index()
    {
        return view('backend.obats.index', ['obats' => obats::paginate(10)]);
    }

    //menampilkan form membuat obat baru
    public function create()
    {
        $pasiens = pasiens::all();
        return view('backend.obats.create', ['pasiens' => $pasiens]);
    }

    //menyimpan obat baru kedalam database
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pasien' => 'required|exists:pasens,id_pasien',
            'nama_obat' => 'required|string|max:25',
            'deskripsi' => 'required|string|max:30',
            'harga' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('/obats/create')
                ->withErrors($validator)
                ->withInput();
        }

        obats::create($request->all());
        return redirect('/obats')->with('flash_message','Obat Added!');
    }

    //Menampilkan detail obat

    public function show($id)
    {
        $obat = obats::find($id);
        return view('backend.obats.show', ['obat' => $obat]);
    }

    //menampilkan form edit obat
    public function edit($id)
    {
        $obat = obats::find($id);
        $pasiens = pasiens::all();
        return view('backend.obats.edit', ['obat' => $obat, 'pasiens' => $pasiens]);
    }

    //menyimpan perubahan obat
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_pasien' =>'required|exists:pasens,id_pasien',
            'nama_obat' =>'required|string|max:25',
           'resep_obat' =>'required|string|max:30',
            'deskripsi' =>'required|string|max:30',
            'harga' =>'required|numeric',
        ]);
        

        // if ($validator->fails()) {
        //     return redirect('/obats/'. $id. '/edit')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        //Periksa apakah data berhasil divalidasi 

        $obat = obats::findOrFails($id);
        $obat->update($validatedData);

        //Pengguna akan dialikan ke halaman index
        return redirect()->route('obats.index')->with('flash_message', 'Obat Updated!');
    }

    //Menghapus obat
    public function destroy($id)
    {
        obats::destroy($id);
        return redirect('/obats')->with('flash_message', 'Obat Deleted!');
    }
}
