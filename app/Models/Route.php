<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable=[
        'from_city',
        'to_city',
        'bus_number_id',
        'departure_date',
        'departure_time'
    ];

public function busNumber(){
    return $this->belongsTo(Bus::class);
}

}
