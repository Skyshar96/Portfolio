<?php
$current_page = 'home';
$page_title = 'Wyatt Guemache - Portfolio';
include 'includes/header-home.php';
?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="hero-content">
        <div class="profile-container">
            <div class="profile-gradient"></div>
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop" alt="Profile" class="profile-image">
        </div>
        <div class="hero-text">
            <h1 class="hero-title">Wyatt Guemache</h1>
            <div class="hero-description">
                <p class="hero-intro">
                    Software engineer specializing in
                    <span class="highlight">JavaScript</span>,
                    <span class="highlight">Php</span>,
                    <span class="highlight">html</span> and
                    <span class="highlight">css</span>.
                </p>
            </div>
            <p class="hero-details">
                19 years old from France, coding since 2021. Student at Paul Sabatier. I love building modern web
                applications.
            </p>
            <p class="hero-contact">
                Reach out at
                <a href="mailto:guemachewyatt@gmail.com" class="email-link">guemachewyatt@gmail.com</a>
                or through my social channels.
            </p>
            <div class="social-links">
                <a href="https://github.com/Skyshar96" target="_blank" rel="noopener noreferrer" class="social-icon">
                    <i data-lucide="github"></i>
                </a>
                <a href="https://www.linkedin.com/in/wyatt-guemache-5710a2235/" target="_blank"
                    rel="noopener noreferrer" class="social-icon">
                    <i data-lucide="linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links to Other Sections -->
<section class="quick-links">
    <h2 class="section-title">
        Explore
        <span class="title-underline"></span>
    </h2>
    <div class="quick-links-grid">
        <a href="experience.php" class="quick-link-card">
            <div class="quick-link-icon">
                <i data-lucide="briefcase"></i>
            </div>
            <h3>Experience</h3>
            <p>Discover my professional journey and work history</p>
        </a>
        <a href="projects.php" class="quick-link-card">
            <div class="quick-link-icon">
                <i data-lucide="code"></i>
            </div>
            <h3>Projects</h3>
            <p>View my latest projects and creations</p>
        </a>
        <a href="contact.php" class="quick-link-card">
            <div class="quick-link-icon">
                <i data-lucide="mail"></i>
            </div>
            <h3>Contact</h3>
            <p>Get in touch with me for collaborations</p>
        </a>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>