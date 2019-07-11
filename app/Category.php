<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=[
        'id','category_name','category_bangla_name','image','category_description'
    ];
}
