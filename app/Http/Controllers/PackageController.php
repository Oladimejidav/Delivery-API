<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Agent;

use App\Models\Customer;


class PackageController extends Controller
{
    public function save_package()
    {
        // Create a new package record
        $package = Package::create([
            'trackingNumber' => '',
            'description' => '',
            'sender' => '',
            'recipient' => '',
            'customer_id' => 1,
            'weight' => '2 kg',
            'distance' => '',
            'dimensions' => '',
            'shipmentValue' => '',
            'shippingType' => '',
            'isAccepted' => ,
            'isShipped' => '',
            'shippingDate' => '',
            'deliveryDate' => '',
            'trackingHistory' => '',
            'imageUri' => ,
            'shippingCost' => '',
        ]);
    }


    public function get_package()
    {
        //
    }


    public function get_packages()
    {
        //
    }
}
