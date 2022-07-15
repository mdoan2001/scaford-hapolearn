<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
            <img class="logo-image" src="{{ asset('images/logo.png') }}" alt="HapoLearn Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">All Courses</a>
                </li>
                @if (!Auth::check())
                    <li class="nav-item nav-item--login">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>/<a class="nav-link"
                            href="{{ route('register') }}">Register</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link " href="#">Profile</a>
                </li>
                @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="nav-item nav-item--login">
                            <button class="btn btn-danger">LOGOUT</button>
                        </li>
                    </form>
                @endif
            </ul>
        </div>
    </nav>
</header>
