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
        <div class="p-3 border bg-dark">Nama : {{ $variables["nama"] }}</div>
        <div class="p-3 border bg-dark">NIM : {{ $variables["nim"] }}</div>
        <div class="p-3 border bg-dark">IPK/IPS : {{ $variables["ipk"] }}</div>
        <div class="p-3 border bg-dark">Dosen Wali : {{ $variables["doswal"] }}</div>
        <div class="p-3 border bg-dark">Batas SKS : {{ $variables["batas_sks"] }}</div>
        <div class="p-3 border bg-dark">Jumlah SKS Tempuh : {{ $variables["jumlah_sks"] }}</div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        @if($task[0]["name"] == "Meninjau data FRS")
        <form action="/setujui" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlSelect1">Apakah data diatas telah sesuai?</label>
            <select class="form-control" id="exampleFormControlSelect1" name="disetujui">
              <option value="iya">Iya</option>
              <option value="tidak">Tidak</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="taskId" value="{{ $task[0]["id"] }}">Submit</button>
        </form>
        @else
        <form action="/validasi" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary w-100" name="taskId" value="{{ $task[0]["id"] }}">Validasi</button>
        @endif
      </div>
    </div>
    <br>
</section>
@endsection