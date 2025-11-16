@extends('layouts.app')

@section('title', $pageTitle)

@section('content')
<section>
    <h1 class="section-title">Veille Technologique — Cybersécurité</h1>
    <p class="section-intro">Suivi des menaces, vulnérabilités et actualités en cybersécurité pour rester informé des dernières tendances et bonnes pratiques.</p>
</section>

<section style="margin-top:2rem;">
    <h2 class="section-title">Pourquoi la cybersécurité ?</h2>
    <div class="card">
        <p>La cybersécurité est devenue un enjeu majeur pour toutes les organisations dans un monde de plus en plus connecté :</p>
        <ul class="list">
            <li><strong>Menaces croissantes :</strong> Ransomwares, phishing, attaques DDoS, compromission de la supply chain</li>
            <li><strong>Protection des données :</strong> RGPD, confidentialité des données personnelles et professionnelles</li>
            <li><strong>Sécurité des applications :</strong> Développement sécurisé, tests de pénétration, détection de vulnérabilités</li>
            <li><strong>Conformité :</strong> Normes ISO 27001, NIS2, certification et audits de sécurité</li>
        </ul>
    </div>
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Derniers articles</h2>
    
    @if(count($articles) > 0)
        <div class="articles-grid">
            @foreach($articles as $article)
                <article class="article-card">
                    @if($article['image'])
                        <div class="article-image">
                            <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" loading="lazy">
                        </div>
                    @endif
                    <div class="article-content">
                        <span class="article-date">{{ $article['pubDate'] }}</span>
                        <h3 class="article-title">
                            <a href="{{ $article['link'] }}" target="_blank" rel="noopener noreferrer">
                                {{ $article['title'] }}
                            </a>
                        </h3>
                        <p class="article-description">{{ $article['description'] }}</p>
                        <a href="{{ $article['link'] }}" target="_blank" rel="noopener noreferrer" class="article-link">
                            Lire l'article →
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div class="card">
            <p>Aucun article disponible pour le moment. Le flux RSS pourrait être temporairement indisponible.</p>
        </div>
    @endif
</section>

<section style="margin-top:3rem;">
    <h2 class="section-title">Mes sources de veille</h2>
    <div class="two-column">
        <article class="card">
            <h3>Organismes officiels</h3>
            <ul class="list">
                <li>CERT-FR (ANSSI)</li>
                <li>CISA - Cybersecurity Alerts</li>
                <li>MITRE ATT&CK</li>
                <li>OWASP</li>
            </ul>
        </article>
        <article class="card">
            <h3>Médias spécialisés</h3>
            <ul class="list">
                <li>Zataz</li>
                <li>Le Monde Informatique</li>
                <li>Krebs on Security</li>
                <li>BleepingComputer</li>
            </ul>
        </article>
    </div>
</section>
@endsection
