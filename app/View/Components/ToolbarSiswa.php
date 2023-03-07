<?php

namespace App\View\Components;

use App\Models\Kelas;
use Illuminate\View\Component;

class ToolbarSiswa extends Component
{
    public function render()
    {
        $kelas = Kelas::all();
        return view('components.toolbar-siswa', [
            'kelas' => $kelas
        ]);
    }
}
