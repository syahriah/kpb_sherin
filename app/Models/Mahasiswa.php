<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswas";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'nim', 'ipk', 'dosen', 'batas_sks', 'jumlah_sks', 'matkul'];
}