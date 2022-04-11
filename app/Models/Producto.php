<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'products';

    public function getCategory(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function getGallery(){
        return $this->hasMany(PGallery::class,'product_id','id');
    }
}
