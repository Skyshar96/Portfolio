<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Wyatt Guemache - Portfolio'; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body>
    <div class="container">
        <div class="bg-decorative">
            <div class="bg-circle bg-circle-top"></div>
            <div class="bg-circle bg-circle-bottom"></div>
        </div>

        <div class="content-wrapper">
            <header id="header">
                <div class="logo">
                    <a href="index.php" class="logo-link">WG</a>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <nav id="mainNav">
                    <a href="index.php" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">Home</a>
                    <a href="experience.php" class="nav-link <?php echo ($current_page == 'experience') ? 'active' : ''; ?>">Experience</a>
                    <a href="projects.php" class="nav-link <?php echo ($current_page == 'projects') ? 'active' : ''; ?>">Projects</a>
                    <a href="veille.php" class="nav-link <?php echo ($current_page == 'veille') ? 'active' : ''; ?>">Cybersécurité</a>
                    <a href="veille-quantique.php" class="nav-link <?php echo ($current_page == 'veille-quantique') ? 'active' : ''; ?>">Quantique</a>
                    <a href="code-conduite.php" class="nav-link <?php echo ($current_page == 'code-conduite') ? 'active' : ''; ?>">Conduite</a>
                    <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact</a>
                </nav>
                <div class="header-actions">
                    <button class="lang-toggle" id="langToggle">us EN</button>
                </div>
            </header>
