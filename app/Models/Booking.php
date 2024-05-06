<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'fullName',
        'contact',
        'contact_id',
        'source',
        'destination',
        'busNumber',
        'seat',
        'amount',
        'departureDate',
        'departureTime',
        'booked'
    ];

    public function customers(){

        return $this->belongsTo(Customer::class);
    }
}
