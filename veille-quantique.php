<?php 
$current_page = 'veille-quantique';
$page_title = 'Veille Informatique Quantique - Wyatt Guemache';
include 'includes/header-home.php'; 
require_once 'api/rss_feed.php';

// Flux RSS pour l'informatique quantique
$rss_url = 'https://phys.org/rss-feed/quantum-physics/';
$articles = fetchRSSFeed($rss_url, 5);
?>

<!-- Veille Section -->
<section class="projects-section page-section">
    <h2 class="section-title">
        Veille Informatique Quantique
        <span class="title-underline"></span>
    </h2>
    <p class="veille-intro">
        Découvrez les dernières avancées, recherches et innovations en informatique quantique.
    </p>
    
    <div class="projects-grid">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $index => $article): ?>
                <div class="project-card">
                    <div class="project-image-container">
                        <div class="project-overlay"></div>
                        <img src="<?php echo getRandomImage('quantum'); ?>" 
                             alt="<?php echo htmlspecialchars($article['title']); ?>" 
                             class="project-image">
                    </div>
                    <div class="project-content">
                        <div class="article-meta">
                            <span class="article-date"><?php echo formatDate($article['pubDate']); ?></span>
                            <span class="article-category"><?php echo htmlspecialchars($article['category']); ?></span>
                        </div>
                        <h3 class="project-title"><?php echo htmlspecialchars($article['title']); ?></h3>
                        <p class="project-description">
                            <?php echo htmlspecialchars(stripHtmlTags($article['description'], 150)); ?>
                        </p>
                        <div class="project-tech">
                            <span class="tech-badge">Quantum Computing</span>
                            <span class="tech-badge">Recherche</span>
                        </div>
                        <div class="project-links">
                            <a href="<?php echo htmlspecialchars($article['link']); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="project-link">
                                <i data-lucide="external-link"></i>
                                <span>Lire l'article</span>
                            </a>
                            <a href="#" class="project-link bookmark-link">
                                <i data-lucide="bookmark"></i>
                                <span>Sauvegarder</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Articles de secours si le flux RSS n'est pas disponible -->
            <div class="project-card">
                <div class="project-image-container">
                    <div class="project-overlay"></div>
                    <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=600&h=400&fit=crop" 
                         alt="Quantum Computing" 
                         class="project-image">
                </div>
                <div class="project-content">
                    <div class="article-meta">
                        <span class="article-date">15 Déc 2025</span>
                        <span class="article-category">Recherche</span>
                    </div>
                    <h3 class="project-title">L'Ordinateur Quantique à 1000 Qubits</h3>
                    <p class="project-description">
                        IBM annonce une avancée majeure avec son processeur quantique de 1000 qubits, ouvrant de nouvelles possibilités pour la recherche.
                    </p>
                    <div class="project-tech">
                        <span class="tech-badge">IBM Quantum</span>
                        <span class="tech-badge">Qubits</span>
                        <span class="tech-badge">Hardware</span>
                    </div>
                    <div class="project-links">
                        <a href="https://www.ibm.com/quantum" target="_blank" rel="noopener noreferrer" class="project-link">
                            <i data-lucide="external-link"></i>
                            <span>Lire l'article</span>
                        </a>
                        <a href="#" class="project-link bookmark-link">
                            <i data-lucide="bookmark"></i>
                            <span>Sauvegarder</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Ressources supplémentaires -->
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
