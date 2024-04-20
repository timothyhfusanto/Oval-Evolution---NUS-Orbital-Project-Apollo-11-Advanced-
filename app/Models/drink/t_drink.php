<?php

namespace App\Models\drink;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_drink extends Model
{
    protected $table = 't_drink';
    protected $guarded = [];
    public function reviews()
    {
        return $this->hasMany('App\Models\reviewrating', 'drink_id');
    }
}

