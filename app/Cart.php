<?php

namespace App;

class Cart
{
  public $items             = [];
  public $totalQty          = 0;
  public $totalPrice        = 0;
  public $totalDiscPrice    = 0;

  public function __construct(Cart $oldCart = null)
  {
    if ($oldCart) {
      $this->items          = $oldCart->items;
      $this->totalQty       = $oldCart->totalQty;
      $this->totalPrice     = $oldCart->totalPrice;
      $this->totalDiscPrice = $oldCart->totalDiscPrice;
    }
  }

  public function add($item, $id, $qty = null)
  {
    if(!is_null($qty) && $qty == 0) {
      unset($this->items[$id]);
      return;
    };

    $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
    if ($this->items) {
      if (array_key_exists($id, $this->items)) {
        $storedItem = $this->items[$id];
        // print_r($storedItem);
      }
    }
    $storedItem['qty']++;
    $storedItem['price']      = $item->price * $storedItem['qty'];
    $storedItem['discPrice']  = $item['discPrice'] * $storedItem['qty'];
    $this->items[$id]         = $storedItem;
    $this->totalQty++;
    $this->totalPrice        += $item->price;
    $this->totalDiscPrice    += $item->discPrice;
  }

  public function toJson()
  {
    $json = clone $this;
    
    $json->items = array_values($this->items);
    return $json;
  }
}
