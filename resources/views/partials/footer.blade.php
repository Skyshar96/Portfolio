        </div>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div>
                <p class="footer-title">Wyatt Guemache</p>
                <p>Étudiant BTS SIO SLAM</p>
                <p>Développeur Web Full-Stack</p>
            </div>
            <div>
                <p class="footer-title">Projets</p>
                <ul class="social-links">
                    <li><a href="https://mediaphone11.fr" target="_blank" rel="noopener">Mediaphone</a></li>
                    <li><a href="https://github.com/Skyshar96" target="_blank" rel="noopener">GitHub</a></li>
                </ul>
            </div>
            <div>
                <p class="footer-title">Technologies</p>
                <p>PHP • Laravel • Python • Java<br>HTML • CSS • JavaScript • MySQL</p>
            </div>
        </div>
    </footer>
    <script>
        // Animation de la navbar au scroll
        const header = document.getElementById('mainHeader');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScroll = currentScroll;
        });

        // Animation des cartes au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card, .timeline-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>
