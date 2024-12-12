<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Game;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::with('games')->get();
        return view('developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->route('games.index')->with('error', 'Access denied.');
        }

        $games = Game::all();
        return view('developers.create', compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->role != 'admin') {
            return redirect()->route('developers.index')->with('error', 'Access denied.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:1000',
            'games' => 'array',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/developers'), $imageName);
            $validated['image'] = $imageName;
        }

        $developer = Developer::create($validated);

        if ($request->has('games')) {
            $developer->games()->attach($request->games);
        }

        return redirect()->route('developers.index')->with('success', 'Developer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        $developer->load('games');
        return view('developers.show', compact('developer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        $games = Game::all();
        $developerGames = $developer->games->pluck('id')->toArray();
        return view('developers.edit', compact('developer', 'games', 'developerGames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developer $developer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:1000',
            'games' => 'array',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/developers'), $imageName);
            $validated['image'] = $imageName;
        }

        $developer->update($validated);

        if ($request->has('games')) {
            $developer->games()->sync($request->games);
        }

        return redirect()->route('developers.index')->with('success', 'Developer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developer $developer)
    {
        $developer->games()->detach();
        $developer->delete();

        return redirect()->route('developers.index')->with('success', 'Developer deleted successfully.');
    }
}
