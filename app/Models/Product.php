<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //* campos que podem ser salvos no banco
    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];
}
