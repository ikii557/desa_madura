@extends('layouts.app')
@section('main')

<div class="page-inner">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-12"> {{-- Atur lebar di sini --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit  Admin</div>
                </div>
                <div class="card-body">
                    <form action="/update/perangkatdesa/{{ $perangkatdesa->id }}" method="post" enctype="multipart/form-data">

                      @csrf
                      <div class="form-group">
                            <label for="foto" class="form-label">Foto</label>

                            <!-- Container Foto Profil -->
                            <div class="position-relative mb-2" style="display: inline-block;">
                                <img id="preview"
                                    src="{{ $perangkatdesa->foto ? asset('storage/' . $perangkatdesa->foto) : 'https://via.placeholder.com/150' }}"
                                    class="rounded-circle"
                                    style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #ddd; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);"
                                    alt="Preview Foto">
                            </div>

                            <!-- Input File -->
                            <div class="mt-2">
                                <input type="file" name="foto" id="foto" class="form-control form-control-lg"
                                    accept="image/*" onchange="previewImage()">
                                @error('foto')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            {{-- Kolom Kiri --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Masukkan Nama Lengkap</label>
                                    <input name="nama_lengkap" type="text" value="{{$perangkatdesa->nama_lengkap}}" class="form-control" placeholder="Masukkan nama lengkap" />
                                @error('nama_lengkap')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Masukkan NIK Lengkap</label>
                                    <input name="nik" type="text" value="{{$perangkatdesa->nik}}" class="form-control" placeholder="Masukkan NIK lengkap" />
                                @error('nik')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Masukkan KK Lengkap</label>
                                    <input name="kk" type="text" value="{{$perangkatdesa->kk}}" class="form-control" placeholder="Masukkan KK lengkap" />
                                @error('kk')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                type="radio"
                                                name="jeniskelamin"
                                                id="male"
                                                value="male"
                                                {{ $perangkatdesa->jeniskelamin == 'male' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="male">male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                type="radio"
                                                name="jeniskelamin"
                                                id="female"
                                                value="female"
                                                {{ $perangkatdesa->jeniskelamin == 'female' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="female">female</label>
                                        </div>
                                    </div>
                                    @error('jeniskelamin')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat">{{ old('alamat', $perangkatdesa->alamat) }}</textarea>
                                    @error('alamat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                
                            </div>

                            {{-- Kolom Kanan --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Masukkan Email</label>
                                    <div class="input-group">
                                        <input name="email" type="text" value="{{$perangkatdesa->email}}"  class="form-control" placeholder="Username email" />
                                        <span class="input-group-text">@gmail.com</span>
                                    </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Masukkan Password" />
                                    <small class="text-primary fw-normal fst-normal">Kosongkan jika tidak ingin mengubah password.</small>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="role" class="form-label">Role</label>
                                      <select name="role" id="role" class="form-control form-control-lg" required>
                                          <option value="perangkat_desa">perangkat desa</option>
                                      </select>
                                @error('role')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Masukkan No HP</label>
                                    <input name="no_hp" type="text" value="{{$perangkatdesa->no_hp}}" class="form-control" placeholder="08xxxxxxxxxx" />
                                
                                @error('no_hp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreement" />
                            <label class="form-check-label" for="agreement">
                                Klik jika setuju akan ditambahkan
                            </label>
                            <div class="text-end ">
                            <button type="submit" class="btn btn-success me-2">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
