<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_Has_Product extends Model
{
    use SoftDeletes;

    protected $table = 'category_has_product';
    protected $primaryKey = 'category_has_product_id';


}
