<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\dokters;

class DokterController extends Controller
{
    public function index()
    {
        return view('backend.dokters.index', ['dokters' => dokters::paginate(10)]);
    }

    public function create()
    {
        return view('backend.dokters.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_dokter' => 'required|string|max:25',
            'spesialisasi' => 'required|string|max:25',
            'sub_spesialisasi' => 'nullable|string|max:25',
            'jadwal_praktek' => 'required|string|max:30',
            'nomor_telepon' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect('/dokters/create')
                ->withErrors($validator)
                ->withInput();;
        }


        dokters::create($request->all());
        return redirect('/dokters')->with('pesan', 'Dasa Saved Successfully');


    }
    public function edit($id)
    {
        $dokters = dokters::findOrFail($id);
        return view('backend.dokters.edit', ['dokters' => $dokters]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_dokter' =>'required|string|max:25',
           'spesialisasi' =>'required|string|max:25',
           'sub_spesialisasi' => 'nullable|string|max:25',
            'jadwal_praktek' =>'required|string|max:30',
            'nomor_telepon' =>'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect('/dokters/'. $id. '/edit')
                ->withErrors($validator)
                ->withInput();;
        }

        dokters::findOrFail($id)->update($request->all());
        return redirect('/dokters')->with('pesan', 'Data Updated Successfully');
    }

    public function destroy($id)
    {
        dokters::findOrFail($id)->delete();
        return redirect('/dokters')->with('pesan', 'Data Deleted Successfully');
    }
}
