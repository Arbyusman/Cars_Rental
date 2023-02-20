<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Capacity;

class Car extends Model
{
    use Notifiable;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'car_name',
        'rent_cost',
        'sizeCar_id',
        'created_by',
        'available',
        'availableAt',
        'updated_by',
        'deleted_by',
        'car_image',
    ];

    public function sizeCar()
    {
        return $this->hasOne(Capacity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function routeNotificationForMail()
    {
        return [
            $this->user->name,
            $this->user->email,
        ];
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
