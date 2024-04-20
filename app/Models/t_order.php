<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderitems;
class t_order extends Model
{
    protected $table = 't_order';
    protected $guarded = [];

    public function orderitems() {
        return $this->hasMany(orderitems::class, 'order_id');
    }
}
