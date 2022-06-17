@extends('layout.template')
@section('content')
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SISTEM INFORMASI PENGISIAN FRS MAHASISWA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Logout</a></li>
            </ol>
          </div>
        </div>

    <h3>FRS MAHASISWA</h3>
    @if(session("pesan"))
    <div class="alert bg-success">
        <h5>
            <i class="fa fa-check"></i>
            <strong>
                Berhasil!
            </strong>
            {{ session("pesan") }}
        </h5>
    </div>
    @endif
    <table class="table table-dark table-striped" id="example2">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Dosen Wali</th>
                <th>Action</th>
            </tr>           
        </thead>
        <tbody>
            @foreach($variables as $variable)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $variable["nama"] }}</td>
                <td>{{ $variable["nim"] }}</td>
                <td>{{ $variable["doswal"] }}</td>
                <td>
                    <a href="/detail/{{ $variable["instanceId"] }}" class="btn btn-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
                
    </table>
@endsection