<?php
$current_page = 'projects';
$page_title = 'Au PecheMignon - Wyatt Guemache';
include 'includes/header-home.php';
?>

<section class="projects-section page-section">
    <h2 class="section-title">
        Au PecheMignon
        <span class="title-underline"></span>
    </h2>

    <div class="project-card">
        <div class="project-content">
            <h3 class="project-title">Contexte du projet</h3>
            <p class="project-description">
                Développement d'un site vitrine pour Au PecheMignon, une boulangerie artisanale située à Carcassonne. L'objectif était de créer une vitrine en ligne élégante pour présenter les produits frais, mettre en valeur le savoir-faire artisanal local et faciliter la prise de contact avec la clientèle.
            </p>

            <h3 class="project-title">Aperçu du projet</h3>
            <div class="project-gallery">
                <!-- Vous pouvez ajouter vos screenshots ici -->
                <!-- Exemple:
                <div class="project-gallery-item">
                    <img src="assets/image/screenshots/aupechemignon-home.png" alt="Page d'accueil Au PecheMignon">
                </div>
                <div class="project-gallery-item">
                    <img src="assets/image/screenshots/aupechemignon-products.png" alt="Page produits Au PecheMignon">
                </div>
                <div class="project-gallery-item">
                    <img src="assets/image/screenshots/aupechemignon-contact.png" alt="Page contact Au PecheMignon">
                </div>
                -->
            </div>

            <h3 class="project-title">Stack Technique</h3>
            <div class="project-tech">
                <span class="tech-badge">Laravel</span>
                <span class="tech-badge">PHP</span>
                <span class="tech-badge">Blade Templates</span>
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
                <strong>Configuration :</strong> VPS configuré de A à Z (installation, sécurisation, optimisation)<br>
                <strong>Framework :</strong> Laravel avec architecture MVC
            </p>

            <h3 class="project-title">Missions Effectuées</h3>
            <ul class="project-description" style="list-style-position: inside;">
                <li>✓ Développement complet du site avec le framework Laravel</li>
                <li>✓ Configuration et administration du serveur VPS Ubuntu</li>
                <li>✓ Installation et configuration de Laravel en production</li>
                <li>✓ Mise en place des certificats SSL pour sécuriser le site</li>
                <li>✓ Intégration de Resend pour la gestion des emails de contact</li>
                <li>✓ Création d'une base de données MySQL optimisée</li>
                <li>✓ Développement d'un système de gestion de contenu simple</li>
                <li>✓ Optimisation des performances et du référencement</li>
            </ul>

            <h3 class="project-title">Fonctionnalités Principales</h3>
            <ul class="project-description" style="list-style-position: inside;">
                <li>• Présentation des produits frais de la boulangerie</li>
                <li>• Mise en avant du savoir-faire artisanal et des recettes traditionnelles</li>
                <li>• Formulaire de contact avec envoi d'emails via Resend</li>
                <li>• Design responsive élégant adapté à tous les écrans</li>
                <li>• Architecture MVC propre grâce à Laravel</li>
                <li>• Système de routing et gestion des requêtes optimisés</li>
                <li>• Informations pratiques (horaires, adresse, contact)</li>
            </ul>

            <h3 class="project-title">Résultats & Impact</h3>
            <p class="project-description">
                Déploiement réussi du site sur un VPS sécurisé et performant. L'utilisation de Laravel a permis une architecture propre, maintenable et évolutive. Le site offre à la boulangerie Au PecheMignon une vitrine professionnelle en ligne qui reflète la qualité de ses produits artisanaux et facilite le contact avec la clientèle locale.
            </p>

            <div class="project-links">
                <a href="projects.php" class="project-link">
                    <i data-lucide="arrow-left"></i>
                    <span>Retour projets</span>
                </a>
                <a href="https://aupechemignon11.fr" target="_blank" rel="noopener noreferrer" class="project-link">
                    <i data-lucide="external-link"></i>
                    <span>Visiter le site</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
