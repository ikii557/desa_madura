<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class WargaController extends Controller
{
    public function index()
    {
        $wargaLaki = User::where('role', 'warga')->where('jeniskelamin', 'male')->get();
        $wargaPerempuan = User::where('role', 'warga')->where('jeniskelamin', 'female')->get();

        return view('pages.datauser.warga.datawarga', compact('wargaLaki', 'wargaPerempuan'));
    }


    public function create()
    {
        return view('pages.datauser.warga.tambahwarga');
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

        return redirect('data_warga')->with('success', 'warga berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.profile.edit_admin', compact('admin'));
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
            'no_hp'        => 'required|string|max:15|regex:/^\+?[\d\s\-]+$/',
            'alamat'       => 'required|string',
            'role'         => 'required|in:warga,admin,perangkat_desa',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user->nama_lengkap = $request->nama_lengkap;
        $user->nik = $request->nik;
        $user->kk = $request->kk;
        $user->jeniskelamin = $request->jeniskelamin;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        $user->role = $request->role;

        if ($request->hasFile('foto')) {
            if ($user->foto && Storage::exists('public/' . $user->foto)) {
                Storage::delete('public/' . $user->foto);
            }

            $path = $request->file('foto')->store('foto_user', 'public');
            $user->foto = $path;
        }

        $user->save();

        return redirect('admin')->with('success', 'Data admin berhasil diperbarui.');
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
