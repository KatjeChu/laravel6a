<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'price' , 
        'image',
        'image_name'
       ];
}
