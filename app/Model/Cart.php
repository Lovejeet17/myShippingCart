<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\Model\Products', 'product_id');
    }
}
