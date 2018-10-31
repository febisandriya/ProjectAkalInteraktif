<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'order';

protected $fillable = [
  'id',
  'nama',
  'email',
  'nohp',
  'alamat',
  'product_id',
  'qty',
  'total',
 // 'invoice',
  'status',
];
  public function Product()  {
    return $this->HasOne('App\Product');
        }

}
