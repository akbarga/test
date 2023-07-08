<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'namatokoh',
        'image',
        'orientasi',
        'peristiwapenting',
        'riorientasi'

    ];
}
