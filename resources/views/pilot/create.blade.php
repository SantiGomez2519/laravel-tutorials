@extends('layouts.app')
@section('title', 'Register Pilots')
@section('content')

    <h3>Register pilot</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('pilot.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required />
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">Origin city</label>
            <select name="city" id="city" class="form-select" required>
                <option value="">Select...</option>
                <option value="LA" {{ old('city') === 'LA' ? 'selected' : '' }}>LA</option>
                <option value="Tokio" {{ old('city') === 'Tokio' ? 'selected' : '' }}>Tokio</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nitro_level" class="form-label">Nitro level</label>
            <input type="number" name="nitro_level" id="nitro_level" class="form-control" value="{{ old('nitro_level') }}"
                min="0" required />
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
