@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
         <div class="col-12 m-auto">
             <div class="card">
             <div class="card-header">
                 <h3 class="float-start">Data Dosen</h3>
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
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
