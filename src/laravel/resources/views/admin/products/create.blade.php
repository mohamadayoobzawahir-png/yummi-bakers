@extends('layouts.admin')
@section('content')
<h1>Add Product</h1>
<form method="POST" action="{{ route('admin.products.store') }}">
    @csrf
    <div>
        <label>Name</label><br>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Price</label><br>
        <input type="number" step="0.01" name="price" required>
    </div>
    <div>
        <label>Description</label><br>
        <textarea name="description"></textarea>
    </div>
    <br>
    <button type="submit">Save Product</button>
</form>
@endsection