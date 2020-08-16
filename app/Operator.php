<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Locations;
use App\User;
class Operator extends Model {

    public $fillable = ['FullName', 'Phone', 'location_id', 'user_id'];
    public function user() {
       return $this->belongsTo(User::class,'user_id');
    }
    public function location() {
        return $this->belongsTo(Locations::class,'location_id');
    }
}
