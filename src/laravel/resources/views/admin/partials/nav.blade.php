<nav style="padding: 10px; background: #f4f4f4; margin-bottom: 20px;">
    <a href="{{ route('admin.dashboard') }}" style="margin-right: 15px;">Dashboard</a>
    <a href="{{ route('admin.products.index') }}" style="margin-right: 15px;">Products</a>

    <span style="float:right;">
        Logged in as: {{ auth()->user()->name }}
    </span>
</nav>