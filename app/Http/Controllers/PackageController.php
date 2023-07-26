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
        $new_package->customer_id = auth()->user()->id;

        // TO SAVE THE IMAGE
        $image = $request->imageUri;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->imageUri->move('imageUriFolder', $imagename);
        $new_package->imageUri = $imagename;

        $new_package->save();

        return $new_package;
    }



    public function agent_save_package(Request $request)
    {

        $new_package = new Package();
        $new_package->fill($request->all());
        $new_package->customer_id = auth()->user()->id;

        // TO SAVE THE IMAGE
        $image = $request->imageUri;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->imageUri->move('imageUriFolder', $imagename);
        $new_package->imageUri = $imagename;

        $new_package->save();
    }




    public function get_package($id)
    {
        // users get their package alone
        $package = Package::find($id);
        $data=[];

        if (auth()->user()->role == 0) {
            if ($package->customer_id == auth()->user()->id) {
                $data= $package;
            } else {
                $data= [];
            }
        } else {
            $data= $package;
        }

        // Optionally, you can check if the item exists before proceeding.
        if (!$package) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        // You can now use the $package object or return it as a response.
        return response()->json($data);

    }


    public function get_packages()
    {
        $package = Package::all();

        if (auth()->user()->role == 0) {
            $package = $package->where('customer_id', auth()->user()->id);
        } else {
            return $package;
        }

        return response()->json($package);
    }

    public function update_isShipped(Request $request)
    {
        if (auth()->user()->role == 0) abort(403);
        $package = Package::find($request->id);
        $package->isShipped = $request->isShipped;
        $package->update();
    }

    public function update_isAccepted(Request $request)
    {
        if (auth()->user()->role == 0) abort(403);
        $package = Package::find($request->id);
        $package->isAccepted = $request->isAccepted;
        $package->update();
    }



    public function delete_package($id)
    {
        $package = Package::find($id);

        // Optionally, you can check if the item exists before attempting to delete it.
        if (!$package) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $package->delete();

        // Optionally, you can return a response or redirect to a different page.
        // For example:
        return response()->json(['message' => 'Item deleted successfully']);
    }
}
