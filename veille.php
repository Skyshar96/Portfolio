<?php 
$current_page = 'veille';
$page_title = 'Veille Cyber - Wyatt Guemache';
include 'includes/header-home.php'; 

// Articles statiques pour la cybersécurité
$articles = [
    [
        'title' => 'Zero Trust Architecture : Le Nouveau Paradigme de Sécurité',
        'description' => 'Le modèle Zero Trust révolutionne la sécurité en entreprise en éliminant la confiance implicite. Découvrez comment implémenter cette architecture pour protéger vos systèmes contre les menaces modernes.',
        'link' => 'https://www.cloudflare.com/learning/security/glossary/what-is-zero-trust/',
        'source' => 'Cloudflare',
        'date' => 'Mars 2026',
        'category' => 'Architecture',
        'tags' => ['Zero Trust', 'IAM', 'Network Security']
    ],
    [
        'title' => 'Ransomware : Les Nouvelles Techniques d\'Attaque en 2026',
        'description' => 'Les cybercriminels adoptent de nouvelles stratégies de ransomware incluant la double extortion et les attaques sur la supply chain. Analyse des menaces actuelles et bonnes pratiques de défense.',
        'link' => 'https://www.cert.ssi.gouv.fr/',
        'source' => 'CERT-FR',
        'date' => 'Mars 2026',
        'category' => 'Menaces',
        'tags' => ['Ransomware', 'Malware', 'Incident Response']
    ],
    [
        'title' => 'L\'IA Générative : Nouvelle Frontière de la Cybersécurité',
        'description' => 'L\'intelligence artificielle transforme la cybersécurité avec la détection automatisée des menaces, mais elle présente aussi de nouveaux risques. Explorez les opportunités et les défis de l\'IA en sécurité.',
        'link' => 'https://www.schneier.com/',
        'source' => 'Schneier on Security',
        'date' => 'Mars 2026',
        'category' => 'IA & Sécurité',
        'tags' => ['AI', 'Machine Learning', 'Threat Detection']
    ]
];
?>

<section class="projects-section page-section">
    <h2 class="section-title">
        Veille Documentaire Cybersécurité
        <span class="title-underline"></span>
    </h2>
    <p class="veille-intro">
        Découvrez les dernières actualités, tendances et articles en matière de cybersécurité.
    </p>
    
    <div class="projects-grid">
        <?php foreach ($articles as $article): ?>
            <div class="project-card">
                <div class="project-image-container">
                    <div class="project-overlay"></div>
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&h=400&fit=crop" 
                         alt="<?php echo htmlspecialchars($article['title']); ?>" 
                         class="project-image">
                </div>
                <div class="project-content">
                    <div class="article-meta">
                        <span class="article-date"><?php echo $article['date']; ?></span>
                        <span class="article-category"><?php echo $article['category']; ?></span>
                    </div>
                    <h3 class="project-title"><?php echo htmlspecialchars($article['title']); ?></h3>
                    <p class="project-description">
                        <?php echo htmlspecialchars($article['description']); ?>
                    </p>
                    <div class="project-tech">
                        <?php foreach ($article['tags'] as $tag): ?>
                            <span class="tech-badge"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="project-links">
                        <a href="<?php echo htmlspecialchars($article['link']); ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="project-link">
                            <i data-lucide="external-link"></i>
                            <span>Source: <?php echo $article['source']; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="veille-resources">
        <h3 class="section-title">
            Sources Recommandées
            <span class="title-underline"></span>
        </h3>
        <p class="resources-intro">
            Restez informé avec ces sources de confiance en cybersécurité
        </p>
        <div class="resources-grid">
            <a href="https://www.cert.ssi.gouv.fr" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="shield"></i>
                </div>
                <h4>CERT-FR</h4>
                <p>Centre gouvernemental de veille, d'alerte et de réponse aux attaques informatiques</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
            <a href="https://thehackernews.com" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="newspaper"></i>
                </div>
                <h4>The Hacker News</h4>
                <p>Actualités quotidiennes en cybersécurité</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
            <a href="https://www.bleepingcomputer.com" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="bug"></i>
                </div>
                <h4>BleepingComputer</h4>
                <p>News et tutoriels sur la sécurité informatique</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
            <a href="https://www.schneier.com" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="book-open"></i>
                </div>
                <h4>Schneier on Security</h4>
                <p>Blog de Bruce Schneier, expert en sécurité</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
