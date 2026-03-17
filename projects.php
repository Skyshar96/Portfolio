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
                 <img src="assets/image/Logo_Mediaphone.png" 
                     alt="Mediaphone" 
                     class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">Mediaphone</h3>
                <p class="project-description">
                    Site vitrine local de reparation et assistance informatique a Pepieux avec presentation des services, produits et contact.
                </p>
                <div class="project-tech">
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">Support local</span>
                </div>
                <div class="project-links">
                    <a href="https://mediaphone11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                        <i data-lucide="github"></i>
                        <span>Code</span>
                    </a>
                    <a href="https://mediaphone11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                        <i data-lucide="external-link"></i>
                        <span>Demo</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="project-card">
            <div class="project-image-container">
                <div class="project-overlay"></div>
                 <img src="assets/image/baguette-logo.svg" 
                     alt="Au PecheMignon" 
                     class="project-image project-image-contained">
            </div>
            <div class="project-content">
                <h3 class="project-title">Au PecheMignon</h3>
                <p class="project-description">
                    Site de boulangerie artisanale a Carcassonne presentant produits frais, savoir-faire local et informations de contact.
                </p>
                <div class="project-tech">
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">MySQL</span>
                </div>
                <div class="project-links">
                    <a href="https://aupechemignon11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                        <i data-lucide="github"></i>
                        <span>Code</span>
                    </a>
                    <a href="https://aupechemignon11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                        <i data-lucide="external-link"></i>
                        <span>Demo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
