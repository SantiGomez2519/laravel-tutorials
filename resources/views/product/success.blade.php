@extends('layouts.app')
@section('title', 'Product Created - Online Store')
@section('subtitle', 'Product Created Successfully')
@section('content')

<div class="alert alert-success text-center" role="alert">
    <h4 class="alert-heading">Product created!</h4>
    <p>Your product has been successfully created.</p>
    <hr>
    <p class="mb-0">
        <a href="{{ route('product.index') }}" class="btn btn-primary">View All Products</a>
        <a href="{{ route('product.create') }}" class="btn btn-secondary">Create Another Product</a>
    </p>
</div>

@endsection
