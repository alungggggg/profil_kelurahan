<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
