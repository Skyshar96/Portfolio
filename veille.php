<?php 
$current_page = 'veille';
$page_title = 'Veille Cyber - Wyatt Guemache';
include 'includes/header-home.php'; 
require_once 'api/rss_feed.php';

// Flux RSS pour la cybersécurité
$rss_url = 'https://www.bleepingcomputer.com/feed/';
$articles = fetchRSSFeed($rss_url, 5);
?>

<!-- Veille Section -->
<section class="projects-section page-section">
    <h2 class="section-title">
        Veille Documentaire Cybersécurité
        <span class="title-underline"></span>
    </h2>
    <p class="veille-intro">
        Découvrez les dernières actualités, tendances et articles en matière de cybersécurité.
    </p>
    
    <div class="projects-grid">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $index => $article): ?>
                <div class="project-card">
                    <div class="project-image-container">
                        <div class="project-overlay"></div>
                        <img src="<?php echo getRandomImage('cyber'); ?>" 
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
                            <span class="tech-badge">Cybersécurité</span>
                            <span class="tech-badge">Actualités</span>
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
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&h=400&fit=crop" 
                         alt="Zero Trust Security" 
                         class="project-image">
                </div>
                <div class="project-content">
                    <div class="article-meta">
                        <span class="article-date">15 Déc 2025</span>
                        <span class="article-category">Architecture</span>
                    </div>
                    <h3 class="project-title">L'Architecture Zero Trust</h3>
                    <p class="project-description">
                        Comprendre les principes fondamentaux du modèle Zero Trust et son importance dans la sécurité moderne des entreprises.
                    </p>
                    <div class="project-tech">
                        <span class="tech-badge">Zero Trust</span>
                        <span class="tech-badge">IAM</span>
                        <span class="tech-badge">Network Security</span>
                    </div>
                    <div class="project-links">
                        <a href="https://www.csoonline.com/article/zero-trust" target="_blank" rel="noopener noreferrer" class="project-link">
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
