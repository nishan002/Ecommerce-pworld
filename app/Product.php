<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=[
        'id','category_id','subcategory_id','product_name','product_name_bangla','unit_meassure_id','description'
    ];

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function subcategory(){
        return $this->belongsTo('App\Subcategory','subcategory_id');
    }
    public function meassure(){
        return $this->belongsTo('App\Meassure','unit_meassure_id');
    }
}
