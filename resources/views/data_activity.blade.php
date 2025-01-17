@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">  
        <div class="content-wrapper">
          <div class="page-header">
              <p class="mb-1 text-black">Data Kandidat Magang</p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Data kandidat </a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data Activity</li>
                  </ol>
              </nav>
          </div>
        @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
        @endif
          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="zero_config" class="table table-hover css-serial">
                                  <thead>
                                      <tr>
                                        <th>No</th>
                                        <th> Nama Kandidat</th>
                                        <th>Jurusan</th>
                                        <th>Tanggal Registrasi</th>
                                        <th>Unit Kerja</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($candidate as $c)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $c->name}}</td>
                                        <td>Komunikasi</td>
                                        <td>{{ $c->created_at}}</td>
                                        <td>IT Group</td>
                                        <td>
                                            <label class="badge badge-gradient-warning">Review </label>
                                        </td>
                                        <td>{{ $c->email }}</td>
                                        <td>
                                            <a href="/data_activity/{{ $c->id }}" type="button" class="btn btn-sm btn-primary mb-1"> Detail</a>
                                            <a href="/data_activity/{{ $c->id }}/edit" type="button" class="btn btn-sm btn-light mb-1"> Ubah</a>
                                        </td>
                                      </tr>
                                    @endforeach  
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
      
      
          <!-- ---------------------------------------------------------------------- -->
          </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                      href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                  rights
                  reserved.</span>
              <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                  Technology
                  Group </span>
          </div>
      </footer>
      
      </div>

@endsection