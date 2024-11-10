<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
        ];

    public function vacancies()
    {
        return $this->belongsToMany(Vacancy::class, 'vacancy_category_assignments', 'vacancy_category_id', 'vacancy_id');
    }
}
