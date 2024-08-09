@extends('layouts/.app')

@section('title', 'information')

@section('content')
<h1>Welcome to the Information page</h1>
<p>This is the infromation page!</p>


    <!-- Search Bar -->
    <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0 d-flex w-100 justify-content-center">
        <input class="form-control mr-2" type="search" name="search" placeholder="Search" aria-label="Search" style="flex: 3;">
        <button class="btn btn-outline-success" type="submit" style="flex: 1;">Search</button>
    </form>
@endsection


