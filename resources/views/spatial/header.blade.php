<!-- Header -->
<header id="header" class=class="{{ Request()->is('spatial') ? 'alt' : '' }}">
    <h1><strong><a href="index.blade.php">Spatial</a></strong> by Templated</h1>
    <nav id="nav">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('articles_index') }}">Articles</a></li>
            <li><a href="{{ route('generic') }}">Generic</a></li>
            <li><a href="{{ route('elements') }}">Elements</a></li>
        </ul>
    </nav>
</header>
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
