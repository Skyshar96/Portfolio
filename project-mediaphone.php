<?php
$current_page = 'projects';
$page_title = 'Mediaphone - Wyatt Guemache';
include 'includes/header-home.php';
?>

<section class="projects-section page-section">
    <h2 class="section-title">
        Mediaphone
        <span class="title-underline"></span>
    </h2>

    <div class="project-card">
        <div class="project-content">
            <p class="project-description">
                Page detaillee du projet Mediaphone. Tu peux modifier ce texte pour ajouter le contexte, les objectifs, les fonctionnalites et les resultats.
            </p>
            <div class="project-tech">
                <span class="tech-badge">PHP</span>
                <span class="tech-badge">MySQL</span>
                <span class="tech-badge">Support local</span>
            </div>
            <div class="project-links">
                <a href="projects.php" class="project-link">
                    <i data-lucide="arrow-left"></i>
                    <span>Retour projets</span>
                </a>
                <a href="https://mediaphone11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i data-lucide="external-link"></i>
                    <span>Demo</span>
                </a>
            </div>
        </div>
    </div>

    <h3 class="project-title">Screenshots</h3>
    <div class="projects-grid">
        <div class="project-card">
            <div class="project-image-container">
                <div class="project-overlay"></div>
                <img src="assets/image/Logo_Mediaphone.png" alt="Screenshot Mediaphone 1" class="project-image project-image-contained">
            </div>
            <div class="project-content">
                <p class="project-description">Remplace cette image par un screenshot de la page d'accueil.</p>
            </div>
        </div>
        <div class="project-card">
            <div class="project-image-container">
                <div class="project-overlay"></div>
                <img src="assets/image/Logo_Mediaphone.png" alt="Screenshot Mediaphone 2" class="project-image project-image-contained">
            </div>
            <div class="project-content">
                <p class="project-description">Remplace cette image par un screenshot d'une fonctionnalite importante.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
