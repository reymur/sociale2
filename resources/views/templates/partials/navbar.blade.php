
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Social2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mr-0" id="navbarSupportedContent">
            @if(\Illuminate\Support\Facades\Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">Wall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('friends') }}">Friends</a>
                    </li>

                    @include('templates.forms.search_users_form')
                </ul>
            @endif
            <div class="collapse navbar-collapse mr-0" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item">
                            <a href="" class="nav-link text-light">{{ Auth::user()->getUserFullName() ?? Auth::user()->getUserLogin() }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="nav-link text-light">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link text-light">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('register.show') }}" class="nav-link text-light">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login.post') }}" class="nav-link text-light">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
