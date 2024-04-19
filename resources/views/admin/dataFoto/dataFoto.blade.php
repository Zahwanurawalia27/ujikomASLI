@extends('admin.mainn')

@section('content')
              <div class="card">
                <div class="card-header">
                  <h4>Table Data Foto</h4>
                  <div class="card-header-action">
                    <a href="/foto/tambahFoto" class="btn btn-danger">Tambah Foto <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>#</th>
                        <th>Judul Foto</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Unggah</th>
                        <th>Lokasi File</th>
                        <th>Album</th>
                      </tr>
                      
                      @foreach ($foto as $foto)
                        <tr>
                          <th>{{ $loop->iteration }}</th>
                          <th>{{ $foto->JudulFoto }}</th>
                          <th>{{ $foto->DeskripsiFoto }}</th>
                          <th>{{ $foto->TanggalUnggah }}</th>
                          <th>{{ $foto->LokasiFile }}</th>
                          <th>{{ $foto->NamaAlbum }}</th>
                        </tr>
                      @endforeach

                    </table>
                  </div>
                </div>

              
@endsection
