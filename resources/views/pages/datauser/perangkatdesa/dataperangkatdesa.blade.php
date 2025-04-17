@extends('layouts.app')
@section('main')

<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">perangkat desa</h3>
                <h6 class="op-7 mb-2">sekarang anda dalam data perangkat desa </h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manager</a>
                <a href="tambahperangkatdesa" class="btn btn-primary btn-round"><i class="fa fa-plus"></i> Add perangkat desa</a>
                
              </div>
            </div>
<div class="row">
  <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Support Tickets</div>
                      <div class="card-tools">
                        <ul
                          class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm"
                          id="pills-tab"
                          role="tablist"
                        >
                          <li class="nav-item">
                            <a
                              class="nav-link"
                              id="pills-today"
                              data-bs-toggle="pill"
                              href="#pills-today"
                              role="tab"
                              aria-selected="true"
                              >Today</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link active"
                              id="pills-week"
                              data-bs-toggle="pill"
                              href="#pills-week"
                              role="tab"
                              aria-selected="false"
                              >Week</a
                            >
                          </li>
                          <li class="nav-item">
                            <a
                              class="nav-link"
                              id="pills-month"
                              data-bs-toggle="pill"
                              href="#pills-month"
                              role="tab"
                              aria-selected="false"
                              >Month</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="avatar avatar-online">
                        <span
                          class="avatar-title rounded-circle border border-white bg-info"
                          >J</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Joko Subianto
                          <span class="text-warning ps-3">pending</span>
                        </h6>
                        <span class="text-muted"
                          >I am facing some trouble with my viewport. When i
                          start my</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">8:40 PM</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-offline">
                        <span
                          class="avatar-title rounded-circle border border-white bg-secondary"
                          >P</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Prabowo Widodo
                          <span class="text-success ps-3">open</span>
                        </h6>
                        <span class="text-muted"
                          >I have some query regarding the license issue.</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">1 Day Ago</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-away">
                        <span
                          class="avatar-title rounded-circle border border-white bg-danger"
                          >L</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Lee Chong Wei
                          <span class="text-muted ps-3">closed</span>
                        </h6>
                        <span class="text-muted"
                          >Is there any update plan for RTL version near
                          future?</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">2 Days Ago</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-offline">
                        <span
                          class="avatar-title rounded-circle border border-white bg-secondary"
                          >P</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Peter Parker
                          <span class="text-success ps-3">open</span>
                        </h6>
                        <span class="text-muted"
                          >I have some query regarding the license issue.</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">2 Day Ago</small>
                      </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                      <div class="avatar avatar-away">
                        <span
                          class="avatar-title rounded-circle border border-white bg-danger"
                          >L</span
                        >
                      </div>
                      <div class="flex-1 ms-3 pt-1">
                        <h6 class="text-uppercase fw-bold mb-1">
                          Logan Paul <span class="text-muted ps-3">closed</span>
                        </h6>
                        <span class="text-muted"
                          >Is there any update plan for RTL version near
                          future?</span
                        >
                      </div>
                      <div class="float-end pt-1">
                        <small class="text-muted">2 Days Ago</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-post card-round">
                  <img
                    class="card-img-top"
                    src="assets/img/blogpost.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="avatar">
                        <img id="preview"
                        src="{{ auth()->user()->role == 'admin' ?? 'petugas'
                                ? (auth()->user()->foto ? asset('storage/' . auth()->user()->foto) : 'https://via.placeholder.com/150')
                                : (optional(auth()->user()->petugas)->foto ? asset('storage/' . optional(auth()->user()->petugas)->foto) : 'https://via.placeholder.com/150') }}"
                        class="rounded-circle"
                        style="width: 50px; height: 50px; object-fit: cover; border: 2px solid #ddd; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);"
                        alt="Profile Photo">
                      </div>

                      <div class="info-post ms-2">
                        <p class="username">{{ auth()->user()->nama_lengkap }}</p>
                        <p class="date text-muted">20 Jan 18</p>
                      </div>
                    </div>
                    <div class="separator-solid"></div>
                    <p class="card-category text-info mb-1">
                      <a href="#">Design</a>
                    </p>
                    <h3 class="card-title">
                      <a href="#"> Best Design Resources This Week </a>
                    </h3>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    
                    <a href="/editperangkatdesa/{{ $perangkatdesa->id }}" class="btn btn-primary btn-rounded btn-sm"
                      >edit profile</a
                    >
                  </div>
                </div>
              </div>
              </div>
              
             <div class="container mt-4">
              <div class="card shadow-lg">
                <div class="card-header bg-dark text-white">
                  <h4 class="mb-0">Data perangkatdesa</h4>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">alamat</th>
                        <th scope="col">opsi</th>
                      </tr>
                    </thead>
                    @foreach ($perangkatdesa as $no => $pegawaidesa)
                      <tr>
                        <td>{{ $no + 1  }}</td>
                        <td>{{ $pegawaidesa->nama_lengkap }}</td>
                        <td>{{ $pegawaidesa->jeniskelamin }}</td>
                        <td>{{ $pegawaidesa->email }}</td>
                        <td>{{ $pegawaidesa->no_hp }}</td>
                        <td>{{ $pegawaidesa->alamat }}</td>
                        <td><a href="/editperangkatdesa/{{ $pegawaidesa->id }}" class="btn btn-info btn-sm">Edit</a></td>
                      </tr>
                    @endforeach
                </table>
              </div>
              </div>
            </div>  
            </div>

              
    
@endsection