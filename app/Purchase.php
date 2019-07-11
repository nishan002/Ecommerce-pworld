<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $table ='purchases';
  protected $fillable = ['supplier_id','voucher_no','total_bill','bill_paid','image','description'];

  public function supplier(){
    return $this->belongsTo('App\Supplier','supplier_id');
  }

  public function photo(){
    return $this->belongsTo('App\Photo','image');
  }
}
