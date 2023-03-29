<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'founded','description','file'
    ];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    // define a has many through relationship
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class, 
            CarModel::class, 
            'car_id', //Foreign key on CarModel table
            'model_id' //Foreign key on Engine table
        );
    }
}
