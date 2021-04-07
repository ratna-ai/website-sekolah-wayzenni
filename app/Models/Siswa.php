<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['nis','nama','alamat','gender','tgl_lahir','email','jurusan'];
}
