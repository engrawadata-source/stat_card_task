<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['user_id' , 'price'];


    public function orders(){
        return $this->hasMany(Order::class , 'user_id'); 
    }
}
