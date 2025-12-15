<?php 
$current_page = 'experience';
$page_title = 'Experience - Wyatt Guemache';
include '../includes/header.php'; 
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
                    <span class="company-logo">🔒</span>
                    <div>
                        <h3 class="company-name">Askeal</h3>
                        <p class="job-title">Software Engineer Intern</p>
                    </div>
                </div>
                <span class="job-period">September 2025 - Now</span>
            </div>
            <p class="job-description">
                Developing advanced AI-powered cybersecurity solutions using TypeScript, NestJS, MongoDB, and MCP protocols. 
                Working directly with the CTO on AI architecture and intelligent product development.
            </p>
        </div>

        <!-- Experience 2 -->
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

        <!-- Experience 3 - You can add more -->
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
                <span class="job-period">2021 - 2024</span>
            </div>
            <p class="job-description">
                Developed various web applications and websites for clients. Specialized in React, TypeScript, and modern web technologies.
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
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Next.js</span>
                    <span class="skill-tag">TypeScript</span>
                    <span class="skill-tag">Tailwind CSS</span>
                    <span class="skill-tag">HTML/CSS</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Backend</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">NestJS</span>
                    <span class="skill-tag">Go</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">MongoDB</span>
                </div>
            </div>
            <div class="skill-category">
                <h3>Tools & Others</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">VS Code</span>
                    <span class="skill-tag">Figma</span>
                    <span class="skill-tag">AI/MCP</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
