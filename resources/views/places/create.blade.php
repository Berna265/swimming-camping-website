@extends('layouts/.app')

@section('title', 'Add Place')

@section('content')
    <h1>Welcome to Places Page!</h1>
    <br>
    <h3 class="text-2xl font-bold text-gray-800">Add a New Place</h3>
    
    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/places') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group mt-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group mt-4">
            <label for="location" class="block text-gray-700">Location</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>

        <div class="form-group mt-4">
            <label for="contact" class="block text-gray-700">Contacts</label>
            <input type="text" name="contact" id="contact" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Add Place</button>
    </form>
@endsection
