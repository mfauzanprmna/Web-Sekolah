<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bgcontent extends Model
{
    use HasFactory;

    protected $table = 'bgcontents';

    protected $fillable = [
        'title',
        'subtitle',
        'conten',
    ];
}
