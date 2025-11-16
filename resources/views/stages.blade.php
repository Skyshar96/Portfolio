@extends('layouts.app')

@section('title', 'Stages — Portfolio BTS SIO')

@section('content')
<section>
    <h1 class="section-title">Mon expérience professionnelle</h1>
    <p class="section-intro">Stage professionnel qui m'a permis d'appliquer mes compétences en développement web dans un contexte réel d'entreprise.</p>
</section>

<section class="card-grid">
    <article class="card ">
        <h2>Stage — Développement web chez Mediaphone</h2>
        <p><strong>Organisation :</strong> Mediaphone</p>
        <p><strong>Projet :</strong> Conception et développement du site web de l'entreprise</p>
        <ul class="list">
            <li><strong>Mission principale :</strong> Développement complet d'un site web professionnel pour présenter l'entreprise et ses services.</li>
            <li><strong>Réalisations :</strong>
                <ul class="list" style="padding-left:1rem;">
                    <li>Conception et développement du site <a href="https://mediaphone11.fr" target="_blank" style="color: #2563eb;">mediaphone11.fr</a></li>
                    <li>Intégration de l'identité visuelle de l'entreprise</li>
                    <li>Développement responsive pour mobile et tablette</li>
                    <li>Optimisation des performances et du référencement</li>
                </ul>
            </li>
            <li><strong>Compétences développées :</strong> Développement web, gestion de projet, relation client, autonomie</li>
            <li><strong>Technologies utilisées :</strong> PHP, HTML5, CSS3, JavaScript, MySQL</li>
        </ul>
        <div class="badge-list">
            <span class="badge">PHP</span>
            <span class="badge">HTML/CSS</span>
            <span class="badge">JavaScript</span>
            <span class="badge">MySQL</span>
        </div>
    </article>
    <article class="card">
        <h2>Projets scolaires BTS SIO</h2>
        <p><strong>Contexte :</strong> Projets réalisés dans le cadre de ma formation BTS SIO SLAM</p>
        <ul class="list">
            <li><strong>Projet 1 — Gestion de caserne de pompiers :</strong>
                <ul class="list" style="padding-left:1rem;">
                    <li>Application de gestion administrative complète</li>
                    <li>Gestion des pompiers (grades, rôles, matricules)</li>
                    <li>Gestion des véhicules et attribution</li>
                    <li>Système de sessions et authentification</li>
                </ul>
            </li>
            <li><strong>Projet 2 — Plateforme de vente de photos :</strong>
                <ul class="list" style="padding-left:1rem;">
                    <li>Site e-commerce pour photographes</li>
                    <li>Système d'inscription et connexion</li>
                    <li>Dashboard admin et photographe</li>
                    <li>Gestion complète des photos (upload, suppression)</li>
                </ul>
            </li>
            <li><strong>Technologies :</strong> PHP, Laravel, MySQL, JavaScript</li>
        </ul>
        <div class="badge-list">
            <span class="badge">Laravel</span>
            <span class="badge">PHP</span>
            <span class="badge">MySQL</span>
            <span class="badge">JavaScript</span>
        </div>
    </article>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Compétences développées</h2>
    <div class="two-column">
        <article class="card">
            <h3>Techniques</h3>
            <ul class="list">
                <li>Développement full-stack PHP/Laravel</li>
                <li>Conception de bases de données MySQL</li>
                <li>Développement front-end HTML/CSS/JavaScript</li>
                <li>Architecture MVC et patterns de conception</li>
                <li>Gestion de sessions et authentification</li>
            </ul>
        </article>
        <article class="card">
            <h3>Professionnelles</h3>
            <ul class="list">
                <li>Gestion de projet et autonomie</li>
                <li>Communication avec le client</li>
                <li>Travail en équipe et collaboration</li>
                <li>Documentation technique</li>
                <li>Respect des délais et cahier des charges</li>
            </ul>
        </article>
    </div>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Technologies maîtrisées</h2>
    <div class="card-grid">
        <article class="card">
            <h3>Backend</h3>
            <p><strong>PHP</strong> : Développement orienté objet, frameworks Laravel</p>
            <p><strong>Python</strong> : Scripts et automatisation</p>
            <p><strong>Java</strong> : Programmation orientée objet</p>
            <p><strong>MySQL</strong> : Conception et gestion de bases de données</p>
        </article>
        <article class="card">
            <h3>Frontend</h3>
            <p><strong>HTML5</strong> : Structure et sémantique web</p>
            <p><strong>CSS3</strong> : Stylisation et design responsive</p>
            <p><strong>JavaScript</strong> : Interactivité et manipulation du DOM</p>
        </article>
        <article class="card">
            <h3>Outils</h3>
            <p><strong>Git/GitHub</strong> : Versioning et collaboration</p>
            <p><strong>Laravel</strong> : Framework PHP MVC</p>
            <p><strong>VS Code</strong> : Environnement de développement</p>
        </article>
    </div>
</section>
@endsection
