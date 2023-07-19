<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ResponseTrait;

class AuthController extends Controller
{
    use ResponseTrait;

    // registration methods
    public function CustomerRegistration(Request $request)
    {
        
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $customerRegistered = Customer::create([
            'user_id' => $user->id,
            'date_of_birth' => $fields['date_of_birth'],
            'phoneNumber' => $fields['phoneNumber'],
            'nationality' => $fields['nationality'],
            'state' => $fields['state'],
            'address' => $fields['address']
        ]);

        $customer = User::where('id', $user->id)
        ->join('customers', 'users.id', $customerRegistered->users_id)
        ->select('users.*', 'customers.*');

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Customer registration was successful!',
            'user' => $customer,
            'token' => $token
        ];

        // Call the success() method from ResponseTrait and pass the $response data
        return $this->success($response, 201);
    }

    public function AgentRegistration(Request $request)
    {
        
    }

    // login methods
    public function CustomerLogin(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        // Check email
        $user = Customer::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function AgentLogin(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        // Check email
        $user = Agent::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
