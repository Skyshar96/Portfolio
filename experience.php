<?php 
$current_page = 'experience';
$page_title = 'Experience - Wyatt Guemache';
include 'includes/header-home.php'; 
?>

<!-- Experience Section -->
<section class="experience-section page-section">
    <h2 class="section-title">
        Experience
        <span class="title-underline"></span>
    </h2>
    <div class="experience-timeline">
        <!-- Experience 1 -->
        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo">🎓</span>
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

        <!-- Experience 2 -->
        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo">🎓</span>
                    <div>
                        <h3 class="company-name">42 Perpignan (Piscine)</h3>
                        <p class="job-title">Candidate</p>
                    </div>
                </div>
                <span class="job-period">July 6 - July 31, 2026</span>
            </div>
            <p class="job-description">
                Intensive 4-week coding bootcamp (piscine) at 42 Perpignan. Selection process pending.
            </p>
        </div>

        <!-- Experience 3 -->
        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo">🎓</span>
                    <div>
                        <h3 class="company-name">42</h3>
                        <p class="job-title">Student</p>
                    </div>
                </div>
                <span class="job-period">November 2024 - August 2025</span>
            </div>
            <p class="job-description">
                Intensive coding program focusing on C, algorithms, and collaborative projects.
            </p>
        </div>

        <!-- Experience 4 -->
        <div class="experience-item">
            <div class="timeline-dot"></div>
            <div class="experience-header">
                <div class="experience-company">
                    <span class="company-logo">💻</span>
                    <div>
                        <h3 class="company-name">Freelance</h3>
                        <p class="job-title">Web Developer</p>
                    </div>
                </div>
                <span class="job-period">Coming Soon</span>
            </div>
            <p class="job-description">
                Freelance projects and collaborations - Stay tuned for updates!
            </p>
        </div>
    </div>

    <!-- Skills Section -->
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
