@extends('layouts/.app')

@section('title', 'Search Results')

@section('content')
    <h1 class="text-2xl font-bold text-gray-800">Search Results for "{{ $query }}"</h1>
    
    @if($results->isEmpty())
        <p class="mt-4 text-gray-600">No results found.</p>
    @else
        <ul class="mt-4">
            @foreach($results as $place)
                <li class="bg-white shadow-md rounded-lg p-4 mb-4">
                    <h2 class="text-xl font-semibold">Name: {{ $place->name }}</h2>
                    <p class="mt-2 text-gray-600">Description: {{ $place->description }}</p>
                    <p class="mt-2 text-gray-800">Location: {{ $place->location }}</p>
                    <p class="mt-2 text-gray-800">Contacts: {{ $place->contact }}</p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
