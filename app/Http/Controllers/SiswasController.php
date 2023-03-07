<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::select('id', 'nama_kelas')->count();

        return view('siswas.index', [
            'siswas' => Siswa::paginate(10),
            'kelas' => $kelas
        ]);
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'kelas_id' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $siswa = new Siswa();
        $siswa->nama = $credentials['nama'];
        $siswa->nis = $credentials['nis'];
        $siswa->kelas_id = $credentials['kelas_id'];
        $siswa->save();

        $user = new User();
        $user->name = $credentials['nama'];
        $user->nis = $credentials['nis'];
        $user->password = bcrypt($credentials['password']);
        $user->save();

        return redirect()->route('siswa.index')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function show(Siswa $siswa)
    {
    }

    public function edit(Siswa $siswa)
    {
    }

    public function update(Request $request, Siswa $siswa)
    {
    }

    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        User::destroy($siswa->id);
        return redirect()->route('siswa.index');
    }

    public function import()
    {
        return view('siswas.import');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kelas = Kelas::select('id', 'nama_kelas')->count();
        $siswas = Siswa::where('nama', 'like', "%" . $cari . "%")->paginate(10);
        return view('siswas.index', ['siswas' => $siswas,
            'kelas' => $kelas]);
    }
}
