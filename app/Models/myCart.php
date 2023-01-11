<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    use HasFactory;
    protected $fillable=["productID", "quantity", "userID", "dateAdd", "orderID"];

    public function product(){
        return $this->hasMany('App\Models\product');
    }

}
