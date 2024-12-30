<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', // Thêm trường name
        'price',
        'description',
        'unit',
        'image',
    ];



    protected $table = "products";

    public function product_type(){
        return $this->belongsTo('App\ProductType', 'id_type', 'id');
    }

    public function bill_detail(){
        return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }
}
