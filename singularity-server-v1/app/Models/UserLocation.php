<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'location_id'
    ];

    /**
     * Relacionamento com o modelo Location.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
