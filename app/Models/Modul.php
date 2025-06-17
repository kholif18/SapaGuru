<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $fillable = [
        'guru_id', 'judul', 'deskripsi', 'file_path',
        'kelas', 'jurusan', 'mapel'
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
