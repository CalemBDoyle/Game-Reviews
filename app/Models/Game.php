<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'description',
        'year',
        'image',
        'created_at',
        'updated_at',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function developers()
    {
        return $this->belongsToMany(Developer::class);
    }
}
