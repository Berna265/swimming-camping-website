<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function create() {
        return view('places.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'contact' => 'required|string|max:255',
        ]);

        Place::create($request->all());

        return redirect()->route('places.create')->with('success', 'Place added successfully!');
    }
}
