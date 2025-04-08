<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
             <a href="index.html" class="logo">
              <img src="{{ asset('') }}assets/img/kaiadmin/cilacaplogo.png" alt="navbar brand" class="navbar-brand" height="20" />
              <span class="text-white p-1">PEMASMADU</span>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="{{ request()->is('index') ? '' : 'collapsed' }}">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
             <li class="nav-item 
                  {{ request()->is('adminsatu') || request()->is('admindua') || request()->is('perangkat_desa') || request()->is('data_warga') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#submenu" 
                  aria-expanded="{{ request()->is('adminsatu') || request()->is('admindua') || request()->is('perangkat_desa') || request()->is('data_warga') ? 'true' : 'false' }}">
                  <i class="fas fa-bars"></i>
                  <p>Menu</p>
                  <span class="caret"></span>
                </a>

                <div class="collapse 
                    {{ request()->is('adminsatu') || request()->is('admindua') || request()->is('perangkat_desa') || request()->is('data_warga') ? 'show' : '' }}" 
                    id="submenu">
                  <ul class="nav nav-collapse">

                    {{-- Submenu Admin --}}
                    <li class="{{ request()->is('adminsatu') || request()->is('admindua') ? 'active' : '' }}">
                      <a data-bs-toggle="collapse" href="#subnav1" 
                        aria-expanded="{{ request()->is('adminsatu') || request()->is('admindua') ? 'true' : 'false' }}">
                        <span class="sub-item">Profil Admin</span>
                        <span class="caret"></span>
                      </a>

                      <div class="collapse 
                          {{ request()->is('adminsatu') || request()->is('admindua') ? 'show' : '' }}" 
                          id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <li class="{{ request()->is('adminsatu') ? 'active' : '' }}">
                            <a href="{{ url('adminsatu') }}">
                              <span class="sub-item">Admin 1</span>
                            </a>
                          </li>
                          <li class="{{ request()->is('admindua') ? 'active' : '' }}">
                            <a href="{{ url('admindua') }}">
                              <span class="sub-item">Admin 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>

                    {{-- Submenu Perangkat Desa --}}
                    <li class="{{ request()->is('perangkat_desa') ? 'active' : '' }}">
                      <a data-bs-toggle="collapse" href="#subnav2" 
                        aria-expanded="{{ request()->is('perangkat_desa') ? 'true' : 'false' }}">
                        <span class="sub-item">Perangkat Desa</span>
                        <span class="caret"></span>
                      </a>

                      <div class="collapse {{ request()->is('perangkat_desa') ? 'show' : '' }}" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <li class="{{ request()->is('perangkat_desa') ? 'active' : '' }}">
                            <a href="{{ url('perangkat_desa') }}">
                              <span class="sub-item">DATA Perangkat Desa</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>

                    {{-- Submenu Data Warga --}}
                    <li class="{{ request()->is('data-warga') ? 'active' : '' }}">
                      <a data-bs-toggle="collapse" href="#subnav3" 
                        aria-expanded="{{ request()->is('data-warga') ? 'true' : 'false' }}">
                        <span class="sub-item">Data Warga</span>
                        <span class="caret"></span>
                      </a>

                      <div class="collapse {{ request()->is('data_warga') ? 'show' : '' }}" id="subnav3">
                        <ul class="nav nav-collapse subnav">
                          <li class="{{ request()->is('data_warga') ? 'active' : '' }}">
                            <a href="{{ url('data_warga') }}">
                              <span class="sub-item">DATA Warga</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>

                  </ul>
                </div>
              </li>


              <li class="nav-item {{ request()->is('pengajuankk','pengajuanktp','pengajuandomisili','pengajuannikah') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#base" aria-expanded="{{ request()->is('pengajuankk','pengajuanktp','pengajuandomisili','pengajuannikah') ? 'true' : 'false' }}">
                  <i class="fas fa-layer-group"></i>
                  <p>Data Pengajuan</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('pengajuankk','pengajuanktp','pengajuandomisili','pengajuannikah') ? 'show' : '' }}" id="base">
                  <ul class="nav nav-collapse">
                    <li class="{{ request()->is('pengajuanktp') ? 'active' : '' }}">
                      <a href="{{ url('pengajuanktp') }}">
                        <span class="sub-item">PENGAJUAN KTP</span>
                      </a>
                    </li>
                    <li class="{{ request()->is('pengajuankk') ? 'active' : '' }}">
                      <a href="{{ url('pengajuankk') }}">
                        <span class="sub-item">PENGAJUAN KK</span>
                      </a>
                    </li>
                    <li class="{{ request()->is('pengajuandomisili') ? 'active' : '' }}">
                      <a href="{{ url('pengajuandomisili') }}">
                        <span class="sub-item">PENGAJUAN DOMISILI</span>
                      </a>
                    </li>
                    <li class="{{ request()->is('pengajuannikah') ? 'active' : '' }}">
                      <a href="{{ url('pengajuannikah') }}">
                        <span class="sub-item">PENGAJUAN NIKAH</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ request()->is('pengaduan') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" 
                  aria-expanded="{{ request()->is('pengaduan') ? 'true' : 'false' }}">
                  <i class="fas fa-th-list"></i>
                  <p>DATA PENGADUAN</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('pengaduan') ? 'show' : '' }}" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li class="{{ request()->is('pengaduan') ? 'active' : '' }}">
                      <a href="{{ url('pengaduan') }}">
                        <span class="sub-item">PENGADUAN WARGA DESA</span>
                      </a>
                    </li>
                    {{-- <li>
                      <a href="icon-menu.html">
                        <span class="sub-item">Icon Menu</span>
                      </a>
                    </li> --}}
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ request()->is('berita') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#forms" 
                  aria-expanded="{{ request()->is('berita') ? 'true' : 'false' }}">
                  <i class="fas fa-pen-square"></i>
                  <p>BERITA</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('berita') ? 'show' : '' }}" id="forms">
                  <ul class="nav nav-collapse">
                    <li class="{{ request()->is('berita') ? 'active' : '' }}">
                      <a href="{{ url('berita') }}">
                        <span class="sub-item">SEKITAR DESA</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ request()->is('pelayanan') || request()->is('senin_jumat') || request()->is('sabtu_minggu') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#tables"
                  aria-expanded="{{ request()->is('pelayanan') || request()->is('senin_jumat') || request()->is('sabtu_minggu') ? 'true' : 'false' }}">
                  <i class="fas fa-table"></i>
                  <p>DATA PELAYANAN</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('pelayanan') || request()->is('senin_jumat') || request()->is('sabtu_minggu') ? 'show' : '' }}" id="tables">
                  <ul class="nav nav-collapse">
                    <li class="{{ request()->is('senin_jumat') ? 'active' : '' }}">
                      <a href="{{ url('senin_jumat') }}">
                        <span class="sub-item">PELAYANAN SENIN-JUMAT</span>
                      </a>
                    </li>
                    <li class="{{ request()->is('sabtu_minggu') ? 'active' : '' }}">
                      <a href="{{ url('sabtu_minggu') }}">
                        <span class="sub-item">PELAYANAN SABTU-MINGGU</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ request()->is('chat_forum') || request()->is('data_chat') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#maps"
                  aria-expanded="{{ request()->is('chat_forum') || request()->is('data_chat') ? 'true' : 'false' }}">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>CHAT FORUM</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('chat_forum') || request()->is('data_chat') ? 'show' : '' }}" id="maps">
                  <ul class="nav nav-collapse">
                    <li class="{{ request()->is('data_chat') ? 'active' : '' }}">
                      <a href="{{ url('data_chat') }}">
                        <span class="sub-item">data chat</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ request()->is('statistikdesa') || request()->is('data_statistik') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#charts"
                  aria-expanded="{{ request()->is('statistikdesa') || request()->is('data_statistik') ? 'true' : 'false' }}">
                  <i class="far fa-chart-bar"></i>
                  <p>STATISTIK DESA</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('statistikdesa') || request()->is('data_statistik') ? 'show' : '' }}" id="charts">
                  <ul class="nav nav-collapse">
                    <li class="{{ request()->is('data_statistik') ? 'active' : '' }}">
                      <a href="{{ url('data_statistik') }}">
                        <span class="sub-item">data statistik desa</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item {{ request()->is('index') ? 'active' : '' }}">
                <a href="widgets.html">
                  <i class="fas fa-desktop"></i>
                  <p>dasar dasar</p>
                  <span class="badge badge-success">4</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../documentation/index.html">
                  <i class="fas fa-file"></i>
                  <p>Documentation</p>
                  <span class="badge badge-secondary">1</span>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>