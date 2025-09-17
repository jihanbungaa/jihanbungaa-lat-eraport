<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Walas; 

class Walas extends Model
{
    use HasFactory;
    protected $table = 'walas';
    protected $guarded = ['id'];
    protected $fillable = ['nig', 'password', 'nama_walas'];
    protected $hidden = ['password'];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function nilai(){
        return $this->hasOne(Nilai::class, 'walas_id');
    }
}
