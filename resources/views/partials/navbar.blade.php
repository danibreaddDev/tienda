<nav>
    <ul class="d-flex gap-5">
        @if (auth()->check())
            <span>{{ auth()->user()->username }}</span>
        @endif
        @if (auth()->check())
            <li><a href={{ route('logout') }}>Logout</a></li>
        @endif
        <li><a href={{ route('Products.index') }}>Products</a></li>

    </ul>
</nav>
