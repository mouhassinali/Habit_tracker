<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitude;

class HabitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        return view('user.add-habit', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $habit = Habitude::create([
            'nom' => $validated['name'],
            'categorie' =>$validated['category'],
            'user_id' => auth()->id()
        ]);

        $id = $habit->id;

        return redirect()->route('user.habits')->with('success', 'Habitude créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $habit = Habitude::findOrFail($id);
        $user = $request->user();
        return view('user.edit-habit', compact('habit','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $habit = Habitude::findOrFail($id);
        $validated = $request->validate([
            'name' => ['string', 'max:255'],
            'category' => ['string']
        ]);

        $habit->update([
           'nom' => $validated['name'],
           'categorie' => $validated['category']
        ]);
        
        return redirect()->route('user.habits')->with('success', 'Habitude modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $habit = Habitude::findOrFail($id);
        $habit->delete();
        
        return redirect()->route('user.habits')->with('success', 'Habitude supprimée avec succès');
    }
}
