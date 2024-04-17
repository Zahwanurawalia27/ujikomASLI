@extends('admin.mainn')

@section('content')
              <div class="card">
                <div class="card-header">
                  <h4>Data Album / Category</h4>
                  <div class="card-header-action">
                    <a href="/tambahAlbum" class="btn btn-danger">Tambah Album <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama Album</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Dibuat</th>
                        <th>User ID</th>
                      </tr>
                      <tr>
                        <td><a href="#">Romance</a></td>
                        <td class="font-weight-600">Album romance</td>
                        <td><div class="badge badge-warning">July 19, 2018</div></td>
                        <td>1</td>
                        <td>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">INV-48574</a></td>
                        <td class="font-weight-600">Hasan Basri</td>
                        <td><div class="badge badge-success">Paid</div></td>
                        <td>July 21, 2018</td>
                        <td>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">INV-76824</a></td>
                        <td class="font-weight-600">Muhamad Nuruzzaki</td>
                        <td><div class="badge badge-warning">Unpaid</div></td>
                        <td>July 22, 2018</td>
                        <td>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">INV-84990</a></td>
                        <td class="font-weight-600">Agung Ardiansyah</td>
                        <td><div class="badge badge-warning">Unpaid</div></td>
                        <td>July 22, 2018</td>
                        <td>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>

              
@endsection
