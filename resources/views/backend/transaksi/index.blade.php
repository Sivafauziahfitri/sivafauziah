@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row d-flex pt-4">
        <h4 class="h2">Transaksi</h4>
    </div>
</div> 

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-0">
            <div class="card-body">
              <div class="d-flex px-2 py-2">
                <div>
                <a href="" class="btn btn-warning">Tambah Transaksi</a>
                </div>
              </div>
              <div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>nomor</th>
                      <th>nama</th>
                      <th>jenis</th>
                      <th>total</th>
                      <th>tanggal</th>
                      <th>options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>12344</th>
                      <th>sivafauziahfitri</th>
                      <th>admin</th>
                      <th>123</th>
                      <th>02012021</th>
                      <th>
                        <a href="" class="btn btn-primary">Detail</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection