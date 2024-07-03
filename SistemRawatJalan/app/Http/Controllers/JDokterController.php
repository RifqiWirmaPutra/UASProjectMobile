<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokters;
use App\Models\jDokters;
use Illuminate\Support\Facades\Validator;

class JDokterController extends Controller
{
    public function index()
    {
        $jDokters = jDokters::paginate(10);
        return view('backend.jDokters.index', compact('jDokters'));
    }

    public function create()
    {
        $dokters = dokters::all();
        return view('backend.jDokters.create', compact('dokters'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_dokter' => 'required|exists:dokters,id_dokter',
            'hari' => 'required|string|max:25',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect('/jDokters/create')
                ->withErrors($validator)
                ->withInput();
        }

        jDokters::create($request->all());
        return redirect('/jDokters/')->with('pesan', 'Data Saved Successfully');
    }

    public function edit($id)
    {
        $jDokters = jDokters::find($id);
        if (!$jDokters) {
            return redirect('/jDokters/')->with('pesan', 'Data Not Found');
        }
        return view('backend.jDokters.edit', ['jdokters' => $jDokters]);
    }

    public function update(Request $request, $id)
    {
        $jDokters = jDokters::find($id);
        if (!$jDokters) {
            return redirect('/jDokters/')->with('pesan', 'Data Not Found');
        }
        $validator = Validator::make($request->all(), [
            'id_dokter' => 'exists:dokters,id_dokter',
            'hari' => 'string|max:25',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return redirect('/jDokters/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $jDokters->update($request->all());

        return redirect('/jDokters/')->with('pesan', 'Data Updated Successfully');
    }

    public function destroy($id)
    {
        jDokters::findOrFail($id)->delete();
        return redirect('/jDokters/')->with('pesan', 'Data Deleted Successfully');
    }
}
