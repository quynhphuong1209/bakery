<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }


    public function add($items,$id){
        $giohang = ['qty'=>0, 'price' => $items->unit_price, 'items' => $items];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }

        $giohang['qty']++;
        $giohang['price']=$items->unit_price * $giohang['qty'];
        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += $items->unit_price;
    }

    //Reduce by one
    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -=$this->items[$id]['items']['price'];
        $this->totalQty--;
        $this->totalPrice -=$this->items[$id]['item']['price'];
        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }

    //Remove Item
    public function removeItem($id){
        $this->totalQty -=$this->items[$id]['qty'];
        $this->totalPrice -=$this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
