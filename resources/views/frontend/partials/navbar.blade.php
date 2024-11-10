<!--- #HEADER-->
<div class="container">

    <h1>
        <a href="{{url('/')}}" class="logo">E-LITERASI</a>
    </h1>

    <nav class="navbar" data-navbar>

        <div class="navbar-top">
            <a href="{{url('/')}}" class="logo">E-LITERASI YUPPENTEK</a>

            <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="navbar-list">

            <li class="navbar-item">
                <a href="{{url('/')}}" class="navbar-link" data-nav-toggler>Home</a>
            </li>

            <li class="navbar-item">
                <a href="{{route('frontend.about')}}" class="navbar-link" data-nav-toggler>Tentang</a>
            </li>

            <li class="navbar-item">
                <a href="{{route('frontend.categories')}}" class="navbar-link" data-nav-toggler>Topik</a>
            </li>


            <li class="navbar-item">
                <a href="{{route('frontend.literasi')}}" class="navbar-link" data-nav-toggler>Literasi</a>
            </li>

            <li class="navbar-item">
                <a href="{{route('frontend.karya')}}" class="navbar-link" data-nav-toggler>Karya Literasi</a>
            </li>

            {{-- <li class="navbar-item">
                <a href="{{route('blog.frontend')}}" class="navbar-link" data-nav-toggler>Blog</a>
            </li> --}}

            <li class="navbar-item">
                <a href="{{route('frontend.kontak')}}" class="navbar-link" data-nav-toggler>Contact</a>
            </li>

        </ul>

    </nav>

    <div class="header-actions">

        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
        </button>

        <!-- Menampilkan tombol berdasarkan status login -->
        @guest
            <a href="{{ route('filament.admin.auth.login') }}" class="header-action-btn login-btn">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                <span class="span">Login</span>
            </a>
        @else
            <div class="dropdown">
                <button class="header-action-btn dropdown-toggle" aria-label="User menu" data-dropdown-toggler>
                    <ion-icon name="person-circle-outline"></ion-icon>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('filament.admin.pages.dashboard')}}" class="dropdown-item">
                            <ion-icon name="speedometer-outline" aria-hidden="true"></ion-icon>
                            <span class="span">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('filament.admin.auth.logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="dropdown-item">
                            <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>
                            <span class="span">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('filament.admin.auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @endguest

        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>

</div>
