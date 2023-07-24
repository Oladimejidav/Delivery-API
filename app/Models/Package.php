<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'trackingNumber',
        'description',
        'sender',
        'recipient',
        'customer_id',
        'weight',
        'distance',
        'dimensions',
        'shipmentValue',
        'shippingType',
        'isAccepted',
        'isShipped',
        'shippingDate',
        'deliveryDate',
        'trackingHistory',
        'imageUri',
        'shippingCost',
    ];




}
