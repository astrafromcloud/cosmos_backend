<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Promotion\UpdateRequest;
use App\Http\Requests\User\LoginRequest;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\User\StoreRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return response('Created',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(User::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\User\UpdateRequest $request, string $id)
    {
        $user = User::find($id);
        $data = $request->validated();
        $user -> update($data);
        return response('Updated',201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return response('Deleted',201);
    }

    public function register(\App\Http\Requests\User\StoreRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('phone_number', 'password');

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('LaravelSanctumAuth')->plainTextToken;
            return response()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
