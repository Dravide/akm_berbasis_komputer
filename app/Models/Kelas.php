<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'tingkat',
        'kelas',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}
