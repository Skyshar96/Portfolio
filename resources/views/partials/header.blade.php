<header class="site-header" id="mainHeader">
    <div class="container">
        <div class="logo-container">
            <a href="{{ route('home') }}" class="logo">BTS SIO — Mon Portfolio</a>
            <p class="tagline">Solutions Logicielles & Support aux Organisations</p>
        </div>
        <button class="mobile-menu-toggle" aria-label="Menu mobile" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            this.classList.toggle('active');
            mainNav.classList.toggle('active');
        });

        // Fermer le menu quand on clique sur un lien
        const navLinks = mainNav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }
});
</script>
