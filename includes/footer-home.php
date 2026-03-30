            <footer class="footer">
                <p>© 2024 Wyatt Guemache. All rights reserved.</p>
            </footer>
        </div>
    </div>

    <script>
        // Initialize Lucide icons immediately
        if (window.lucide && typeof window.lucide.createIcons === 'function') {
            lucide.createIcons();
        }
    </script>
    <script src="assets/js/script.js"></script>
    <script>
        // Re-initialize Lucide icons after DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (window.lucide && typeof window.lucide.createIcons === 'function') {
                lucide.createIcons();
            }
        });
    </script>
</body>
</html>
