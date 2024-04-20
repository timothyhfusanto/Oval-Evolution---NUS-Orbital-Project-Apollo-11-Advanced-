<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\food\t_food;
use App\Models\drink\t_drink;


class orderitems extends Model
{
    protected $table = 'orderitems';
    protected $guarded = [];
    
    public function food():BelongsTo 
    {
        return $this->belongsTo(t_food::class, 'food_id', 'id');
    }
    public function drink():BelongsTo 
    {
        return $this->belongsTo(t_drink::class, 'drink_id', 'id');
    }
}
