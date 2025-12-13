@extends('layouts.admin')
@section('content')
<h1>Products</h1>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
<a href="{{ route('admin.products.create') }}">Add Product</a>
<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->is_active ? 'Active' : 'Inactive' }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product) }}">Edit</a>

                <form action="{{ route('admin.products.destroy', $product) }}"
                    method="POST"
                    style="display:inline;"
                    onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
</table>
@endsection