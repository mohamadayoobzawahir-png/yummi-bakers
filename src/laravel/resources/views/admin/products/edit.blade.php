@extends('layouts.admin')
@section('content')
<h2>Edit Product</h2>
<form method="POST" action="{{ route('admin.products.update', $product) }}">
    @csrf
    @method('PUT')
    <div>
        <label>Name</label><br>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
    </div>
    <br>
    <div>
        <label>Price</label><br>
        <input type="number" step="0.01" name="price"
               value="{{ old('price', $product->price) }}" required>
    </div>
    <br>
    <div>
        <label>Description</label><br>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>
    </div>
    <br>
    <button type="submit">Update Product</button>
</form>
@endsection
