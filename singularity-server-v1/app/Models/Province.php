<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    protected $fillable = ['name'];

    // Relacionamento com os distritos
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
