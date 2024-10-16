<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\StoreRequest;
use App\Http\Requests\Game\UpdateRequest;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $genre = $request->get('genre_id');

        if ($genre) {
            $games = Game::with('genre')->where('genre_id', $genre)->get();
        } else {
            $games = Game::all();
        }

        return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Game::create($data);
        return response('Created',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Game::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $city = Game::find($id);
        $data = $request->validated();
        $city -> update($data);
        return response('Updated',201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = Game::find($id);
        $city->delete();
        return response('Deleted',201);
    }

    public function search(string $id) {
        $genre = Genre::find($id);
        return response()->json();
    }

}
