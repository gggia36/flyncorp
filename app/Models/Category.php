<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public function Cate_Product(){
        return $this->hasOne('App\Models\Product', 'category_id', 'category_id');
    }
}
