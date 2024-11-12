<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function locations()
    {
        return $this->hasToMany(Location::class, 'user_locations', 'user_id', 'location_id');
    }

    public function educations()
    {
        return $this->hasMany(UserEducation::class);
    }

    public function avatar_image()
    {
        return $this->hasOne(File::class,'id','avatar_id');
    }


    // Relacionamento com as localizações
    public function locationss()
    {
        return $this->hasManyThrough(Location::class, District::class);
    }

    // Relacionamento com as vagas de emprego
    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'owner_id');
    }
}
