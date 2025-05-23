<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');

    }

    public function order () 
    {
       return $this->belongsTo (order::class,'order_id','id');
    }
}
