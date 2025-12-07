<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard — Yummi Bakers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Yummi Bakers — Admin</h1>
    <span class="text-sm text-gray-600">
        {{ auth()->user()->name ?? 'Admin' }}
    </span>
</nav>

<main class="p-6">
    <h2 class="text-2xl font-semibold mb-4">Admin Dashboard</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Orders</h3>
            <p class="text-gray-500">Manage customer orders</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Products</h3>
            <p class="text-gray-500">Add & edit bakery items</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Users</h3>
            <p class="text-gray-500">Admin & customer management</p>
        </div>
    </div>
</main>

</body>
</html>
