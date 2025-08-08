@extends('layouts.app')
@section('title', 'Contact Page - Online Store')
@section('subtitle', 'Contact us')
@section('content')

<div class="container text-center">
    <p class="lead">{{ $email }}</p>
    <p class="lead">{{ $address }}</p>
    <p class="lead">{{ $phone }}</p>
</div>

@endsection