<?php 
$current_page = 'contact';
$page_title = 'Contact - Wyatt Guemache';
include 'header.php'; 
?>

<!-- Contact Section -->
<section class="contact-section page-section">
    <h2 class="section-title">
        Contact
        <span class="title-underline"></span>
    </h2>
    <div class="contact-container">
        <p class="contact-intro">
            Interested in collaborating? Feel free to contact me to discuss your project.
        </p>
        <div class="contact-methods">
            <div class="contact-item">
                <div class="contact-icon">
                    <i data-lucide="mail"></i>
                </div>
                <a href="mailto:mathisdev7@gmail.com" class="contact-text">mathisdev7@gmail.com</a>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i data-lucide="map-pin"></i>
                </div>
                <span class="contact-text">Paris, France</span>
            </div>
            <div class="contact-item">
                <div class="contact-icon">
                    <i data-lucide="phone"></i>
                </div>
                <span class="contact-text">+33 X XX XX XX XX</span>
            </div>
        </div>
        
        <!-- Contact Form -->
        <form id="contactForm" class="contact-form">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <button type="submit" class="submit-button">Envoyer le message</button>
            <div id="formMessage" class="form-message"></div>
        </form>
    </div>

    <!-- Social Media Links -->
    <div class="social-section">
        <h3 class="social-title">Suivez-moi sur les réseaux sociaux</h3>
        <div class="social-links-large">
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="social-link-large">
                <div class="social-icon-large">
                    <i data-lucide="github"></i>
                </div>
                <div class="social-info">
                    <h4>GitHub</h4>
                    <p>Check out my code and repositories</p>
                </div>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-link-large">
                <div class="social-icon-large">
                    <i data-lucide="linkedin"></i>
                </div>
                <div class="social-info">
                    <h4>LinkedIn</h4>
                    <p>Connect with me professionally</p>
                </div>
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social-link-large">
                <div class="social-icon-large">
                    <i data-lucide="twitter"></i>
                </div>
                <div class="social-info">
                    <h4>Twitter</h4>
                    <p>Follow my updates and thoughts</p>
                </div>
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
