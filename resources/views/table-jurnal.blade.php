'@extends('layouts.main')

@section('container')

@include('layouts.navbar')
@include('layouts.sidebar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <div class="section-body">
                <div class="card">
                  <div class="card-header">
                    <h4>Jurnal</h4>
                  </div>
                  <div class="card-body">
                    <button class="btn btn-success mb-2" id="add-data-jurnal" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> Tambah</button>
                    <!-- form modal -->
                    <form class="modal-part" id="form-input-jurnal" method="post" action="{{ route('jurnal.store') }}" class="modal-part" id="form-input-jurnal" enctype="multipart/form-data">  
                    @csrf                     
                      <div class="form-group">
                        <label for="tanaman_id">Nama Tanaman</label>
                          <select class="form-control mb-1" name="tanaman_id" id="tanaman_id">
                          @foreach ($tanaman as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_produk }}</option>
                          @endforeach
                          </select>  
                        <label for="stok_terbaru">Stok Terbaru</label>
                        <input type="text" class="form-control mb-1 @error('stok_terbaru') is-invalid @enderror" name="stok_terbaru" id="stok_terbaru" value="{{ old('stok_terbaru') }}">
                        @error('stok_terbaru')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="type">Type </label>
                        <select class="form-control mb-1" name="type" id="type">
                          <option value="penambahan">Penambahan</option>
                          <option value="mati">Mati/Layu</option>
                          <option value="terjual">Penjualan/Laku</option>
                        </select>  
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control mb-1 @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" value="{{ old('keterangan') }}">
                        @error('keterangan')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <label for="harga_terbaru">Harga Terbaru</label>
                        <input type="text" class="form-control mb-1 @error('harga_terbaru') is-invalid @enderror" name="harga_terbaru" id="harga_terbaru" value="{{ old('harga_terbaru') }}">
                        @error('harga_terbaru')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-5">Save</button>
                      </div>  
                    </form>
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama tanaman</th>
                            <th scope="col">Stok terbaru</th>
                            <th scope="col">Type</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga Terbaru</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($jurnal as $data)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $data->tanaman->nama_produk ?? 'None' }}</td>
                            <td>{{ $data->stok_terbaru }}</td>
                            <td>{{ $data->type }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>{{ $data->type }}</td>
                            <td><a href="/edit-jurnal" class="btn btn-primary mt-1 mb-1 ml-1"><i class="fa-solid fa-pen-to-square"></i></a>
                              <button class="btn btn-danger ml-1 mb-1 mt-1" id="delete-data-jurnal" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i></button>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
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