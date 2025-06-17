<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaProfile extends Model
{
    protected $fillable = [
        'user_id', 'nis', 'nisn', 'kelas', 'jurusan',
        'alamat', 'no_telp', 'nama_ortu', 'no_telp_ortu'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
