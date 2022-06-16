<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Mahasiswa;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        return view('admin');
    }

    public function index2()
    {
        return view('detail');
    }

   
}
