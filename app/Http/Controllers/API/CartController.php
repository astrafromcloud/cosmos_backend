<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(CartItem::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cartItem = $request->validate([
            'game_id' => 'nullable',
            'console_id' => 'nullable',
            'cart_id' => 'required',
            'quantity' => 'required',
        ]);

        CartItem::create($cartItem);

        return response()->json(['message' => 'Item added to cart', 'item' => $cartItem], 200);
    }


    /**
     * Display the specified resource.
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cartItem = CartItem::find($id);
        $cartItem -> delete();
        return response()->json(['message' => 'Item removed from cart', 'item' => $cartItem], 200);
    }

    public function destroyAll()
    {
        DB::table('cart_items')->delete();
//        CartItem::query()->delete();
        return response()->json(['message' => 'Item removed from cart'], 200);
    }


}
