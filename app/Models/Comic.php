<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //only for REQUIRED data
    protected $fillable = [
        'title',
        'thumb',
        'price',
        'series',
        'type'
    ];
}
