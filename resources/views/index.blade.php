@extends('layout/layout')

@section('title', 'Home')

@section('content')
    <h2>Welcome to our website!</h2>
    <p>This is the content of the welcome page.</p>
    @foreach($products as $product)
        <p>{{ $product->name }} - {{ $product->price}}</p>
    @endforeach
@endsection
