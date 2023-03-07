<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class HomeController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all()->count();
        return view('home')->with(compact('siswa'));
    }
}
