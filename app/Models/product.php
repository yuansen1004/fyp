<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=["name", "description", "price", "image", "quantity", "categoryID"];

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function myCart(){
        return $this->hasMany('App\Models\myCart');
    }

}
