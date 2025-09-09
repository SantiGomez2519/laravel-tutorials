@extends('layouts.app')
@section('title', 'Pilot Management System')
@section('content')

    <div class="text-center">
        <h2>Pilot Management System</h2>
        <p>Manage street racing pilots from different cities</p>
    </div>

    <div class="my-4">
        <h5>Available Actions</h5>
        <ul>
            <li><a href="{{ route('pilot.create') }}">Register pilots</a></li>
            <li><a href="{{ route('pilot.index') }}">List pilots</a></li>
            <li><a href="{{ route('pilot.stats') }}">Pilot statistics</a></li>
        </ul>
    </div>

@endsection
