<?php

namespace App\Http\Controllers;

use App\Models\pasiens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    public function index()
    {
        return view('backend.pasiens.index', ['pasiens' => pasiens::paginate(10)]);
    }

    public function create()
    {
        return view('backend.pasiens.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu_kandung' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'nomor_ktp' => 'required',
            'nomor_kk' => 'required',
            'nomor_bpjs' => 'required',
            'nomor_telepon' => 'required',
            'provinsi' => 'required',
            'kabupaten_kota' => 'required',
            'alamat' => 'required',
            'golongan_darah' => 'required',
            'email' => 'required|email', //tambahkan validasi email

        ]);
        
        if ($validator->fails()) {
            return redirect('/pasiens/create')->with('pesan', 'Data saved Failed')
            ->withErrors($validator)
            ->withInput();
        }
        pasiens::create($request->all());
        return redirect('/pasiens')->with('pesan', 'Data Saved Successfully');
    }

    public function edit($id)
    {
        $pasiens = pasiens::where('id_pasien',$id)->first();

        return view('backend.pasiens.edit', ['pasiens' => $pasiens]);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu_kandung' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'nomor_ktp' => 'required',
            'nomor_kk' => 'required',
            'nomor_bpjs' => 'required',
            'nomor_telepon' => 'required',
            'provinsi' => 'required',
            'kabupaten_kota' => 'required',
            'alamat' => 'required',
            'golongan_darah' => 'required',
            'email' => 'required|email', //tambahkan validasi email

        ]);

        if ($validator->fails()) {
            return redirect('/pasiens/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
    
        $pasiens = pasiens::where('id_pasien', $id)->first();
        $pasiens->update($request->all());
    
        return redirect('/pasiens')->with('pesan', 'Data Updated Successfully');
    }
    
    public function destroy($id)
    {
        $pasiens = pasiens::where('id_pasien', $id)->first();
        $pasiens->delete();
    
        return redirect('/pasiens')->with('pesan', 'Data Deleted Successfully');
    }
}