<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <x-application-logo width="150" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <!-- Exibir links de menu somente para usuario logado -->
                @guest
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="fas fa-home"></i>
                            Painel - {{ Auth::user()->group }}
                        </a>
                    </li>
                @endguest
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus"></i>
                                {{ __('Register') }}
                            </a>
                        </li>
                    @endif
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt"></i>
                                {{ __('Login') }}
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.show', [Auth::user()->id]) }}">
                            <img src="https://gravatar.com/avatar/{{ md5(trim(strtolower(Auth::user()->email))) }}?s=25&d=https://ui-avatars.com/api/{{ trim(str_replace(' ', '+', Auth::user()->name)) }}/25/dc3545/fff/1" alt="Foto {{Auth::user()->name}}" class="img-fluid rounded-circle" />
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
