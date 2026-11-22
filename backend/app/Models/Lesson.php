<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function level(){
        return $this->belongsTo(Level::class); // dentro de belongsTo se pone la tabla que contiene la llave foranea
    }
    
}
