<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchStock extends Model
{
    public function chain_store(){
      return $this->belongsTo('App\ChainStore','chain_store_id');
    }


}
