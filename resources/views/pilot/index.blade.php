@extends('layouts.app')
@section('title', 'List Pilots')
@section('content')

    <h3>Pilot list</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Nitro Level</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($viewData['pilots'] as $pilot)
                <tr>
                    <td>{{ $pilot->getId() }}</td>
                    <td>
                        @if ($pilot->getCity() === 'Tokio')
                            {{ $pilot->getName() }} <small>(Tokyo Challenge)</small>
                        @else
                            <span style="color: blue;">{{ $pilot->getName() }}</span>
                        @endif
                    </td>
                    <td>{{ $pilot->getCity() }}</td>
                    <td>{{ $pilot->getNitroLevel() }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No pilots registered.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
