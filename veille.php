<?php
$pageTitle = "Veille technologique — Portfolio BTS SIO";
$currentPage = "veille";
include __DIR__ . "/partials/header.php";
?>
<section>
    <h1 class="section-title">Veille technologique : Informatique quantique & cybersécurité</h1>
    <p class="section-intro">Je mène une veille régulière sur les ruptures technologiques qui transforment la manière de concevoir et de sécuriser les systèmes d'information. Voici les tendances majeures que je surveille sur les 6 derniers mois.</p>
</section>
<section class="two-column" style="margin-bottom:3rem;">
    <article class="card">
        <h2>Informatique quantique</h2>
        <p>Les avancées récentes montrent que les premiers algorithmes quantiques utiles émergent pour l'optimisation, la chimie et la cryptanalyse. Les constructeurs (IBM, IonQ, Google) proposent désormais des processeurs > 100 qubits stables.</p>
        <ul class="list">
            <li><strong>Enjeux :</strong> menace sur les algorithmes RSA/ECC, besoin de cryptographie post-quantique.</li>
            <li><strong>Tendance 2025 :</strong> standardisation NIST des algorithmes (Kyber, Dilithium), premiers pilotes industriels.</li>
            <li><strong>Ressources :</strong> newsletters <em>Quantum Zeitgeist</em>, <em>Le Monde Informatique</em>, conférences Q2B.</li>
        </ul>
    </article>
    <article class="card">
        <h2>Cybersécurité</h2>
        <p>La sophistication des attaques (ransomware, supply chain, IA générative) impose une stratégie Zero Trust et une automatisation accrue de la détection.</p>
        <ul class="list">
            <li><strong>Enjeux :</strong> XDR, automatisation SOAR, conformité NIS2.</li>
            <li><strong>Tendance 2025 :</strong> authentification passwordless, chiffrement homomorphique, IA pour l'analyse des journaux.</li>
            <li><strong>Ressources :</strong> CERT-FR, Zataz, Mitre ATT&CK, podcasts CSF.</li>
        </ul>
    </article>
</section>
<section style="margin-bottom:3rem;">
    <h2 class="section-title">Actions engagées</h2>
    <div class="card-grid">
        <article class="card">
            <h3>Tests de cryptographie post-quantique</h3>
            <p>Prototype PHP expérimentant les bibliothèques PQClean pour anticiper la migration vers des schémas résistants au quantique.</p>
            <p><strong>Objectif :</strong> comparer les performances et l'impact sur l'expérience utilisateur.</p>
        </article>
        <article class="card">
            <h3>Tableau de bord de cyberveille</h3>
            <p>Automatisation via scripts Python + API RSS (CERT-FR, ANSSI) pour agréger les alertes critiques liées aux infrastructures surveillées.</p>
        </article>
        <article class="card">
            <h3>Formation continue</h3>
            <p>Participation aux MOOC ANSSI « SecNumacadémie » et suivi d'ateliers sur la cryptanalyse quantique.</p>
        </article>
    </div>
</section>
<section>
    <h2 class="section-title">Plan d'action</h2>
    <div class="timeline">
        <article class="timeline-item">
            <h3>T1 2025 — Audit des dépendances</h3>
            <p>Cartographier les bibliothèques utilisées dans les projets pour planifier la migration vers des alternatives post-quantiques.</p>
        </article>
        <article class="timeline-item">
            <h3>T2 2025 — Déploiement Zero Trust</h3>
            <p>Mise en place d'une architecture réseau segmentée, SSO et MFA avancée pour un SI associatif.</p>
        </article>
        <article class="timeline-item">
            <h3>T3 2025 — Sensibilisation utilisateurs</h3>
            <p>Ateliers phishing et bonnes pratiques, intégration d'indicateurs cybersécurité dans les comités IT.</p>
        </article>
    </div>
</section>
<?php
include __DIR__ . "/partials/footer.php";
?>
