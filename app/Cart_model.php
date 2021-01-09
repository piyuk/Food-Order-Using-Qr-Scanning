<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_model extends Model
{
     protected $table='cart';
    protected $primaryKey='id';
    protected $fillable=['f_id','number','table','f_name','veg_nonveg','price','quantity'];
}
