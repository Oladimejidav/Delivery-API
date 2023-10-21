<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Customer update
    public function updateUser(Request $request)
    {
        $user = User::find($request->id);

        if (! $user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Remove whitespace from the input values
        $name = trim($request->input('name'));
        $dateOfBirth = trim($request->input('date_of_birth'));
        $phoneNumber = trim($request->input('phoneNumber'));
        $nationality = trim($request->input('nationality'));
        $state = trim($request->input('state'));
        $address = trim($request->input('address'));

        // Update the user attributes
        $user->name = $name;
        $user->date_of_birth = $dateOfBirth;
        $user->phoneNumber = $phoneNumber;
        $user->nationality = $nationality;
        $user->state = $state;
        $user->address = $address;

        $user->save();

        return response()->json(['message' => 'User updated successfully'], 200);
    }


    // Password update
    public function updatePassword(Request $request)
    {
        $user = User::findOrFail($request->id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->email = trim($request->input('email'));
        $user->oldPassword = trim($request->input('old_password'));
        $user->password = trim($request->input('password'));
        $user->password_confirmation = trim($request->input('password_confirmation'));

        $user->update();

        return response()->json(['message' => 'Password updated successfully'], 200);
    }
}
