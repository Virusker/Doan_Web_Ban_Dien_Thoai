@extends('layout/layout')

@section('title', 'Home')


@section('content')

 <p>{{ product->name }}</p>
    <p>{{ product->description }}</p>


@endsection