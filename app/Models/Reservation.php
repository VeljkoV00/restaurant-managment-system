<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'message',
        'number',
        'time',
        'num_guests',
        'user_id',
        'status'
    ];

    protected $hidden = [
        'status'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
