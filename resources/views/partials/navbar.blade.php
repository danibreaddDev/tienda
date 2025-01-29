<nav>
    <ul class="d-flex gap-5">
        @if (auth()->check())
            <span>{{ auth()->user()->username }}</span>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            <li><a href="{{ route('ProductList') }}">Products</a></li>
            <li><a href="{{ route('Users.index') }}">Users</a></li>
            <li><a href="{{ route('Users.create') }}">Create User</a></li>

        @else
            <li><a href="{{ route('index') }}">Tienda</a></li>
            <li><a href="{{ route('login') }}">login</a></li>
        @endif


    </ul>
</nav>
