@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')

    <div class="text-center">
        Welcome to the application
    </div>

    <div class="my-4">
        <h5>Pilot Management</h5>
        <ul>
            <li><a href="{{ route('pilot.create') }}">Register pilots</a></li>
            <li><a href="{{ route('pilot.index') }}">List pilots</a></li>
            <li><a href="{{ route('pilot.stats') }}">Pilot statistics</a></li>
        </ul>
    </div>

@endsection
