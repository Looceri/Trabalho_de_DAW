<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_locations', 'location_id', 'user_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class); // Assume que 'district_id' é a chave estrangeira na tabela 'locations'
    }
}
