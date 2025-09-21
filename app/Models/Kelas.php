<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this -> hasMany (Siswa::class, 'kelas_id');
    }

    public function walas()
    {
        return $this -> hasOne(Walas::class, 'kelas_id');
    }
}
