<?php
$pageTitle = "Accueil — Portfolio BTS SIO";
$currentPage = "home";
include __DIR__ . "/partials/header.php";
?>
<section class="hero">
    <div>
        <span class="badge">Étudiant BTS SIO</span>
        <h1>Bonjour, je m'appelle <span class="highlight">[Votre Nom]</span> et je conçois des solutions numériques fiables.</h1>
        <p>Actuellement en deuxième année de BTS SIO option SLAM, je développe des applications et je sécurise des infrastructures pour aider les organisations à réussir leur transformation digitale.</p>
        <div class="badge-list" role="list">
            <span class="badge">PHP</span>
            <span class="badge">Laravel</span>
            <span class="badge">SQL</span>
            <span class="badge">Docker</span>
            <span class="badge">Gestion de projet</span>
        </div>
    </div>
    <div class="hero-visual">
        <span>IT &amp; Security</span>
    </div>
</section>
<section>
    <h2 class="section-title">Compétences clés</h2>
    <p class="section-intro">Un socle solide couvrant le développement, l'administration système et la cybersécurité, enrichi par mes expériences en entreprise et ma veille régulière.</p>
    <div class="card-grid">
        <article class="card">
            <h3>Développement applicatif</h3>
            <p>Création d'applications web robustes en PHP (Laravel/Symfony), JavaScript (Vue.js), et bases de données SQL optimisées.</p>
        </article>
        <article class="card">
            <h3>Cybersécurité proactive</h3>
            <p>Mise en place de politiques de sécurité, tests d'intrusion simples, durcissement des serveurs Linux, sauvegardes et supervision.</p>
        </article>
        <article class="card">
            <h3>Culture DevOps</h3>
            <p>Utilisation de Git, intégration continue, conteneurisation Docker et surveillance pour industrialiser les déploiements.</p>
        </article>
    </div>
</section>
<section style="margin-top:3rem;">
    <h2 class="section-title">Projet phare</h2>
    <div class="card-grid">
        <article class="card">
            <h3>Plateforme de gestion des incidents</h3>
            <p>Conçue pour un service informatique interne. Suivi des tickets, priorisation, communication automatisée et tableaux de bord.</p>
            <ul class="list">
                <li><strong>Technologies :</strong> Laravel, MySQL, TailwindCSS, Docker.</li>
                <li><strong>Apports :</strong> Réduction du temps de résolution, meilleure traçabilité, indicateurs de performance.</li>
                <li><strong>Rôle :</strong> Chef de projet et développeur principal.</li>
            </ul>
        </article>
        <article class="card">
            <h3>Application mobile de suivi énergétique</h3>
            <p>Application cross-platform pour collecter, analyser et visualiser les consommations énergétiques d'un parc immobilier.</p>
            <ul class="list">
                <li><strong>Technologies :</strong> Flutter, API REST PHP, PostgreSQL.</li>
                <li><strong>Apports :</strong> Visualisation claire, alertes en temps réel, recommandations d'économies.</li>
                <li><strong>Rôle :</strong> Développeur backend et responsable API.</li>
            </ul>
        </article>
    </div>
</section>
<section style="margin-top:3rem;">
    <h2 class="section-title">Objectifs professionnels</h2>
    <div class="timeline">
        <article class="timeline-item">
            <h3>2025 — Alternance en sécurité applicative</h3>
            <p>Approfondir la sécurisation des applications web et l'automatisation des audits de code.</p>
        </article>
        <article class="timeline-item">
            <h3>2026 — Licence professionnelle cybersécurité</h3>
            <p>Renforcer mes compétences en analyse de risques, réponse à incidents et forensique numérique.</p>
        </article>
        <article class="timeline-item">
            <h3>2028 — Consultant cybersécurité</h3>
            <p>Accompagner les organisations dans la mise en conformité et la protection de leurs actifs numériques.</p>
        </article>
    </div>
</section>
<?php
include __DIR__ . "/partials/footer.php";
?>
