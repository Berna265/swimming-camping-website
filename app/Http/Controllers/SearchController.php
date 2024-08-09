<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class SearchController extends Controller
{
    public function search(Request $request) 
    {
        $query = $request->input('search');

        $results = Place::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->orWhere('location', 'LIKE', "%{$query}%")
                            ->orWhere('contact', 'LIKE', "%{$query}%")
                            ->get();

        return view('search.results', compact('results', 'query'));
    }
}
