@extends('layout/layout')

@section('title', 'Home')

@section('content')
    <h2>Welcome to our website!</h2>
    <p>This is the content of the welcome page.</p>
    <table>
        <tr>
            <th>Product Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
        </tr>
    
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->category->name }}</td>
        </tr>
        
    @endforeach
    </table>
@endsection
