<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Capacity;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'car_name',
        'rent_cost',
        'sizeCar_id',
        'created_by',
        'updated_by',
        'deleted_by',
        'car_image',
    ];

    public function sizeCar()
    {
        return $this->hasOne(Capacity::class);
    }


    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
    public function UpdatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}