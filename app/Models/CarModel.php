<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable =[
        'car_id', 'model_name'
    ];

    // a car model belongs to a car
    public function car()
    {
        return $this->belongsTo(Car::class); 
    }
}
