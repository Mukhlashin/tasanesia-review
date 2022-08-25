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
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control">
                            </div> 
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
