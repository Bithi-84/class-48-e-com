<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function subCategory()

    {
          return $this->hasMany(SubCategory::class, 'cat_id', 'id');
    }

       public function product()
       {
         return $this->hasMany(product::class,'cat_id','id');
       }
    
}

