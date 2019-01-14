<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'description', 'note', 'link'];

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class);
    }
}
