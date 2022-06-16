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
    <div class="container">
        <div class="row row-cols-2">
        <div class="p-3 border bg-dark">Nama :</div>
        <div class="p-3 border bg-dark">NIM :</div>
        <div class="p-3 border bg-dark">IPK/IPS :</div>
        <div class="p-3 border bg-dark">Dosen Wali :</div>
        <div class="p-3 border bg-dark">Batas SKS :</div>
        <div class="p-3 border bg-dark">Jumlah SKS Tempuh :}</div>
      </div>
      <div class="row">
          <a href="/update-status" class="btn btn-info w-100">SETUJUI FRS</a>
      </div>
@endsection