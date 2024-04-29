<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'time',
        'complaints',
        'phone_number'
    ];
    public function routeNotificationForNigeriabulksms($notification)
    {
        return $this->phone_number;
    }
}
