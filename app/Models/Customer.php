<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function bill_detail(){
        return $this->hasMany('App\BillDetail', 'id_customer', 'id');
    }

    public function bill(){
        return $this->belongsTo('App\Customer', 'id_customer', 'id');
    }
}
