<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PerangkatdesaController extends Controller
//<?php
{
    public function index()
    {
        $perangkatdesa = User::where('role', 'perangkat_desa')->get();
        return view('pages.datauser.perangkatdesa.dataperangkatdesa', compact('perangkatdesa'));
    }

    public function create()
    {
        return view('pages.datauser.perangkatdesa.tambahperangkatdesa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik'          => 'required|string|size:16|unique:users,nik',
            'kk'           => 'required|string|size:16',
            'jeniskelamin' => 'required|in:male,female',
            'email'        => 'required|string|email|unique:users,email',
            'password'     => 'required|string|min:8',
            'no_hp'        => 'required|string|max:15|regex:/^\+?[\d\s\-]+$/',
            'alamat'       => 'required|string',
            'role'         => 'required|in:warga,admin,perangkat_desa',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            "nama_lengkap.required" => "nama harus di isi ",
            "nik.required" => "nik harus di isi ",
            "kk.required" => "kk harus di isi ",
            "jeniskelamin.required" => "jeniskelamin harus di isi ",

            "email.required" => "nama harus di isi ",
            "email.email" => "email harus di isi ",

            "password.required" => "password harus di isi ",
            "no_hp.required" => "no telepon harus di isi ",
            "alamat.required" => "alamat harus di isi ",
            "role.required" => "role harus di isi ",

        ]);

        $user = new User;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->nik = $request->nik;
        $user->kk = $request->kk;
        $user->jeniskelamin = $request->jeniskelamin;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        $user->role = $request->role;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('foto_user', 'public');
            $user->foto = $path;
        }

        $user->save();

        return redirect('perangkatdesa')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perangkatdesa = User::findOrFail($id);
        return view('pages.datauser.perangkatdesa.editperangkatdesa', compact('perangkatdesa'));
    }



    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik'          => 'required|string|size:16|unique:users,nik,' . $id,
            'kk'           => 'required|string|size:16',
            'jeniskelamin' => 'required|in:male,female',
            'email'        => 'required|string|email|unique:users,email,' . $id,
            'password'     => 'nullable|string|min:8',
            'no_hp'        => 'required|string|max:15|regex:/^08[0-9]{8,13}$/',
            'alamat'       => 'required|string',
            'role'         => 'required|in:admin,warga,perangkat_desa',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user->nama_lengkap = $request->nama_lengkap;
        $user->nik = $request->nik;
        $user->kk = $request->kk;
        $user->jeniskelamin = $request->jeniskelamin;
        $user->email = $request->email . '@gmail.com'; // Karena di form hanya input 'username'

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        $user->role = $request->role;

        // Handle Upload Foto
        if ($request->hasFile('foto')) {
            if ($user->foto && Storage::exists('public/' . $user->foto)) {
                Storage::delete('public/' . $user->foto);
            }

            $path = $request->file('foto')->store('foto_perangkatdesa', 'public');
            $user->foto = $path;
        }

        $user->save();

        return redirect('/perangkatdesa')->with('success', 'Data perangkat desa berhasil diperbarui.');
    }


    public function detailprofile($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.profile.detail_profile', compact('admin'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->foto && Storage::exists('public/' . $user->foto)) {
            Storage::delete('public/' . $user->foto);
        }

        $user->delete();

        return redirect('admin')->with('success', 'Admin berhasil dihapus.');
    }
}
