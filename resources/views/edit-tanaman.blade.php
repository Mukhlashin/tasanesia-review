@extends('layouts.main')

@section('container')
@include('layouts.navbar')
@include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <div class="section-body">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Tanaman</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Nama Tanaman</label>
                            <input type="text" class="form-control mb-1">
                            <label>Foto Tanaman</label>
                            <input class="form-control" type="file" id="formFile">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control mb-1">
                            <label>Jumlah Stok</label>
                            <input type="text" class="form-control mb-1">
                            <label>Kodefikasi</label>
                            <input type="text" class="form-control mb-1">
                            <label>Harga Beli</label>
                            <input type="text" class="form-control mb-1">
                            <label>Angkatan</label>
                            <input type="text" class="form-control mb-1">
                            <label>Tanaman seangkatan</label>
                            <input type="text" class="form-control mb-1">
                            <label>Varian Tanaman</label>
                            <input type="text" class="form-control mb-1">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Jumlah Daun</label>
                            <input type="text" class="form-control mb-1">
                            <label>Tinggi Daun</label>
                            <input type="text" class="form-control mb-1">
                            <label>Kondisi Tanaman</label>
                            <input type="text" class="form-control mb-1">
                            <label>Harga</label>
                            <input type="text" class="form-control mb-1">
                            <label>Harga Grosir</label>
                            <input type="text" class="form-control mb-1">
                            <label>Harga Amerika</label>
                            <input type="text" class="form-control mb-1">
                            <label>Asal Tanaman</label>
                            <select class="form-control mb-1">
                            <option>Bibit</option>
                            <option>Propagasi</option>
                            <option>Indukan</option>
                            </select> 
                            <label>Produsen</label>
                            <select class="form-control mb-1">
                                <option>Pemberdayaan Masyarakat</option>
                                <option>Petani</option>
                            </select> 
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 mb-3">Save</a>
                  </div>
                </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
@endsection
