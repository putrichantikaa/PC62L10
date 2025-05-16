@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Dosen') }}
                 <a href="dosen/form"><button type="button" class="btn btn-primary float-end">Tambah Data</button></a>
                </div>
                 <div class="card-body">
                 <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>12121</td>
                          <td>Putri Chantika</td>
                          <td>Full Time</td>
                          <td>putri@gmail.com</td>
                          <td>081234654</td>
                        </tr>
                      </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
