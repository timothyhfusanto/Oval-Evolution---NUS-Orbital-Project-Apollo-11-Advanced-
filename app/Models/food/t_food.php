<?php

namespace App\Models\food;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_food extends Model
{
    use HasFactory;
    protected $table = 't_food';
    protected $guarded = [];
    public function reviews()
    {
        return $this->hasMany('App\Models\reviewrating', 'food_id');
    }
   
}
