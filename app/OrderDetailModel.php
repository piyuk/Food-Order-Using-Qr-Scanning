<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    protected $table="order_details";
      protected $fillable=['order_id','number','table','product_name','product_price','qty'];
}
