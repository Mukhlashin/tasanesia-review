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
                    <h4>Manajemen Tanaman</h4>
                  </div>
                  <div class="card-body">
                    <button class="btn btn-success mb-2" id="add-tanaman" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> Tambah</button>
                    <div class="search-container">
          <form action="/search" type="GET" method="get">
            <input type="text" placeholder="Search.." name="query">
            <button type="submit" class="btn_search"><i class="fa fa-search"></i></button>
          </form>
        </div>
                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                      {{session('success')}}
                    </div>
                    @endif

                    @if(session()->has('message'))
                     <p>{{ session()->get('message') }}</p>
                    @endif
                    <!-- form modal -->
                    <form method="post" action="{{ route('tanaman.store') }}" class="modal-part" id="form-input-tanaman" enctype="multipart/form-data">
                      @csrf       
                      <div class="form-group">
                        <label>Outlet</label>
                        <select class="form-control @error('outlet_id') is-invalid @enderror" name="outlet_id" id="outlet_id">
                        @foreach ($outlet as $data)
                          <option value="{{ $data->outlet_id }}">{{ $data->nama_outlet }}</option>
                        @endforeach
                        </select>
                        <label for="kategori_id">Kategori Tanaman</label>
                          <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">
                          @foreach ($kategori as $data)
                            <option value="{{ $data->kategori_id }}">{{ $data->nama_kategori }}</option>
                          @endforeach
                          </select>  
                        <label for="nama_produk">Nama Tanaman</label>
                        <input type="text" class="form-control mb-1 @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama_produk" requiered autofocus value="{{ old('nama_produk') }}">
                        @error('nama_produk')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label  for="foto_tanaman">Foto Tanaman</label>
                        <input class="form-control mb-1 @error('foto_tanaman') is-invalid @enderror" type="file" name="images" id="images">
                        @error('foto_tanaman')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label  for="nama_produk">Deskripsi</label>
                        <input type="text" class="form-control mb-1 @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="jumlah_stok">Jumlah Stok</label>
                        <input type="text" class="form-control mb-1 @error('jumlah_stok') is-invalid @enderror" name="jumlah_stok" id="jumlah_stok" value="{{ old('jumlah_stok') }}">
                        @error('jumlah_stok')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="kodefikasi">Kodefikasi</label>
                        <input type="text" class="form-control mb-1 @error('kodefikasi') is-invalid @enderror" name="kodefikasi" id="kodefikasi" value="{{ old('kodefikasi') }}">
                        @error('kodefikasi')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control mb-1 @error('angkatan') is-invalid @enderror" name="angkatan" id="angkatan" value="{{ old('angkatan') }}">
                        @error('angkatan')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="jumlah_tanaman_seangkatan">Tanaman seangkatan</label>
                        <input type="text" class="form-control mb-1 @error('jumlah_tanaman_seangkatan') is-invalid @enderror" name="jumlah_tanaman_seangkatan" id="jumlah_tanaman_seangkatan" value="{{ old('jumlah_tanaman_seangkatan') }}">
                        @error('jumlah_tanaman_seangkatan')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="varian_tanaman">Varian Tanaman</label>
                        <select class="form-control mb-1" name="varian_tanaman">
                          <option value="bibit">Bibit</option>
                          <option value="tumbuh 1">Tumbuh 1</option>
                          <option value="tumbuh 2">Tumbuh 2</option>
                          <option value="dewasa">Dewasa</option>
                        </select> 
                        <!-- @error('varian_tanaman')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror -->
                        <label for="jumlah_daun">Jumlah Daun</label>
                        <input type="text" class="form-control mb-1 @error('jumlah_daun') is-invalid @enderror" name="jumlah_daun" id="jumlah_daun" value="{{ old('jumlah_daun') }}">
                        @error('jumlah_daun')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="tinggi_daun">Tinggi Daun</label>
                        <input type="text" class="form-control mb-1 @error('tinggi_daun') is-invalid @enderror" name="tinggi_daun" id="tinggi_daun" value="{{ old('tinggi_daun') }}">
                        @error('tinggi_daun')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="kondisi_tanaman">Kondisi Tanaman</label>
                        <input type="text" class="form-control mb-1 @error('kondisi_tanaman') is-invalid @enderror" name="kondisi_tanaman" id="kondisi_tanaman" value="{{ old('kondisi_tanaman') }}">
                        @error('kondisi_tanaman')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control mb-1 @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{ old('harga') }}">
                        @error('harga')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="harga_grosir">Harga Grosir</label>
                        <input type="text" class="form-control mb-1 @error('harga_grosir') is-invalid @enderror" name="harga_grosir" id="harga_grosir" value="{{ old('harga_grosir') }}">
                        @error('harga_grosir')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="harga_amerika">Harga Amerika</label>
                        <input type="text" class="form-control mb-1 @error('harga_amerika') is-invalid @enderror" name="harga_amerika" id="harga_amerika" value="{{ old('harga_amerika') }}">
                        @error('harga_amerika')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="asal_tanaman">Asal Tanaman</label>
                        <select class="form-control mb-1 @error('asal_tanaman') is-invalid @enderror" name="asal_tanaman" id="asal_tanaman" value="{{ old('asal_tanaman') }}">
                          <option>Bibit</option>
                          <option>Propagasi</option>
                          <option>Indukan</option>
                        </select> 
                        @error('asal_tanaman')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="produsen">Produsen</label>
                          <select class="form-control mb-1" name="produsen" id="produsen" >
                            <option value="pemberdayaan masyarakat">Pemberdayaan Masyarakat</option>
                            <option value="petani">Petani</option>
                          </select> 
                          <!-- @error('produsen')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror -->
                        <label for="nama_produsen">Nama Produsen</label>
                        <input type="text" class="form-control mb-1 @error('nama_produsen') is-invalid @enderror" name="nama_produsen" id="nama_produsen" value="{{ old('nama_produsen') }}">
                        @error('nama_produsen')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-5">Save</button>
                      </div>  
                    </form>
                    <div style="height:100%;width:100%;overflow-y:hidden;overflow-x:scroll;">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Outlet</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama tanaman</th>
                            <th scope="col">Foto tanaman</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Jumlah stok</th>
                            <th scope="col">Kodefikasi</th>
                            <th scope="col">Harga beli</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">tanaman seangkatan</th>
                            <th scope="col">Varian tanaman</th>
                            <th scope="col">Jumlah daun</th>
                            <th scope="col">Tinggi daun</th>
                            <th scope="col">Kondisi tanaman</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Harga grosir</th>
                            <th scope="col">Harga amerika</th>
                            <th scope="col">Asal tanaman</th>
                            <th scope="col">Produsen</th>
                            <th scope="col">Nama produsen</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($tanaman as $data)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $data->outlet->nama_outlet ?? 'None' }}</td>
                            <td>{{$data->nama_produk ?? 'None'}}</td>
                            <td>{{$data->nama_produk}}</td>
                            <td><img src="{{$data['foto_produk']}}" width="100px" height="80px" style="border-radius:5px"></td>
                            <td><div style="height:100px;width:140px;overflow:auto;padding:2%">{{$data->deskripsi}}</div></td>
                            <td>{{$data->jumlah_stok}}</td>
                            <td>{{$data->kodefikasi}}</td>
                            <td>{{$data->harga}}</td>
                            <td>{{$data->angkatan}}</td>
                            <td>{{$data->jumlah_tanaman_seangkatan}}</td>
                            <td>{{$data->varian_tanaman}}</td>
                            <td>{{$data->jumlah_daun}}</td>
                            <td>{{$data->tinggi_daun}}</td>
                            <td>{{$data->kondisi_tanaman}}</td>
                            <td>{{$data->harga}}</td>
                            <td>{{$data->harga_grosir}}</td>
                            <td>{{$data->harga_amerika}}</td>
                            <td>{{$data->asal_tanaman}}</td>
                            <td>{{$data->produsen}}</td>
                            <td>{{$data->nama_produsen}}</td>
                            <td>
                              <a href="/edit-tanaman" class="btn btn-primary mt-1 mb-1 ml-1"><i class="fa-solid fa-pen-to-square"></i></a>        <button class="btn btn-danger btn-delete mt-1 mb-1 ml-1" data-confirm="Delete Jurnal|Do you want to continue?" data-confirm-yes="alert('Deleted :)');" ><i class="fa-solid fa-trash"></i></button>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
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
