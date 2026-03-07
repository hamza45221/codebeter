<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'company',
        'rating',
        'review_text',
        'image',
        'status',
        'featured'
    ];
}
