<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'size',
        'year',
        'image',
        'description',
        'link',
        'category',
        'technologies',
        'status'
    ];
}
