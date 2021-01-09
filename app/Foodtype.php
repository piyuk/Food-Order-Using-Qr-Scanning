<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodtype extends Model
{
      protected $table='foodtype';
    protected $primaryKey='id';
    protected $fillable=['name','status'];
 	public function food()
    {
    	return $this->belongsTo(Item::class);
    }
}
