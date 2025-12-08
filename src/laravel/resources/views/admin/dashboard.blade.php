@extends('admin.layouts.app')
@section('content')
    <h2 class="text-2xl font-bold mb-6">Admin Dashboard</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold">Orders</h3>
            <p class="text-gray-500">Manage customer orders</p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold">Products</h3>
            <p class="text-gray-500">Add & edit bakery items</p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold">Users</h3>
            <p class="text-gray-500">Admin & customer management</p>
        </div>
    </div>
@endsection