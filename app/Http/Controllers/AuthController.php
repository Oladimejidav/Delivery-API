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
            'date_of_birth' => $request->date_of_birth,
            'phoneNumber' => $request->phoneNumber,
            'nationality' => $request->nationality,
            'state' => $request->state,
            'address' => $request->address
        ]);
        // Retrieve the user data with the specified user_id
        $customer = User::with('customer')->find($user->id);
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Customer registration was successful!',
            'customer' => [
                'id' => $customer->id,
                'customer_id' => $customer->customer->id,
                'name' => $customer->name,
                'email' => $customer->email,
                'date_of_birth' => $customer->customer->date_of_birth,
                'phoneNumber' => $customer->customer->phoneNumber,
                'nationality' => $customer->customer->nationality,
                'state' => $customer->customer->state,
                'address' => $customer->customer->address,
                'created_at' => $customer->customer->created_at,
                'updated_at' => $customer->customer->updated_at,
            ],
            'token' => $token
        ];

        // Call the success() method from ResponseTrait and pass the $response data
        return $this->success($response, 201);
    }
    
    public function AgentRegistration(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'role' => 1,
            'password' => bcrypt($fields['password'])
        ]);

        $agentRegistered = Agent::create([
            'user_id' => $user->id,
            'date_of_birth' => $request->date_of_birth,
            'phoneNumber' => $request->phoneNumber,
            'pasport' => $request->pasport,
            'personal_id' => $request->personal_id,
            'nationality' => $request->nationality,
            'state' => $request->state,
            'address' => $request->address,
            'guarantor_phoneNumber' => $request->guarantor_phoneNumber,
            'guarantor_pasport' => $request->guarantor_pasport,
            'guarantor_personal_id' => $request->guarantor_personal_id,
            'guarantor_nationality' => $request->guarantor_nationality,
            'guarantor_state' => $request->guarantor_state,
            'guarantor_address' => $request->guarantor_address,
            'agent_role' => $request->agent_role
        ]);

        // Eager load the agent details along with the user information
        $agent = User::with('agent')->find($user->id);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Agent registration was successful!',
            'agent' => [
                'id' => $agent->id,
                'agent_id' => $agent->agent->user_id,
                'name' => $agent->name,
                'email' => $agent->email,
                'agent_role' => intval($agent->agent->agent_role),
                'date_of_birth' => $agent->agent->date_of_birth,
                'phoneNumber' => $agent->agent->phoneNumber,
                'pasport' => $agent->agent->pasport,
                'personal_id' => $agent->agent->personal_id,
                'nationality' => $agent->agent->nationality,
                'state' => $agent->agent->state,
                'address' => $agent->agent->address,
                'guarantor_phoneNumber' => $agent->agent->guarantor_phoneNumber,
                'guarantor_pasport' => $agent->agent->guarantor_pasport,
                'guarantor_personal_id' => $agent->agent->guarantor_personal_id,
                'guarantor_nationality' => $agent->agent->guarantor_nationality,
                'guarantor_state' => $agent->agent->guarantor_state,
                'guarantor_address' => $agent->agent->guarantor_address,
                'created_at' => $agent->agent->created_at,
                'updated_at' => $agent->agent->updated_at,
            ],
            'token' => $token
        ];

        // Call the success() method from ResponseTrait and pass the $response data
        return $this->success($response, 201);
    }

    // login methods
    public function CustomerLogin(Request $request)
    {

        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Credentials not found in our record'
            ], 401);
        }

        // Retrieve the user data with the specified user_id
        $customer = User::with('customer')->find($user->id);
        $token = $user->createToken('myapptoken')->plainTextToken;
        
        $response = [
            'message' => 'Customer login is successful!',
            'user' => [
                'id' => $customer->id,
                'customer_id' => $customer->customer->id,
                'name' => $customer->name,
                'email' => $customer->email,
                'email_verified_at' => $customer->email_verified_at,
                'date_of_birth' => $customer->customer->date_of_birth,
                'phoneNumber' => $customer->customer->phoneNumber,
                'nationality' => $customer->customer->nationality,
                'state' => $customer->customer->state,
                'address' => $customer->customer->address,
                'created_at' => $customer->customer->created_at,
                'updated_at' => $customer->customer->updated_at,
            ],
            'token' => $token
        ];

        return response($response, 201);
    }

    public function AgentLogin(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Credentials not found in our record'
            ], 401);
        }

        // Eager load the agent details along with the user information
        $agent = User::with('agent')->find($user->id);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Agent login is successful!',
            'user' => [
                'id' => $agent->id,
                'agent_id' => $agent->agent->user_id,
                'name' => $agent->name,
                'email' => $agent->email,
                'email_verified_at' => $agent->email_verified_at,
                'role' => $agent->role,
                'date_of_birth' => $agent->agent->date_of_birth,
                'phoneNumber' => $agent->agent->phoneNumber,
                'pasport' => $agent->agent->pasport,
                'personal_id' => $agent->agent->personal_id,
                'nationality' => $agent->agent->nationality,
                'state' => $agent->agent->state,
                'address' => $agent->agent->address,
                'guarantor_phoneNumber' => $agent->agent->guarantor_phoneNumber,
                'guarantor_pasport' => $agent->agent->guarantor_pasport,
                'guarantor_personal_id' => $agent->agent->guarantor_personal_id,
                'guarantor_nationality' => $agent->agent->guarantor_nationality,
                'guarantor_state' => $agent->agent->guarantor_state,
                'guarantor_address' => $agent->agent->guarantor_address,
                'agent_role' => $agent->agent->agent_role,
                'created_at' => $agent->agent->created_at,
                'updated_at' => $agent->agent->updated_at,
            ],
            'token' => $token
        ];

        return response($response, 201);
    }
    public function Logout(Request $request)
    {}
}
