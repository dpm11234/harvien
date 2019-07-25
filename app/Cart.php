<?php

namespace App;

use Product;

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

  public function add($item, $id)
  {
    $storedItem = [
      'qty'   => 0,
      'price' => $item->price,
      'item'  => $item
    ];
    if ($this->items && array_key_exists($id, $this->items)) {
      $this->items[$id]['item'] = $item;
      $storedItem = $this->items[$id];
    }
    $storedItem['qty']++;
    $storedItem['price']      = $item->price * $storedItem['qty'];
    $storedItem['discPrice']  = $item['discPrice'] * $storedItem['qty'];
    $this->items[$id]         = $storedItem;
    $this->totalQty++;
    $this->totalPrice        += $item['price'];
    $this->totalDiscPrice    += $item['discPrice'];
  }

  /**
   * Update without calculate the price...
   */

  public function update($item, $id, int $quantity)
  {
    if ($quantity == 0) return;
    $storedItem = [
      'qty'       => $quantity,
      'price'     => $item->price * $quantity,
      'discPrice' => $item->discPrice * $quantity,
      'item'      => $item,
    ];

    if ($this->items && array_key_exists($id, $this->items)) {
      $item = $this->items[$id];
      $this->totalQty        -= $item['qty'];
      $this->totalPrice      -= $item['price'];
      $this->totalDiscPrice  -= $item['discPrice'];
    }
    $this->items[$id] = $storedItem;
    $this->totalQty += $storedItem['qty'];
    $this->totalPrice += $storedItem['price'];
    $this->totalDiscPrice += $storedItem['discPrice'];
  }

  public function remove(int $id)
  {
    if ($this->items && array_key_exists($id, $this->items)) {
      $item = $this->items[$id];
      $this->totalQty       -= $item['qty'];
      $this->totalPrice     -= $item['price'];
      $this->totalDiscPrice -= $item['discPrice'];
      unset($this->items[$id]);
    }
  }

  public function toJson()
  {
    $json = clone $this;

    $json->items = array_values($this->items);
    return $json;
  }
}
