<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function user(){
        return $this->hasOne(User::class);
    }

    public function booking_room(){
        return $this->hasMany(Booking_room::class);
    }
    public function room(){
        return $this->hasOne(Room::class);
    }
    
}
