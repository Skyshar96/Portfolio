@extends('layouts.app')

@section('title', 'Accueil — Portfolio BTS SIO')

@section('content')
<section class="hero">
    <div>
        <span class="badge">Étudiant BTS SIO SLAM</span>
        <h1>Bonjour, je m'appelle <span class="highlight">Wyatt Guemache</span> et je développe des applications web.</h1>
        <p>Étudiant en BTS SIO option SLAM, je crée des applications web performantes et sécurisées. Passionné par le développement full-stack et l'innovation technologique.</p>
        <div class="badge-list" role="list">
            <span class="badge">PHP</span>
            <span class="badge">Laravel</span>
            <span class="badge">Python</span>
            <span class="badge">Java</span>
            <span class="badge">JavaScript</span>
            <span class="badge">MySQL</span>
        </div>
    </div>
    <div class="hero-visual">
        <span>Web Development</span>
    </div>
</section>

<section>
    <h2 class="section-title">Compétences techniques</h2>
    <p class="section-intro">Des compétences diversifiées en développement web, acquises à travers mes projets scolaires et professionnels.</p>
    <div class="card-grid">
        <article class="card">
            <h3>Langages de programmation</h3>
            <p><strong>Backend :</strong> PHP, Laravel, Python, Java</p>
            <p><strong>Frontend :</strong> HTML5, CSS3, JavaScript</p>
            <p><strong>Base de données :</strong> MySQL</p>
        </article>
        <article class="card">
            <h3>Développement web</h3>
            <p>Architecture MVC, développement d'API REST, gestion de sessions utilisateur, authentification et autorisation.</p>
        </article>
        <article class="card">
            <h3>Outils & méthodologies</h3>
            <p>Git/GitHub, gestion de projet agile, design responsive, développement full-stack, documentation technique.</p>
        </article>
    </div>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Mes projets</h2>
    <div class="card-grid">
        <article class="card">
            <h3>🌐 Site Mediaphone (Stage professionnel)</h3>
            <p>Développement complet d'un site web professionnel pour l'entreprise Mediaphone.</p>
            <ul class="list">
                <li><strong>URL :</strong> <a href="https://mediaphone11.fr" target="_blank" style="color: #2563eb; text-decoration: underline;">mediaphone11.fr</a></li>
                <li><strong>Technologies :</strong> PHP, HTML5, CSS3, JavaScript, MySQL</li>
                <li><strong>Réalisation :</strong> Conception et développement complet du site vitrine</li>
                <li><strong>Contexte :</strong> Projet réalisé durant mon stage en entreprise</li>
            </ul>
        </article>
        <article class="card">
            <h3>🚒 Gestion de Caserne de Pompiers</h3>
            <p>Application web complète pour la gestion administrative et opérationnelle d'une caserne de pompiers.</p>
            <ul class="list">
                <li><strong>Technologies :</strong> PHP, Laravel, MySQL</li>
                <li><strong>Fonctionnalités :</strong>
                    <ul class="list" style="padding-left:1rem;">
                        <li>Gestion des pompiers (grade, rôle, matricule)</li>
                        <li>Gestion des véhicules (attribution, nomenclature)</li>
                        <li>Système de gestion des sessions</li>
                        <li>Interface d'administration complète</li>
                    </ul>
                </li>
                <li><strong>Contexte :</strong> Projet scolaire BTS SIO</li>
            </ul>
        </article>
        <article class="card">
            <h3>📸 Plateforme de Vente de Photos</h3>
            <p>Site e-commerce spécialisé dans la vente de photographies avec système d'administration multi-rôles.</p>
            <ul class="list">
                <li><strong>Technologies :</strong> PHP, Laravel, MySQL, JavaScript</li>
                <li><strong>Fonctionnalités :</strong>
                    <ul class="list" style="padding-left:1rem;">
                        <li>Système d'inscription et connexion sécurisé</li>
                        <li>Dashboard administrateur</li>
                        <li>Dashboard photographe</li>
                        <li>Upload et suppression de photos</li>
                        <li>Gestion des ventes et des utilisateurs</li>
                    </ul>
                </li>
                <li><strong>Contexte :</strong> Projet scolaire BTS SIO</li>
            </ul>
        </article>
    </div>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Objectifs professionnels</h2>
    <div class="timeline">
        <article class="timeline-item">
            <h3>2025 — Obtention du BTS SIO</h3>
            <p>Finaliser ma formation en développement logiciel et valider mes compétences en conception d'applications.</p>
        </article>
        <article class="timeline-item">
            <h3>2026 — Poursuites d'études ou alternance</h3>
            <p>Continuer à me perfectionner en développement web full-stack et découvrir de nouvelles technologies.</p>
        </article>
        <article class="timeline-item">
            <h3>À long terme — Développeur Full-Stack</h3>
            <p>Devenir développeur full-stack confirmé et participer à des projets innovants et challengeants.</p>
        </article>
    </div>
</section>
@endsection
