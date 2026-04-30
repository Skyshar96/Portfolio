<?php
$current_page = 'projects';
$page_title = 'Projects - Wyatt Guemache';
include 'includes/header-home.php';
?>

<section class="projects-section page-section">
    <h2 class="section-title">
        Latest Projects
        <span class="title-underline"></span>
    </h2>
    <div class="projects-grid">
        <div class="project-card">
            <div class="project-image-container">
                <div class="project-overlay"></div>
                 <img src="assets/image/projects/mediaphone/logo.png"
                     alt="Mediaphone"
                     class="project-image project-image-contained">
            </div>
            <div class="project-content">
                <h3 class="project-title">
                    <a href="project-mediaphone.php" class="project-link">Mediaphone</a>
                </h3>
                <p class="project-description">
                    Site vitrine local de reparation et assistance informatique a Pepieux avec presentation des services, produits et contact.
                </p>
                <div class="project-tech">
                    <span class="tech-badge">PHP Natif</span>
                    <span class="tech-badge">HTML5</span>
                    <span class="tech-badge">CSS3</span>
                    <span class="tech-badge">JavaScript</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">Resend API</span>
                    <span class="tech-badge">VPS Ubuntu</span>
                    <span class="tech-badge">Apache2</span>
                </div>
                <div class="project-links">
                    <a href="project-mediaphone.php" class="project-link">
                        <i data-lucide="file-text"></i>
                        <span>Details</span>
                    </a>
                    <a href="https://mediaphone11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                        <i data-lucide="external-link"></i>
                        <span>Lien</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="project-card">
            <div class="project-image-container">
                <div class="project-overlay"></div>
                 <img src="assets/image/projects/aupechemignon/logo.svg"
                     alt="Au PecheMignon"
                     class="project-image project-image-contained">
            </div>
            <div class="project-content">
                <h3 class="project-title">
                    <a href="project-aupechemignon.php" class="project-link">Au PecheMignon</a>
                </h3>
                <p class="project-description">
                    Site de boulangerie artisanale a Carcassonne presentant produits frais, savoir-faire local et informations de contact.
                </p>
                <div class="project-tech">
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">Blade Templates</span>
                    <span class="tech-badge">HTML5</span>
                    <span class="tech-badge">CSS3</span>
                    <span class="tech-badge">JavaScript</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">Resend API</span>
                    <span class="tech-badge">VPS Ubuntu</span>
                </div>
                <div class="project-links">
                    <a href="project-aupechemignon.php" class="project-link">
                        <i data-lucide="file-text"></i>
                        <span>Details</span>
                    </a>
                    <a href="https://aupechemignon11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                        <i data-lucide="external-link"></i>
                        <span>Lien</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
