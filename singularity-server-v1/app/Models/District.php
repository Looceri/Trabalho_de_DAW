<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'province_id'];

    public function province()
    {
        return $this->belongsTo(Province::class); // Assume que 'province_id' é a chave estrangeira na tabela 'districts'
    }

    // Relacionamento com as localizações
    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    // Relacionamento com os usuários (donos)
    public function users()
    {
        return $this->hasManyThrough(User::class, Location::class);
    }

    // Relacionamento com as vagas de emprego
    public function vacancies()
    {
        return $this->hasManyThrough(Vacancy::class, Location::class);
    }
}
