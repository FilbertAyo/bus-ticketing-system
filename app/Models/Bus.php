<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'bus_number',
    ];

    public function routes()
    {
        return $this->hasMany(Route::class);
    }


}
