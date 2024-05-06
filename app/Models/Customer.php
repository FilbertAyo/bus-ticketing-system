<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'contacts'
    ];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

}
