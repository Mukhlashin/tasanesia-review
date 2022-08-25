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
                    <h4>Manajemen Kategori</h4>
                  </div>
                  <div class="card-body"> 
                    <button class="btn btn-success mb-2" id="add-kategori" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> Tambah</button>
                    
                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                      {{session('success')}}
                    </div>
                    @endif

                    @if(session()->has('message'))
                     <p>{{ session()->get('message') }}</p>
                    @endif
                    <!-- form modal -->
                    <form method="post" action="{{ route('kategori.store') }}" class="modal-part" id="form-input-kategori" enctype="multipart/form-data">
                    @csrf                       
                      <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori') }}">
                        @error('nama_kategori')
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
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($kategori as $data)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $data->nama_kategori }}</td>
                            <td><a href="/edit-kategori" class="btn btn-primary mt-1 mb-1 ml-1"><i class="fa-solid fa-pen-to-square"></i></a>        <button class="btn btn-danger btn-delete mt-1 mb-1 ml-1" data-confirm="Delete Jurnal|Do you want to continue?" data-confirm-yes="alert('Deleted :)');" ><i class="fa-solid fa-trash"></i></button></td>
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