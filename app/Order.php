<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderItem;
use App\Operator;

class Order extends Model {
    public  $fillable = ['order_id','order_status','order_distance','order_start_date','order_EST_DEL_DT','operator_id'];
 
    
    public function operator() {
        return $this->belongsTo(Operator::class);
    }
    
}
