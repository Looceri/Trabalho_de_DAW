<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongsTo(Province::class); // Assume que 'province_id' é a chave estrangeira na tabela 'districts'
    }
}
