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
            <h3 class="project-title">Contexte du projet</h3>
            <p class="project-description">
                Réalisation d'un site vitrine pour Mediaphone, un commerce local de réparation et d'assistance informatique situé à Pepieux. Le projet visait à offrir une présence en ligne professionnelle pour présenter les services, produits et faciliter le contact avec la clientèle locale.
            </p>

            <h3 class="project-title">Aperçu du projet</h3>
            <div class="project-gallery">
                <!-- Vous pouvez ajouter vos screenshots ici -->
                <!-- Exemple:
                <div class="project-gallery-item">
                    <img src="assets/image/screenshots/mediaphone-home.png" alt="Page d'accueil Mediaphone">
                </div>
                <div class="project-gallery-item">
                    <img src="assets/image/screenshots/mediaphone-services.png" alt="Page services Mediaphone">
                </div>
                <div class="project-gallery-item">
                    <img src="assets/image/screenshots/mediaphone-contact.png" alt="Page contact Mediaphone">
                </div>
                -->
            </div>

            <h3 class="project-title">Stack Technique</h3>
            <div class="project-tech">
                <span class="tech-badge">PHP Natif</span>
                <span class="tech-badge">HTML5</span>
                <span class="tech-badge">CSS3</span>
                <span class="tech-badge">JavaScript</span>
                <span class="tech-badge">MySQL</span>
                <span class="tech-badge">Resend API</span>
            </div>

            <h3 class="project-title">Hébergement & Infrastructure</h3>
            <p class="project-description">
                <strong>Hébergeur :</strong> OVH<br>
                <strong>Type :</strong> VPS (Serveur Privé Virtuel)<br>
                <strong>Système d'exploitation :</strong> Ubuntu Server<br>
                <strong>Serveur Web :</strong> Apache2<br>
                <strong>Sécurité :</strong> Certificats SSL via Certbot (Let's Encrypt)<br>
                <strong>Configuration :</strong> VPS configuré de A à Z (installation, sécurisation, optimisation)
            </p>

            <h3 class="project-title">Missions Effectuées</h3>
            <ul class="project-description" style="list-style-position: inside;">
                <li>✓ Développement complet du site web vitrine</li>
                <li>✓ Configuration et administration du serveur VPS Ubuntu</li>
                <li>✓ Mise en place des certificats SSL pour sécuriser le site</li>
                <li>✓ Intégration de Resend pour la gestion des emails de contact</li>
                <li>✓ Réparation de PC et équipements informatiques pour les clients</li>
                <li>✓ Création et gestion de sauvegardes (backup de disques)</li>
                <li>✓ Conseil technique auprès de la clientèle</li>
                <li>✓ Support et assistance informatique sur site</li>
            </ul>

            <h3 class="project-title">Fonctionnalités Principales</h3>
            <ul class="project-description" style="list-style-position: inside;">
                <li>• Présentation détaillée des services de réparation</li>
                <li>• Catalogue de produits disponibles</li>
                <li>• Formulaire de contact avec envoi d'emails via Resend</li>
                <li>• Design responsive adapté mobile/tablette/desktop</li>
                <li>• Optimisation SEO pour le référencement local</li>
                <li>• Informations de contact et horaires d'ouverture</li>
            </ul>

            <h3 class="project-title">Résultats & Impact</h3>
            <p class="project-description">
                Mise en ligne réussie du site avec un hébergement performant et sécurisé. Le site permet à Mediaphone d'avoir une présence professionnelle en ligne et facilite le contact avec les clients locaux. L'expérience technique acquise incluant la réparation matérielle, les backups et le conseil client a enrichi mes compétences en support informatique global.
            </p>

            <div class="project-links">
                <a href="projects.php" class="project-link">
                    <i data-lucide="arrow-left"></i>
                    <span>Retour projets</span>
                </a>
                <a href="https://mediaphone11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i data-lucide="external-link"></i>
                    <span>Visiter le site</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
