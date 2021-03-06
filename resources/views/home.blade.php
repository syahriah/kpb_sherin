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
    @if (session('info'))
    <div class="alert bg-info">
        <h5>
            <i class="fa fa-info"></i>
            <strong>
                Informasi!
            </strong>
            {{ session('info') }}
        </h5>
    </div>
    @endif
    @isset($variables)
      <form class="row g-3" action="/update-data" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="taskId" value="{{ $task[0]["id"] }}">
        <div class="col-md-6">
          <label for="nama" class="form-label">nama</label>
          <input type="text" class="form-control" required value="{{ $variables["nama"] }}" name="nama" id="nama">
        </div>
        <div class="col-md-6">
          <label for="nim" class="form-label">nim</label>
          <input type="tekt" class="form-control" required value="{{ $variables["nim"] }}" name="nim" id="nim">
        </div>
        <div class="col-12">
          <label for="ipk" class="form-label">IPK/IPS</label>
          <input type="text" class="form-control" required value="{{ $variables["ipk"] }}" name="ipk" id="ipk">
        </div>
        <div class="col-12">
          <label for="doswal" class="form-label">Dosen Wali</label>
          <input type="text" class="form-control" required value="{{ $variables["doswal"] }}" name="doswal" id="doswal">
        </div>
        <div class="col-12">
          <label for="batas_sks" class="form-label">Batas SKS</label>
          <input type="text" class="form-control" required value="{{ $variables["batas_sks"] }}" name="batas_sks" id="batas_sks">
        </div>
        <div class="col-12">
          <label for="jumlah_sks" class="form-label">Jumlah SKS Tempuh</label>
          <input type="text" class="form-control" required value="{{ $variables["jumlah_sks"] }}" name="jumlah_sks" id="jumlah_sks">
        </div>
        <br>
        <div class="col-12">
          <label for="matkul" class="form-label">Mata Kuliah</label>
          <input type="text" class="form-control" required value="{{ $variables["matkul"] }}" name="matkul" id="matkul">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    @else
      <form class="row g-3" action="/" method="POST">
          {{ csrf_field() }}
          <div class="col-md-6">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" required name="nama" id="nama">
          </div>
          <div class="col-md-6">
            <label for="nim" class="form-label">nim</label>
            <input type="tekt" class="form-control" required name="nim" id="nim">
          </div>
          <div class="col-12">
            <label for="ipk" class="form-label">IPK/IPS</label>
            <input type="text" class="form-control" required name="ipk" id="ipk">
          </div>
          <div class="col-12">
            <label for="doswal" class="form-label">Dosen Wali</label>
            <input type="text" class="form-control" required name="doswal" id="doswal">
          </div>
          <div class="col-12">
            <label for="batas_sks" class="form-label">Batas SKS</label>
            <input type="text" class="form-control" required name="batas_sks" id="batas_sks">
          </div>
          <div class="col-12">
            <label for="jumlah_sks" class="form-label">Jumlah SKS Tempuh</label>
            <input type="text" class="form-control" required name="jumlah_sks" id="jumlah_sks">
          </div>
          <br>
          <div class="col-12">
            <label for="matkul" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" required name="matkul" id="matkul">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
      </form>
    @endisset

</section>
@endsection