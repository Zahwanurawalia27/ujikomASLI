@extends('admin.mainn')

@section('content')
              <div class="card">
                <div class="card-header">
                  <h4>Data Album / Category</h4>
                  <div class="card-header-action">
                    <a href="/tambahAlbum" class="btn btn-danger">Tambah Album <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>

              @if (session()->has('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
              @endif
                
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>#</th>
                        <th>Nama Album</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Dibuat</th>
                        <th>User ID</th>
                      </tr>
                      @foreach ($album as $album)
                        <tr>
                          <td> {{ $loop->iteration }} </td>
                          <td> {{ $album->NamaAlbum }} </td>
                          <td> {{ $album->Deskripsi }} </td>
                          <td> {{ $album->TanggalDibuat }} </td>
                          <td> {{ $album->UserID }} </td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                  
                </div>

              
@endsection
