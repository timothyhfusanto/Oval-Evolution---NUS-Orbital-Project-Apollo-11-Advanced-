<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\food\t_food;

class favourite extends Model
{
    protected $table = 'favourite';
    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany('App\Models\reviewrating', 'food_id');
    }
    public function food():BelongsTo 
    {
        return $this->belongsTo(t_food::class, 'food_id', 'id');
    }
}
