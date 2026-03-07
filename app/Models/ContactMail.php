<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'client_want',
        'project_detail',
        'status',
        'processed_at'
    ];
}
