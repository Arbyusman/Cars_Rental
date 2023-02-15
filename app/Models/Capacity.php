<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Capacity extends Model
{
    use HasFactory; 

    public function carCapacity()
    {
        return $this->hasMany(Car::class);
    }
}
