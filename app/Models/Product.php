<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public function Product_Image(){
        return $this->hasMany('App\Models\ProductImage', 'product_id', 'product_id');
    }

    public function Product_cate(){
        return $this->hasOne('App\Models\Category','category_id','category_id');
    }
}
