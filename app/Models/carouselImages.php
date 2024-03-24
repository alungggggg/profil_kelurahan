<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carouselImages extends Model
{
    use HasFactory;
    public $table = "carousel_image";

    protected $fillable = [
        'image',
    ];
}
