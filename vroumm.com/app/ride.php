<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ride extends Model
{
    //
    protected $guarded =[];

     public function user(){
   return $this->belongsTo(User::class,'userId');
}


public function booking(){
   return $this->hasMany(booking::class,'RideId');
}


}
