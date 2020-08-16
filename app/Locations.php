<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model {

    
    public  $fillable=  ['Latitude','Longitude','Flat_No:','Pincode','AddressType','country_id','city_id'];
    public function operators() {
        return $this->hasMany(Operator::class);
    }
    

}
