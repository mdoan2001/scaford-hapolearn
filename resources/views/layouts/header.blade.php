<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo-image" src="{{ asset('images/logo.png') }}" alt="HapoLearn Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100">
                <li class="nav-item active">
                    <form id="formLanguage" method="POST" action="{{ route('change-language') }}">
                        @csrf
                        <label class="toggler-wrapper style-13">
                            <input id="changeLanguage" type="checkbox" name="lang"
                                @if (config('app.locale') == 'vn') {{ 'checked' }} @endif>
                            <div class="toggler-slider">
                                <div class="toggler-knob"></div>
                            </div>
                        </label>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('artribute.home') }} <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('courses.index') }}">{{ __('artribute.all_courses') }}</a>
                </li>

                @if (!auth()->check())
                    <li class="nav-item nav-item--login">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('artribute.login') }}</a>/<a
                            class="nav-link" href="{{ route('register') }}">{{ __('artribute.register') }}</a>
                    </li>
                @endif

                @if (auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.index') }}">{{ __('artribute.profile') }}</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="nav-item nav-item--login nav-item--logout">
                            <button id="logoutBtn" type="submit" class="btn btn-danger btn-login">{{ __('artribute.logout') }}</button>
                        </li>
                    </form>
                @endif
            </ul>
        </div>
    </nav>
</header>
