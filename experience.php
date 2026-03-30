<?php 
$current_page = 'experience';
$page_title = 'Experience - Wyatt Guemache';
include 'includes/header-home.php'; 
?>

<section class="experience-section page-section">
    <h2 class="section-title">
        Experience
        <span class="title-underline"></span>
    </h2>
    <div class="experience-timeline">
        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo"><i data-lucide="graduation-cap"></i></span>
                    <div>
                        <h3 class="company-name">BTS SIO</h3>
                        <p class="job-title">Student</p>
                    </div>
                </div>
                <span class="job-period">2024 - 2026</span>
            </div>
            <p class="job-description">
                BTS Services Informatiques aux Organisations - Specializing in software development and IT infrastructure.
            </p>
        </div>

        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo"><i data-lucide="building"></i></span>
                    <div>
                        <h3 class="company-name">Real Estate Agency</h3>
                        <p class="job-title">Intern</p>
                    </div>
                </div>
                <span class="job-period">2024</span>
            </div>
            <p class="job-description">
                Internship at a real estate agency during my final year of high school (Terminale).
            </p>
        </div>

        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo"><i data-lucide="building"></i></span>
                    <div>
                        <h3 class="company-name">Real Estate Agency</h3>
                        <p class="job-title">Intern</p>
                    </div>
                </div>
                <span class="job-period">2023</span>
            </div>
            <p class="job-description">
                One-month internship at a real estate agency during my junior year (Première).
            </p>
        </div>
    </div>

    <div class="skills-section">
        <h2 class="section-title">
            Skills & Technologies
            <span class="title-underline"></span>
        </h2>
        <div class="skills-grid">
            <div class="skill-category">
                <h3>Frontend</h3>
                <div class="skill-tags">
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">CSS</span>
                    <span class="skill-tag">HTML</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Backend</h3>
                <div class="skill-tags">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">Java</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Tools & Others</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">VS Code</span>
                    <span class="skill-tag">Figma</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer-home.php'; ?>
