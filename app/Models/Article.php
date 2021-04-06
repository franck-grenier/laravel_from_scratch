<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const validation = [
        'title'     => 'required',
        'excerpt'   => 'required',
        'body'      => 'required'
    ];

    protected $fillable = ['title', 'excerpt', 'body'];
}
