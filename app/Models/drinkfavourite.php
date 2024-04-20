<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\drink\t_drink;


class drinkfavourite extends Model
{
    use HasFactory;
    protected $table = 'drinkfavourite';
    protected $guarded = [];
    public function reviews()
    {
        return $this->hasMany('App\Models\reviewrating', 'drink_id');
    }
    public function drink():BelongsTo 
    {
        return $this->belongsTo(t_drink::class, 'drink_id', 'id');
    }
}
