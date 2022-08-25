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
                    <h4>Manajemen Outlet</h4>
                  </div>
                  <div class="card-body"> 
                    <button class="btn btn-success mb-2" id="add-data-outlet" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> Tambah</button>
                    <!-- form modal -->
                    <form id="form-input-outlet"  class="modal-part" method="post" action="{{ route('outlet.store') }}" id="form-input-outlet" enctype="multipart/form-data">  
                    @csrf                    
                      <div class="form-group">
                        <label for="nama_outlet">Nama Outlet</label>
                        <input type="text" class="form-control @error('nama_outlet') is-invalid @enderror" name="nama_outlet" id="nama_outlet" value="{{ old('nama_outlet') }}">
                        @error('nama_outlet')
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
                            <th scope="col">Nama Outlet</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($outlet as $data)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $data->nama_outlet }}</td>
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