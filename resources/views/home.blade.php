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
    <form class="row g-3">
        {{ csrf_field() }}
        <div class="col-md-6">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" id="nama">
        </div>
        <div class="col-md-6">
          <label for="nim" class="form-label">nim</label>
          <input type="tekt" class="form-control" id="nim">
        </div>
        <div class="col-12">
          <label for="ipk" class="form-label">IPK/IPS</label>
          <input type="text" class="form-control" id="ipk" placeholder=". . .">
        </div>
        <div class="col-12">
          <label for="dosen" class="form-label">Dosen Wali</label>
          <input type="text" class="form-control" id="dosen" placeholder=". . .">
        </div>
        <div class="col-12">
          <label for="batas_sks" class="form-label">Batas SKS</label>
          <input type="text" class="form-control" id="batas_sks">
        </div>
        <div class="col-12">
          <label for="jumlah_sks" class="form-label">Jumlah SKS Tempuh</label>
          <input type="text" class="form-control" id="jumlah_sks">
        </div>
        <br>
        <div class="col-12">
          <label for="matkul" class="form-label">Mata Kuliah</label>
          <input type="text" class="form-control" id="matkul">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
        </form>
      </form>
</section>
@endsection