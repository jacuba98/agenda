<div class="navbar">
    @if (Route::has('login')) 
    <ul> 
        @auth
        <li>
            <form method="POST" action="{{ route('logout') }}" style="display: inline-block;">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                    {{ __('Log Out') }}
                </a>
            </form>
        </li>
        <li><a href="{{ route('user.index')}}">{{ __('Users') }}</a></li>
        @else
        <li><a href="{{ route('login')}}">{{ __('Login') }}</a></li>
        @endauth
    </ul>
    @endif
</div>

<!--div class="sm:fixed sm:top-0 text-right">
            <nav>
                @if (Route::has('login'))
                <ul>
                            @auth
                            <a href="{{ route('user.index') }}" style="display: inline-block;">Users</a>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline-block;">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                                    >
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                            @else
                                <a href="{{ route('login') }}" style="display: inline-block;">Login</a>
                            @endauth
                </ul>
                @endif
            </nav>
        </div-->
