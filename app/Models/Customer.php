<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date_of_birth',
        'phoneNumber',
        'nationality',
        'state',
        'address',
    ];

    /*
     * Define the inverse of the one-to-one relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
