// Smooth scroll for navigation links
document.addEventListener('DOMContentLoaded', function() {
    // Navigation active state - already handled by PHP for multi-page
    const navLinks = document.querySelectorAll('.nav-link');

    // Language toggle
    const langToggle = document.getElementById('langToggle');
    if (langToggle) {
        let currentLang = 'en';
        
        langToggle.addEventListener('click', function() {
            currentLang = currentLang === 'en' ? 'fr' : 'en';
            this.textContent = currentLang === 'en' ? 'us EN' : 'fr FR';
            // Here you would implement actual language switching logic
            console.log(`Language switched to: ${currentLang}`);
        });
    }

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll('.experience-item, .project-card, .quick-link-card, .skill-category');
    animatedElements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = `opacity 0.6s ease-out ${index * 0.1}s, transform 0.6s ease-out ${index * 0.1}s`;
        observer.observe(element);
    });

    // Contact Form Handling
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);
            
            // Show loading state
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.textContent;
            submitButton.textContent = 'Envoi en cours...';
            submitButton.disabled = true;

            try {
                // Send form data to PHP - use send_email.php for handling
                const response = await fetch('../api/send_email.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    formMessage.textContent = result.message || 'Message envoyé avec succès!';
                    formMessage.className = 'form-message success';
                    contactForm.reset();
                } else {
                    formMessage.textContent = result.message || 'Une erreur est survenue. Veuillez réessayer.';
                    formMessage.className = 'form-message error';
                }
            } catch (error) {
                console.error('Error:', error);
                formMessage.textContent = 'Une erreur est survenue. Veuillez réessayer.';
                formMessage.className = 'form-message error';
            } finally {
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;

                // Hide message after 5 seconds
                setTimeout(() => {
                    formMessage.style.display = 'none';
                }, 5000);
            }
        });
    }

    // Parallax effect for background circles
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const circles = document.querySelectorAll('.bg-circle');
        
        circles.forEach((circle, index) => {
            const speed = index === 0 ? 0.3 : 0.5;
            circle.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Add hover effect to project cards
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-0.5rem) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Header transparency on scroll
    const header = document.getElementById('header');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.3)';
        } else {
            header.style.boxShadow = 'none';
        }

        lastScrollTop = scrollTop;
    });

    // Loading animation
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        setTimeout(() => {
            document.body.style.transition = 'opacity 0.5s';
            document.body.style.opacity = '1';
        }, 100);
    });

    // Add typing effect to hero title (optional)
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        let charIndex = 0;

        function typeWriter() {
            if (charIndex < text.length) {
                heroTitle.textContent += text.charAt(charIndex);
                charIndex++;
                setTimeout(typeWriter, 50);
            }
        }

        // Uncomment to enable typing effect
        // setTimeout(typeWriter, 500);
    }

    // Console message
    console.log('%c👋 Hello Developer!', 'font-size: 20px; color: #22d3ee; font-weight: bold;');
    console.log('%cInterested in the code? Check out my GitHub!', 'font-size: 14px; color: #a3a3a3;');
});

// Add ripple effect to buttons
function createRipple(event) {
    const button = event.currentTarget;
    const ripple = document.createElement('span');
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;

    ripple.style.width = ripple.style.height = `${diameter}px`;
    ripple.style.left = `${event.clientX - button.offsetLeft - radius}px`;
    ripple.style.top = `${event.clientY - button.offsetTop - radius}px`;
    ripple.classList.add('ripple');

    const ripples = button.getElementsByClassName('ripple');
    if (ripples.length > 0) {
        ripples[0].remove();
    }

    button.appendChild(ripple);
}

// Apply ripple to buttons
document.querySelectorAll('.submit-button, .social-icon').forEach(button => {
    button.addEventListener('click', createRipple);
});

// Add ripple styles dynamically
const style = document.createElement('style');
style.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    button {
        position: relative;
        overflow: hidden;
    }
`;
document.head.appendChild(style);

// Lazy loading for images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            }
        });
    });

    const images = document.querySelectorAll('img[data-src]');
    images.forEach(img => imageObserver.observe(img));
}

// Prevent form resubmission on page refresh
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
