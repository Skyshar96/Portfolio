<?php
$pageTitle = "Stages — Portfolio BTS SIO";
$currentPage = "stages";
include __DIR__ . "/partials/header.php";
?>
<section>
    <h1 class="section-title">Mes expériences en stage</h1>
    <p class="section-intro">Deux missions d'envergure qui m'ont permis d'appliquer les compétences du BTS SIO option SLAM et d'accélérer ma progression professionnelle.</p>
</section>
<section class="card-grid">
    <article class="card">
        <h2>Stage 1 — Développement d'un extranet client</h2>
        <p><strong>Organisation :</strong> Agence web NovaDigital (10 semaines)</p>
        <ul class="list">
            <li><strong>Contexte :</strong> refonte d'un extranet pour centraliser les demandes et suivre les projets.</li>
            <li><strong>Réalisations :</strong>
                <ul class="list" style="padding-left:1rem;">
                    <li>Architecture MVC en PHP 8 / Laravel 10.</li>
                    <li>Tableaux de bord dynamiques (Charts.js) et export PDF.</li>
                    <li>Authentification sécurisée (JWT, MFA par email).</li>
                </ul>
            </li>
            <li><strong>Compétences :</strong> conception base de données, API REST, gestion de projet agile.</li>
            <li><strong>Résultat :</strong> réduction de 40% des délais de traitement des demandes.</li>
        </ul>
        <div class="badge-list">
            <span class="badge">Laravel</span>
            <span class="badge">MySQL</span>
            <span class="badge">Tailwind</span>
        </div>
    </article>
    <article class="card">
        <h2>Stage 2 — Supervision & cybersécurité</h2>
        <p><strong>Organisation :</strong> DSI d'une collectivité locale (8 semaines)</p>
        <ul class="list">
            <li><strong>Contexte :</strong> renforcer la supervision réseau/serveurs et formaliser les procédures d'incident.</li>
            <li><strong>Réalisations :</strong>
                <ul class="list" style="padding-left:1rem;">
                    <li>Déploiement d'une stack monitoring (Zabbix + Grafana).</li>
                    <li>Scripts PowerShell/Bash pour l'automatisation des audits.</li>
                    <li>Plan de réponse à incident et fiches réflexes (phishing, ransomwares).</li>
                </ul>
            </li>
            <li><strong>Compétences :</strong> administration système, sécurité, reporting, conduite du changement.</li>
            <li><strong>Résultat :</strong> temps moyen de résolution d'incidents réduit à 2h.</li>
        </ul>
        <div class="badge-list">
            <span class="badge">Zabbix</span>
            <span class="badge">Grafana</span>
            <span class="badge">PowerShell</span>
        </div>
    </article>
</section>
<section style="margin-top:3rem;">
    <h2 class="section-title">Compétences consolidées</h2>
    <div class="two-column">
        <article class="card">
            <h3>Techniques</h3>
            <ul class="list">
                <li>Développement full-stack PHP / JS.</li>
                <li>Intégration continue (GitLab CI, Docker Compose).</li>
                <li>Sécurisation (gestion des accès, sauvegardes, PRA/PCA).</li>
            </ul>
        </article>
        <article class="card">
            <h3>Transverses</h3>
            <ul class="list">
                <li>Communication et vulgarisation pour les métiers.</li>
                <li>Gestion du temps et priorisation des incidents.</li>
                <li>Support utilisateurs et formation.</li>
            </ul>
        </article>
    </div>
</section>
<section style="margin-top:3rem;">
    <h2 class="section-title">Livrables clés</h2>
    <div class="card-grid">
        <article class="card">
            <h3>Dossier projet SLAM</h3>
            <p>Documentation complète du projet extranet : cahier des charges, spécifications, diagrammes UML, plan de tests.</p>
        </article>
        <article class="card">
            <h3>Rapport de sécurité</h3>
            <p>Analyse de risques, plan de remédiation, scripts d'automatisation et indicateurs de suivi pour la DSI.</p>
        </article>
    </div>
</section>
<?php
include __DIR__ . "/partials/footer.php";
?>
