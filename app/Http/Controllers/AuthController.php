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
        $customer = User::find($user->id);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'Customer registration was successful!',
            'user' => $customer,
            'token' => $token
        ];

        // Call the success() method from ResponseTrait and pass the $response data
        return $this->success($response,  201);
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

        $agent = User::where('id', $user->id)
            ->join('agents', 'users.id', $agentRegistered->user_id)
            ->select('users.*', 'agents.*');

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'agent registration was successful!',
            'user' => $agent,
            'token' => $token
        ];

        // Call the success() method from ResponseTrait and pass the $response data
        return $this->success($response, 201);
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
        if (!$user || !Hash::check($fields['password'], $user->password)) {
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
        if (!$user || !Hash::check($fields['password'], $user->password)) {
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
    public function Logout(Request $request)
    {}
}
