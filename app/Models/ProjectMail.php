<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMail extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'address',
        'phone_number',
        'project_name',
        'services',
        'estimated_budget',
        'project_desc',
        'upload_pro_detail',
        'status',
        'processed_at'
    ];
}
