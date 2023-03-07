<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::Paginate(5);
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'tingkat' => 'required',
            'kelas' => 'required',
        ]);
        Kelas::create($credentials);
        return redirect()->route('kelas.index');
    }

    public function show(Kelas $kelas)
    {
    }

    public function edit(Kelas $kelas)
    {
    }

    public function update(Request $request, Kelas $kelas)
    {
    }

    public function destroy(Kelas $kelas)
    {
    }
}
