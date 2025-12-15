<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Wyatt Guemache - Portfolio'; ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Lucide Icons via CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="container">
        <!-- Background decorative elements -->
        <div class="bg-decorative">
            <div class="bg-circle bg-circle-top"></div>
            <div class="bg-circle bg-circle-bottom"></div>
        </div>

        <div class="content-wrapper">
            <!-- Header / Navigation -->
            <header id="header">
                <nav>
                    <a href="../index.php" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">home</a>
                    <a href="experience.php" class="nav-link <?php echo ($current_page == 'experience') ? 'active' : ''; ?>">experience</a>
                    <a href="projects.php" class="nav-link <?php echo ($current_page == 'projects') ? 'active' : ''; ?>">projects</a>
                    <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">contact</a>
                </nav>
                <div class="header-actions">
                    <button class="lang-toggle" id="langToggle">us EN</button>
                </div>
            </header>
