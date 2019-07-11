<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meassure extends Model
{
    protected $table ='meassures';
    protected $fillable=[
        'id','meassure_name'
    ];
}
