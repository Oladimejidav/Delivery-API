<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    
    // Fillable array
    protected $fillable = [
        'user_id',
        'date_of_birth',
        'phoneNumber',
        'pasport',
        'personal_id',
        'nationality',
        'state',
        'address',
        'guarantor_phoneNumber',
        'guarantor_pasport',
        'guarantor_personal_id',
        'guarantor_nationality',
        'guarantor_state',
        'guarantor_address',
        'agent_role',
    ];
}
