<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">

            <a class="nav-link" href="/">Bookster</a>

            @if (Auth::check())
                @if (Auth::user()->hasRole('admin'))
                    <a class="nav-link" href="/panel/manage-user">Manage User</a>
                @endif
            @endif

            @if (Auth::check())

                <a class="nav-link ml-auto border-right" href="#">{{Auth::user()->login}} </a>
                <a class="nav-link" href="/logout">Logout</a>

            @endif

        </nav>
    </div>
</div>

