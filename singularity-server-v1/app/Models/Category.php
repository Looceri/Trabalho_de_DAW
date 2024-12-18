<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function vacancies()
    {
        return $this->belongsToMany(Vacancy::class, 'vacancy_category_assignments', 'vacancy_category_id', 'vacancy_id');
    }
}
