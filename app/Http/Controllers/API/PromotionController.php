<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promotion\StoreRequest;
use App\Http\Requests\Promotion\UpdateRequest;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Promotion::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Promotion::create($data);
        return response('Created', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Promotion::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $city = Promotion::find($id);
        $data = $request->validated();
        $city->update($data);
        return response('Updated', 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = Promotion::find($id);
        $city->delete();
        return response('Deleted', 201);
    }

    public function isValid(Request $request)
    {
        $code = $request->get('code');

        $promotion = Promotion::where('code', $code)->first();

        if ($promotion) {
            return 1;
        }
        return 0;
    }
}
