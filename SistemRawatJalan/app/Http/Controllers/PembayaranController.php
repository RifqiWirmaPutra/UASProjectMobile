<?php

namespace App\Http\Controllers;

use App\Models\pembayarans;
use App\Models\pendaftarans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class PembayaranController extends Controller
{
        public function index()
        {
            return view('backend.pembayarans.index', ['pembayaran' => pembayarans::paginate(10)]);
        }

        public function create()
        {
            $pendaftarans = pendaftarans::all();
            return view('backend.pembayarans.create', compact('pendaftarans'));
        }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'id_pendaftaran' => 'required|exists:pendaftarans,id_pendaftaran',
                'tanggal' => 'required',
                'gambar' => 'required|image|mimes:png,jpg,jpeg,gif,svg,ico,|max:2048',
                'total_bayar' => 'required',
                'keterangan' => 'required',
            ]);
            
            if ($request->file('gambar')){
                $validatedData['gambar'] = $request->file('gambar')->store('pembayaran');
            }

            pembayarans::create($validatedData);

            return redirect('/pembayaran')->with('success', 'Data berhasil ditambahkan');
        }

        public function edit($id)
        {
            $pembayaran = pembayarans::findOrFail($id);
            return view('backend.pembayarans.edit', ['pembayaran' => $pembayaran]);
        }

        public function update(Request $request, $id_pembayaran)
        {
            $validatedData['gambar'] = $request->file('gambar')->store('pembayaran');

            pembayarans::where('id_pembayaran',$id_pembayaran)->update($validatedData);
            return redirect('/pembayaran')->with('success', 'Data berhasil diubah');
        }

        public function destroy($id)
        {
            $cek = pembayarans::find($id);
            $cek_gambar = $cek->gambar;
            if ($cek_gambar != null || $cek_gambar != ''){
                Storage::delete($cek_gambar);
            }

            pembayarans::findOrFail($id)->delete();
            return redirect('/pembayaran')->with('success', 'Data berhasil dihapus');
        }

        
}
