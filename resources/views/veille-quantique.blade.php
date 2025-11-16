@extends('layouts.app')

@section('title', $pageTitle)

@section('content')
<section>
    <h1 class="section-title">Veille Technologique — Informatique Quantique</h1>
    <p class="section-intro">Suivi de l'actualité et des avancées en informatique quantique, une technologie qui va révolutionner le calcul informatique et la cryptographie.</p>
</section>

<section style="margin-top:2rem;">
    <h2 class="section-title">Pourquoi l'informatique quantique ?</h2>
    <div class="card">
        <p>L'informatique quantique représente une révolution technologique majeure qui pourrait transformer de nombreux domaines :</p>
        <ul class="list">
            <li><strong>Cryptographie :</strong> Menace pour les algorithmes actuels (RSA, ECC) et développement de la cryptographie post-quantique</li>
            <li><strong>Simulation :</strong> Modélisation de molécules et matériaux pour la recherche pharmaceutique et énergétique</li>
            <li><strong>Optimisation :</strong> Résolution de problèmes complexes en logistique, finance et intelligence artificielle</li>
            <li><strong>Sécurité :</strong> Nécessité d'anticiper l'impact sur la sécurité des systèmes d'information</li>
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
            <h3>Sites spécialisés</h3>
            <ul class="list">
                <li>MIT Technology Review - Quantum Computing</li>
                <li>Quantum Computing Report</li>
                <li>Nature - Quantum Information</li>
                <li>IEEE Spectrum - Quantum Computing</li>
            </ul>
        </article>
        <article class="card">
            <h3>Organisations</h3>
            <ul class="list">
                <li>IBM Quantum</li>
                <li>Google Quantum AI</li>
                <li>Microsoft Quantum</li>
                <li>Institut quantique - CNRS</li>
            </ul>
        </article>
    </div>
</section>
@endsection
