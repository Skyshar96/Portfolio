<header class="site-header" id="mainHeader">
    <div class="container">
        <div class="branding">
            <a href="{{ route('home') }}" class="logo">BTS SIO — Mon Portfolio</a>
            <p class="tagline">Solutions Logicielles & Support aux Organisations</p>
        </div>
        <nav class="main-nav" aria-label="Navigation principale">
            <ul>
                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="{{ request()->routeIs('veille-quantique') ? 'active' : '' }}" href="{{ route('veille-quantique') }}">Veille Quantique</a></li>
                <li><a class="{{ request()->routeIs('veille-cyber') ? 'active' : '' }}" href="{{ route('veille-cyber') }}">Veille Cyber</a></li>
                <li><a class="{{ request()->routeIs('stages') ? 'active' : '' }}" href="{{ route('stages') }}">Stages</a></li>
                <li><a class="{{ request()->routeIs('code-conduite') ? 'active' : '' }}" href="{{ route('code-conduite') }}">Code de conduite</a></li>
            </ul>
        </nav>
    </div>
</header>
