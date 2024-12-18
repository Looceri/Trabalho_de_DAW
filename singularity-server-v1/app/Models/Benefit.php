<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $table = 'benefits';

    protected $fillable = ['vacancy_id', 'benefit'];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
