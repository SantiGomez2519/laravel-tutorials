@extends('layouts.app')
@section('title', 'Pilot Statistics')
@section('content')

    <h3>Pilot Statistics</h3>

    <ul>
        <li>LA: {{ $viewData['countLA'] }}</li>
        <li>Tokio: {{ $viewData['countTokio'] }}</li>
        <li>Average nitro level: {{ number_format($viewData['avgNitro'], 2) }}</li>
    </ul>

@endsection
