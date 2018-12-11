<header>
  <nav class="navbar navbar-expand-md navigasi">
    <a class="navbar-brand" href="{{ url('/') }}">
        projek-1
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mt-2 mt-md-0 ml-auto">
        <div class="btn-group">
            @guest
                <a class="btn btn-primary" href="{{ route('login') }}" id="khusus">Login</a>
                @if (Route::has('register'))
                    <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <a class="btn btn-info" href="{{ route('home') }}" role="button">
                    {{ Auth::user()->name }}
                </a>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
      </div>
    </div>
  </nav>
</header>