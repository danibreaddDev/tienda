<nav class="p-2 bg-primary">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="d-flex gap-5 list-unstyled">
                @if (auth()->check())
                    <span>{{ auth()->user()->username }}</span>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                    <li><a href="{{ route('ProductList') }}">Products</a></li>
                    <li><a href="{{ route('Users.index') }}">Users</a></li>
                    <li><a href="{{ route('Users.create') }}">Create User</a></li>
                    <li><a href="{{ route('ShopCardList') }}">Mi carrito</a></li>
                @else
                    <li><a href="{{ route('index') }}">Tienda</a></li>
                    <li><a href="{{ route('login') }}">login</a></li>
                @endif


            </div>
        </div>

    </div>
</nav>
<style>
    a {
        color: white;
        text-decoration: none;
    }
</style>
