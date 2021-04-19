<!-- Header -->
<header id="header" class=class="{{ Request()->is('spatial') ? 'alt' : '' }}">
    <h1><strong><a href="index.blade.php">Spatial</a></strong> by Templated</h1>
    <nav id="nav">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('articles_index') }}">Articles</a></li>
            <li><a href="{{ route('generic') }}">Generic</a></li>
            <li><a href="{{ route('elements') }}">Elements</a></li>
            <li><a href="{{ route('contact') }}">Contact us</a></li>
            <li><small>
                @auth
                    <span class="icon fa-user">&nbsp;{{ auth()->user()->name }}</span>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        x
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display:none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="icon fa-user">&nbsp;Login</a>
                @endauth
            </small></li>
        </ul>
    </nav>
</header>
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
