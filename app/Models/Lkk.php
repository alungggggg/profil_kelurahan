<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lkk extends Model
{
    use HasFactory;
    public $table = "lkk";

    protected $fillable = [
        'nama_lembaga',
        'logo',
        'description',
        'role_id'
    ];
}
