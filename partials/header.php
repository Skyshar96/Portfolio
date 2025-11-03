<?php
if (!isset($pageTitle)) {
    $pageTitle = "Portfolio BTS SIO";
}
if (!isset($currentPage)) {
    $currentPage = "";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>
    <header class="site-header" id="mainHeader">
        <div class="container">
            <div class="branding">
                <a href="/index.php" class="logo">BTS SIO — Mon Portfolio</a>
                <p class="tagline">Solutions Logicielles & Support aux Organisations</p>
            </div>
            <nav class="main-nav" aria-label="Navigation principale">
                <ul>
                    <li><a class="<?= $currentPage === 'home' ? 'active' : '' ?>" href="/index.php">Accueil</a></li>
                    <li><a class="<?= $currentPage === 'veille' ? 'active' : '' ?>" href="/veille.php">Veille techno</a></li>
                    <li><a class="<?= $currentPage === 'stages' ? 'active' : '' ?>" href="/stages.php">Stages</a></li>
                    <li><a class="<?= $currentPage === 'ethique' ? 'active' : '' ?>" href="/code_conduite.php">Code de conduite</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="site-main">
        <div class="container">
