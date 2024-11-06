<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'submission_start_date',
        'submission_end_date',
        'vacancies_count',
        'description',
        'requirements',
    ];
}
