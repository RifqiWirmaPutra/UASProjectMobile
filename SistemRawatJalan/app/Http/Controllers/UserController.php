<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Menampilkan daftar pengguna
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', ['users' => $users]);
    }

    //Menampilkan form tambah pengguna
    public function create()
    {
        return view('backend.users.create');
    }

    //Menyimpan data pengguna
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' =>'required|unique:users',
            'email' =>'required|email',
            'nama_lengkap' => 'required',
            'nomor_telepon' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $validatedData['password'] = hash::make($request->password);

        user::create($validatedData);

        return redirect()->route('users.index')->with('pesan', 'Data Added Successfully');
    }

    //Menampilkan Detail Pengguna

    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('users.show', ['users' => $users]);
    }

    //Menampilkan form edit pengguna
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', ['users' => $users]);
    }

    //Update data pengguna ke database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' =>'required|string|max:25|unique:users,username,'.$id,
            'email' =>'required|email|unique:users,email,' .$id,
            'nama_lengkap' =>'required|string|max:25',
            'nomor_telepon' =>'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $users = User::findOrFail($id);
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->nama_lengkap = $request->input('nama_lengkap');
        $users->nomor_telepon = $request->input('nomor_telepon');
        if ($request->hash('password')) {
            $users->password = bcrypt($request->input('password'));
        }
        $users->save();

        return redirect()->route('users.index')->with('Success', 'Data Updated Successfully');
    }

    //Menghapus data pengguna
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')->with('Success', 'Data Deleted Successfully');
    }
}
