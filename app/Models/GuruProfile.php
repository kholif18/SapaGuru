<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruProfile extends Model
{
    protected $fillable = [
        'user_id', 'nip', 'jenjang_pendidikan', 
        'jurusan', 'alamat', 'no_telp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
