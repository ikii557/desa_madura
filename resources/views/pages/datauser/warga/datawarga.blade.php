@extends('layouts.app')
@section('main')

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Data Warga</h3>
      <h6 class="op-7 mb-2">Sekarang Anda dalam Data Warga</h6>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
      <a href="#" class="btn btn-label-info btn-round me-2">Manager</a>
      <a href="tambahwarga" class="btn btn-primary btn-round"><i class="fa fa-plus"></i> Add Warga</a>
    </div>
  </div>

  <!-- Card untuk Laki-laki -->
  <div class="row">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <div class="card-title mb-0">Data Warga - Laki-laki</div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No Telepon</th>
              <th>Jenis Kelamin</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($wargaLaki as $no => $warga)
              <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $warga->nama_lengkap }}</td>
                <td>{{ $warga->email }}</td>
                <td>{{ $warga->no_hp }}</td>
                <td>{{ $warga->jeniskelamin }}</td>
                <td>{{ $warga->role }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Card untuk Perempuan -->
  <div class="row mt-4">
    <div class="card">
      <div class="card-header bg-danger text-white">
        <div class="card-title mb-0">Data Warga - Perempuan</div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No Telepon</th>
              <th>Jenis Kelamin</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($wargaPerempuan as $no => $warga)
              <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $warga->nama_lengkap }}</td>
                <td>{{ $warga->email }}</td>
                <td>{{ $warga->no_hp }}</td>
                <td>{{ $warga->jeniskelamin }}</td>
                <td>{{ $warga->role }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection
