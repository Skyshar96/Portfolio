<?php 
$current_page = 'veille-quantique';
$page_title = 'Veille Informatique Quantique - Wyatt Guemache';
include 'includes/header-home.php'; 

// Articles statiques pour l'informatique quantique
$articles = [
    [
        'title' => 'IBM Dévoile son Processeur Quantique de 1000 Qubits',
        'description' => 'IBM franchit une étape majeure avec son processeur Condor à 1000 qubits, ouvrant de nouvelles possibilités pour la simulation moléculaire et l\'optimisation complexe. Cette avancée marque un tournant dans la course à l\'avantage quantique.',
        'link' => 'https://www.ibm.com/quantum',
        'source' => 'IBM Quantum',
        'date' => 'Mars 2026',
        'category' => 'Hardware',
        'tags' => ['IBM Quantum', 'Qubits', 'Processeurs']
    ],
    [
        'title' => 'Google Atteint la Suprématie Quantique avec Willow',
        'description' => 'Google annonce avoir atteint la correction d\'erreurs quantiques à grande échelle grâce à son nouveau processeur Willow. Cette percée résout l\'un des plus grands défis de l\'informatique quantique et rapproche les applications pratiques.',
        'link' => 'https://quantumai.google/',
        'source' => 'Google Quantum AI',
        'date' => 'Mars 2026',
        'category' => 'Recherche',
        'tags' => ['Google', 'Error Correction', 'Breakthrough']
    ],
    [
        'title' => 'Cryptographie Post-Quantique : Préparer la Transition',
        'description' => 'Avec l\'arrivée des ordinateurs quantiques, les méthodes de chiffrement actuelles deviennent vulnérables. Découvrez les nouveaux standards de cryptographie post-quantique et comment préparer vos systèmes pour cette transition inévitable.',
        'link' => 'https://csrc.nist.gov/projects/post-quantum-cryptography',
        'source' => 'NIST',
        'date' => 'Mars 2026',
        'category' => 'Sécurité',
        'tags' => ['Post-Quantum Crypto', 'NIST', 'Encryption']
    ]
];
?>

<section class="projects-section page-section">
    <h2 class="section-title">
        Veille Informatique Quantique
        <span class="title-underline"></span>
    </h2>
    <p class="veille-intro">
        Découvrez les dernières avancées, recherches et innovations en informatique quantique.
    </p>
    
    <div class="projects-grid">
        <?php foreach ($articles as $article): ?>
            <div class="project-card">
                <div class="project-image-container">
                    <div class="project-overlay"></div>
                    <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=600&h=400&fit=crop" 
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
            Restez informé avec ces sources de confiance en informatique quantique
        </p>
        <div class="resources-grid">
            <a href="https://www.ibm.com/quantum" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="cpu"></i>
                </div>
                <h4>IBM Quantum</h4>
                <p>Plateforme de recherche et développement en informatique quantique avec accès gratuit</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
            <a href="https://quantum.microsoft.com/" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="boxes"></i>
                </div>
                <h4>Azure Quantum</h4>
                <p>Solutions quantiques de Microsoft avec Q# et simulateurs quantiques</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
            <a href="https://quantumai.google/" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="atom"></i>
                </div>
                <h4>Google Quantum AI</h4>
                <p>Recherches de Google sur la suprématie quantique et les algorithmes</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
            <a href="https://arxiv.org/list/quant-ph/recent" target="_blank" rel="noopener noreferrer" class="resource-card">
                <div class="resource-icon-wrapper">
                    <i data-lucide="file-text"></i>
                </div>
                <h4>arXiv Quantum Physics</h4>
                <p>Publications scientifiques en physique quantique et informatique quantique</p>
                <span class="resource-link-indicator">
                    Visiter le site
                    <i data-lucide="arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
