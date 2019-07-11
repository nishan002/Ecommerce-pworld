<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table='subcategories';
    protected $fillable=[
        'id','category_id','sub_category_name','category_bangla_name','category_description','image'
    ];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
