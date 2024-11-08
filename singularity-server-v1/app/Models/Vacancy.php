<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'title',
        'salary',
        'submission_start_date',
        'submission_end_date',
        'vacancies_count',
        'description',
        'requirements'
    ];

    // Relacionamento com o usuário (owner)
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }

    public function categories()
    {
        return $this->belongsToMany(VacancyCategory::class, 'vacancy_category_assignments', 'vacancy_id', 'vacancy_category_id');
    }
}
