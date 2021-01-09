<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_model extends Model
{
     protected $table='orders';
    protected $primaryKey='id';
    protected $fillable=['number','table','coupon_code','coupon_amount','order_status','payment_method','grand_total'];
}
