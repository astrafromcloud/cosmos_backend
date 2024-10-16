<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Console\StoreRequest;
use App\Http\Requests\Console\UpdateRequest;
use App\Models\Console;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Console::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Console::create($data);
        return response('Created',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Console::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $city = Console::find($id);
        $data = $request->validated();
        $city -> update($data);
        return response('Updated',201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = Console::find($id);
        $city->delete();
        return response('Deleted',201);
    }
}
