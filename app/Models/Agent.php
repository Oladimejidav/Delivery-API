<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_table',
        'user_id',
        'date_of_birth',
        'phoneNumber',
        'nationality',
        'state',
        'address',
    ];
}
