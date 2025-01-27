<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function insurance(){
        return $this->hasOne(Insurance::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'car_id', 'id');
    }
}
