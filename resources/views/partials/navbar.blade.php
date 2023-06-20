<nav class="navbar navbar-expand-lg mb-3 bg-primary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">INI LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- <ul class="navbar-nav">
                @auth
                    <li class="nav-item"><a class="nav-link" href="/">Article</a></li>
                    {{-- @auth
                    <li class="nav-item"><a href="/add-article" class="nav-link">Article</a></li>
                @endauth 
                    <li class="nav-item"><a class="nav-link" href="/category">Category</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="/">Article</a></li>
                @endauth
            </ul> --}}

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Selamat datang {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
