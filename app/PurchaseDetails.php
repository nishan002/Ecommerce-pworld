<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
  protected $table ='purchase_details';

  public function purchase(){
    return $this->belongsTo('App\Purchase','purchase_id');
  }

  public function product(){
    return $this->belongsTo('App\Product');
  }

  public function meassure(){
    return $this->belongsTo('App\Meassure','unit_meassure_id');
  }

}
