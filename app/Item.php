<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $table='item';
    protected $primaryKey='id';
    protected $fillable=['foodtype_id','f_name','price','veg_nonveg','status'];

    public function foodtype(){
        return $this->belongsTo(Foodtype::class,'foodtype_id','id');
    }
}
