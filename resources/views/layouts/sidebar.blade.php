<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Tasanesia</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TS</a>
          </div>
          <ul class="sidebar-menu">
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
              </li>
              <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Manajemen Tanaman</span></a>
                <ul class="dropdown-menu" style="display: block;">
                  <li class="{{ Request::is('outlet') ? 'active' : ''}}"><a class="nav-link" href="/outlet">Lokasi Tanaman</a></li>
                  <li class="{{ Request::is('kategori') ? 'active' : ''}}"><a class="nav-link" href="/kategori">Kategori Tanaman</a></li>
                  <li class="{{ Request::is('tanaman') ? 'active' : ''}}"><a class="nav-link" href="/tanaman">Data Tanaman</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i><span>Jurnal Tanaman</span></a>
                <ul class="dropdown-menu" style="display: block;">
                  <li class="{{ Request::is('jurnal') ? 'active' : ''}}"><a class="nav-link" href="/jurnal">Update Harian Stok Tanaman</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-seedling"></i><span>Laporan Stok Tanaman</span></a>
                <ul class="dropdown-menu" style="display: block;">
                  <li  class="{{ Request::is('table-stok') ? 'active' : ''}}"><a class="nav-link" href="/laporan-stok">Total Seluruh Tanaman</a></li>
                  <li  class="{{ Request::is('table-stok') ? 'active' : ''}}"><a class="nav-link" href="/laporan-stok">Total Tanaman Mati</a></li>
                  <li  class="{{ Request::is('table-stok') ? 'active' : ''}}"><a class="nav-link" href="/laporan-stok">Total Tanaman Hidup</a></li>
                  <li  class="{{ Request::is('table-stok') ? 'active' : ''}}"><a class="nav-link" href="/laporan-stok">Total Tanaman Terjual</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>