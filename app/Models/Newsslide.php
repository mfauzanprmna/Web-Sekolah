<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsslide extends Model
{
    use HasFactory;

    protected $table = 'newsslides';

    protected $fillable = [
        'title',
        'content',
    ];
}
