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
        // 'bus_id',
        'busNo',
        'departure_date',
        'departure_time',
        'amount'
    ];

    public function bus()
{
    return $this->belongsTo(Bus::class);
}


}
