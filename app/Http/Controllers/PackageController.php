<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Agent;

use App\Models\Customer;


class PackageController extends Controller
{
    public function save_package(Request $request)
    {

        $new_package = new Package();
        $new_package->fill($request->all());

        // TO SAVE THE IMAGE
        $image = $request->imageUri;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->imageUri->move('imageUriFolder', $imagename);
        $new_package->imageUri = $imagename;

        $new_package->save();
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
