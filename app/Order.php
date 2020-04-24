<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  
    protected $fillable=['customerId','employeeId','date'];
    public function tickets(){
      return $this->hasMany('App\Ticket');
  }


  public function customer(){
    return  $this->belongsTo('App\Customer');
  }

}
