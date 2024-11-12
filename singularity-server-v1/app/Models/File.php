<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'path',
        'extension',
        'size',
        'mime_type',
        'user_id',
        'vacancy_id',
    ];

    /**
     * Get the URL for the stored file.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return Storage::url($this->path . '.' . $this->extension);

    }

    /**
     * Define a relationship to the user who uploaded the file.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
