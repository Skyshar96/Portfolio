@extends('layouts.app')

@section('title', 'Code de conduite — Portfolio BTS SIO')

@section('content')
<section>
    <h1 class="section-title">Code de conduite professionnel</h1>
    <p class="section-intro">Ce code de conduite guide ma pratique professionnelle en tant que technicien supérieur en informatique. Il s'appuie sur les valeurs du BTS SIO, les recommandations de l'ANSSI et les bonnes pratiques du numérique responsable.</p>
</section>

<section class="card-grid">
    <article class="card">
        <h2>1. Intégrité & confidentialité</h2>
        <ul class="list">
            <li><strong>Protection des données :</strong> respecter le RGPD, chiffrer les informations sensibles, limiter les accès.</li>
            <li><strong>Transparence :</strong> informer les parties prenantes des risques et incidents.</li>
            <li><strong>Respect des engagements :</strong> ne jamais altérer ou falsifier des résultats, tenir les délais annoncés.</li>
        </ul>
    </article>
    <article class="card">
        <h2>2. Sécurité by design</h2>
        <ul class="list">
            <li><strong>Analyse des risques :</strong> intégrer la cybersécurité dès la conception des projets.</li>
            <li><strong>Principes Zero Trust :</strong> appliquer le moindre privilège et la traçabilité.</li>
            <li><strong>Veille réglementaire :</strong> suivre les évolutions NIS2, ISO 27001, SecNumCloud.</li>
        </ul>
    </article>
    <article class="card">
        <h2>3. Collaboration & éthique numérique</h2>
        <ul class="list">
            <li><strong>Travail en équipe :</strong> partager les connaissances, documenter et mentorat.</li>
            <li><strong>Inclusivité :</strong> concevoir des interfaces accessibles et respectueuses.</li>
            <li><strong>Éthique de l'IA :</strong> refuser les usages malveillants, privilégier la transparence des algorithmes.</li>
        </ul>
    </article>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Engagements opérationnels</h2>
    <div class="two-column">
        <article class="card red-card">
            <h3>Check-list avant déploiement</h3>
            <ul class="list">
                <li>Revue de code croisée validée.</li>
                <li>Tests automatisés passés (CI/CD).</li>
                <li>Analyse SAST/DAST effectuée.</li>
                <li>Plan de rollback documenté.</li>
            </ul>
        </article>
        <article class="card red-card">
            <h3>Porte rouge : situations d'alerte</h3>
            <ul class="list">
                <li>Découverte d'une fraude ou d'un abus.</li>
                <li>Pression pour contourner des contrôles.</li>
                <li>Fuite de données non déclarée.</li>
            </ul>
            <p class="section-intro">Dans ces cas, je m'engage à alerter immédiatement la hiérarchie et, si nécessaire, les autorités compétentes.</p>
        </article>
    </div>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Charte d'utilisation des ressources</h2>
    <div class="card">
        <ul class="list">
            <li>Utiliser les ressources informatiques uniquement pour les projets autorisés.</li>
            <li>Adopter une hygiène numérique (mots de passe complexes, MFA, mises à jour régulières).</li>
            <li>Limiter l'empreinte environnementale (serveurs éco-efficients, sobriété des services).</li>
            <li>Respecter la propriété intellectuelle (licences open source, crédits).</li>
        </ul>
    </div>
</section>
@endsection
