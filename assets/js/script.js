document.addEventListener('DOMContentLoaded', function() {
    const translations = {
        fr: {
            'header.toggleMenu': 'Ouvrir/fermer le menu',
            'nav.home': 'Accueil',
            'nav.experience': 'Experience',
            'nav.projects': 'Projets',
            'nav.cyber': 'Cybersécurité',
            'nav.quantum': 'Quantique',
            'nav.conduct': 'Conduite',
            'nav.contact': 'Contact',

            'home.quickLinksTitle': 'Explorer',
            'home.quickExperienceDesc': 'Découvrez mon parcours professionnel et mes expériences',
            'home.quickProjectsDesc': 'Consultez mes derniers projets et réalisations',
            'home.quickContactDesc': 'Contactez-moi pour collaborer ensemble',

            'contact.intro': 'Intéressé par une collaboration ? N\'hésitez pas à me contacter pour discuter de votre projet.',
            'contact.name': 'Nom',
            'contact.email': 'Email',
            'contact.subject': 'Sujet',
            'contact.message': 'Message',
            'contact.submit': 'Envoyer le message',
            'contact.follow': 'Suivez-moi sur les réseaux sociaux',

            'veille.title': 'Veille Documentaire Cybersécurité',
            'veille.intro': 'Découvrez les dernières actualités, tendances et articles en matière de cybersécurité.',
            'veille.badgeCyber': 'Cybersécurité',
            'veille.badgeNews': 'Actualités',
            'veille.readArticle': 'Lire l\'article',
            'veille.save': 'Sauvegarder',
            'veille.sourcesTitle': 'Sources Recommandées',
            'veille.sourcesIntro': 'Restez informé avec ces sources de confiance en cybersécurité',
            'veille.visit': 'Visiter le site',

            'quantum.title': 'Veille Informatique Quantique',
            'quantum.intro': 'Découvrez les dernières avancées, recherches et innovations en informatique quantique.',
            'quantum.badgeResearch': 'Recherche',
            'quantum.readArticle': 'Lire l\'article',
            'quantum.save': 'Sauvegarder',
            'quantum.sourcesTitle': 'Sources Recommandées',
            'quantum.sourcesIntro': 'Restez informé avec ces sources de confiance en informatique quantique',
            'quantum.visit': 'Visiter le site',

            'conduct.title': 'Code de Conduite Professionnel',
            'conduct.intro': 'Les principes et valeurs qui guident ma pratique professionnelle en cybersécurité et développement.',
            'conduct.card1Category': 'Éthique',
            'conduct.card1Title': 'Intégrité et Honnêteté',
            'conduct.card1Desc': 'Agir avec transparence et honnêteté dans toutes les interactions professionnelles, en respectant les données confidentielles et la propriété intellectuelle.',
            'conduct.card2Category': 'Responsabilité',
            'conduct.card2Title': 'Usage Responsable des Compétences',
            'conduct.card2Desc': 'Utiliser mes compétences en sécurité informatique uniquement à des fins légales et éthiques, en respectant les lois et réglementations en vigueur.',
            'conduct.card3Category': 'Collaboration',
            'conduct.card3Title': 'Respect et Inclusion',
            'conduct.card3Desc': 'Favoriser un environnement de travail inclusif et respectueux, valorisant la diversité et encourageant la collaboration constructive.',
            'conduct.card4Category': 'Excellence',
            'conduct.card4Title': 'Formation Continue',
            'conduct.card4Desc': 'Maintenir et développer constamment mes compétences techniques pour offrir des solutions de qualité et rester à jour face aux menaces émergentes.',
            'conduct.card5Category': 'Sécurité',
            'conduct.card5Title': 'Protection des Données Personnelles',
            'conduct.card5Desc': 'Garantir la protection des données personnelles conformément au RGPD et aux meilleures pratiques de sécurité de l\'information.',
            'conduct.card6Category': 'Divulgation',
            'conduct.card6Title': 'Divulgation Responsable',
            'conduct.card6Desc': 'Suivre les principes de divulgation responsable lors de la découverte de vulnérabilités, en permettant aux organisations de corriger les failles avant toute publication.',
            'conduct.referencesTitle': 'Références et Codes de Conduite',
            'conduct.referencesIntro': 'Codes de conduite et chartes éthiques de référence en cybersécurité',
            'conduct.ref1Desc': 'Code d\'éthique officiel pour les professionnels certifiés en cybersécurité',
            'conduct.ref2Desc': 'Principes éthiques pour les hackers éthiques certifiés CEH',
            'conduct.ref3Desc': 'Règlement général sur la protection des données et ses obligations',
            'conduct.ref4Desc': 'Standard international pour la gestion de la sécurité de l\'information',
            'conduct.consult': 'Consulter',

            'home.heroIntro': 'Ingénieur logiciel spécialisé en JavaScript, Php, html et css.',
            'home.heroDetails': '19 ans, en France, je code depuis 2021. Étudiant à Paul Sabatier. J\'aime créer des applications web modernes.',
            'home.heroReach': 'Contactez-moi à',
            'home.heroReachSuffix': 'ou via mes réseaux sociaux.',
            'home.quickExperienceTitle': 'Expérience',
            'home.quickProjectsTitle': 'Projets',

            'experience.title': 'Expérience',
            'experience.jobStudent': 'Étudiant',
            'experience.jobCandidate': 'Candidat',
            'experience.jobWebDeveloper': 'Développeur Web',
            'experience.piscinePeriod': '6 juillet - 31 juillet 2026',
            'experience.soon': 'Bientôt',
            'experience.desc1': 'BTS Services Informatiques aux Organisations - spécialisation développement logiciel et infrastructure IT.',
            'experience.desc2': 'Bootcamp de code intensif de 4 semaines (piscine) à 42 Perpignan. Processus de sélection en cours.',
            'experience.desc3': 'Programme intensif de code axé sur le C, les algorithmes et les projets collaboratifs.',
            'experience.desc4': 'Projets freelance et collaborations - restez à l\'écoute pour les mises à jour.',
            'experience.skillsTitle': 'Compétences & Technologies',
            'experience.tools': 'Outils & Autres',

            'projects.title': 'Derniers Projets',
            'projects.code': 'Code',
            'projects.demo': 'Démo',
            'projects.p1Title': 'Mediaphone',
            'projects.p1Desc': 'Site vitrine local de reparation et assistance informatique a Pepieux avec presentation des services, produits et contact.',
            'projects.p2Title': 'Au PecheMignon',
            'projects.p2Desc': 'Site de boulangerie artisanale a Carcassonne presentant produits frais, savoir-faire local et informations de contact.',
            'projects.p3Title': 'Application Mobile Sociale',
            'projects.p3Desc': 'Application de réseau social avec messagerie instantanée et partage de contenu.',
            'projects.p4Title': 'Plateforme de Chatbot IA',
            'projects.p4Desc': 'Plateforme de chatbot intelligent alimentée par IA pour automatiser le support client.',
            'projects.p5Title': 'Application de Gestion de Tâches',
            'projects.p5Desc': 'Outil collaboratif de gestion de tâches avec mises à jour en temps réel et fonctionnalités d\'équipe.',
            'projects.p6Title': 'Créateur de Site Portfolio',
            'projects.p6Desc': 'Créateur de portfolio simple à utiliser avec des templates personnalisables.',

            'contact.socialGithubDesc': 'Consultez mon code et mes dépôts',
            'contact.socialLinkedInDesc': 'Connectez-vous avec moi professionnellement',
            'contact.sending': 'Envoi en cours...',
            'contact.successFallback': 'Message envoyé avec succès!',
            'contact.errorFallback': 'Une erreur est survenue. Veuillez réessayer.',

            'veille.fallbackDate': '15 Déc 2025',
            'veille.fallbackCategory': 'Architecture',
            'veille.fallbackTitle': 'L\'Architecture Zero Trust',
            'veille.fallbackDesc': 'Comprendre les principes fondamentaux du modèle Zero Trust et son importance dans la sécurité moderne des entreprises.',
            'veille.resource1Desc': 'Centre gouvernemental de veille, d\'alerte et de réponse aux attaques informatiques',
            'veille.resource2Desc': 'Actualités quotidiennes en cybersécurité',
            'veille.resource3Desc': 'News et tutoriels sur la sécurité informatique',
            'veille.resource4Desc': 'Blog de Bruce Schneier, expert en sécurité',

            'quantum.fallbackDate': '15 Déc 2025',
            'quantum.fallbackCategory': 'Recherche',
            'quantum.fallbackTitle': 'L\'Ordinateur Quantique à 1000 Qubits',
            'quantum.fallbackDesc': 'IBM annonce une avancée majeure avec son processeur quantique de 1000 qubits, ouvrant de nouvelles possibilités pour la recherche.',
            'quantum.resource1Desc': 'Plateforme de recherche et développement en informatique quantique avec accès gratuit',
            'quantum.resource2Desc': 'Solutions quantiques de Microsoft avec Q# et simulateurs quantiques',
            'quantum.resource3Desc': 'Recherches de Google sur la suprématie quantique et les algorithmes',
            'quantum.resource4Desc': 'Publications scientifiques en physique quantique et informatique quantique',

            'footer.rights': '© 2024 Wyatt Guemache. Tous droits réservés.'
            ,
            'title.index': 'Wyatt Guemache - Portfolio',
            'title.experience': 'Expérience - Wyatt Guemache',
            'title.projects': 'Projets - Wyatt Guemache',
            'title.contact': 'Contact - Wyatt Guemache',
            'title.veille': 'Veille Cyber - Wyatt Guemache',
            'title.quantum': 'Veille Informatique Quantique - Wyatt Guemache',
            'title.conduct': 'Code de Conduite - Wyatt Guemache'
        },
        en: {
            'header.toggleMenu': 'Toggle menu',
            'nav.home': 'Home',
            'nav.experience': 'Experience',
            'nav.projects': 'Projects',
            'nav.cyber': 'Cybersecurity',
            'nav.quantum': 'Quantum',
            'nav.conduct': 'Conduct',
            'nav.contact': 'Contact',

            'home.quickLinksTitle': 'Explore',
            'home.quickExperienceDesc': 'Discover my professional journey and work history',
            'home.quickProjectsDesc': 'View my latest projects and creations',
            'home.quickContactDesc': 'Get in touch with me for collaborations',

            'contact.intro': 'Interested in collaborating? Feel free to contact me to discuss your project.',
            'contact.name': 'Name',
            'contact.email': 'Email',
            'contact.subject': 'Subject',
            'contact.message': 'Message',
            'contact.submit': 'Send message',
            'contact.follow': 'Follow me on social media',

            'veille.title': 'Cybersecurity Watch',
            'veille.intro': 'Discover the latest cybersecurity news, trends, and articles.',
            'veille.badgeCyber': 'Cybersecurity',
            'veille.badgeNews': 'News',
            'veille.readArticle': 'Read article',
            'veille.save': 'Save',
            'veille.sourcesTitle': 'Recommended Sources',
            'veille.sourcesIntro': 'Stay informed with these trusted cybersecurity sources',
            'veille.visit': 'Visit site',

            'quantum.title': 'Quantum Computing Watch',
            'quantum.intro': 'Discover the latest breakthroughs, research, and innovation in quantum computing.',
            'quantum.badgeResearch': 'Research',
            'quantum.readArticle': 'Read article',
            'quantum.save': 'Save',
            'quantum.sourcesTitle': 'Recommended Sources',
            'quantum.sourcesIntro': 'Stay informed with these trusted quantum computing sources',
            'quantum.visit': 'Visit site',

            'conduct.title': 'Professional Code of Conduct',
            'conduct.intro': 'The principles and values that guide my professional practice in cybersecurity and development.',
            'conduct.card1Category': 'Ethics',
            'conduct.card1Title': 'Integrity and Honesty',
            'conduct.card1Desc': 'Act with transparency and honesty in all professional interactions, while respecting confidential data and intellectual property.',
            'conduct.card2Category': 'Responsibility',
            'conduct.card2Title': 'Responsible Use of Skills',
            'conduct.card2Desc': 'Use my cybersecurity skills only for legal and ethical purposes, while complying with applicable laws and regulations.',
            'conduct.card3Category': 'Collaboration',
            'conduct.card3Title': 'Respect and Inclusion',
            'conduct.card3Desc': 'Promote an inclusive and respectful work environment that values diversity and encourages constructive collaboration.',
            'conduct.card4Category': 'Excellence',
            'conduct.card4Title': 'Continuous Learning',
            'conduct.card4Desc': 'Continuously maintain and develop my technical skills to deliver quality solutions and stay current with emerging threats.',
            'conduct.card5Category': 'Security',
            'conduct.card5Title': 'Personal Data Protection',
            'conduct.card5Desc': 'Ensure personal data protection in accordance with GDPR and information security best practices.',
            'conduct.card6Category': 'Disclosure',
            'conduct.card6Title': 'Responsible Disclosure',
            'conduct.card6Desc': 'Follow responsible disclosure principles when discovering vulnerabilities, allowing organizations to remediate issues before publication.',
            'conduct.referencesTitle': 'References and Codes of Conduct',
            'conduct.referencesIntro': 'Reference ethics charters and codes of conduct in cybersecurity',
            'conduct.ref1Desc': 'Official code of ethics for certified cybersecurity professionals',
            'conduct.ref2Desc': 'Ethical principles for CEH certified ethical hackers',
            'conduct.ref3Desc': 'General Data Protection Regulation and its obligations',
            'conduct.ref4Desc': 'International standard for information security management',
            'conduct.consult': 'Open',

            'home.heroIntro': 'Software engineer specializing in JavaScript, Php, html and css.',
            'home.heroDetails': '19 years old from France, coding since 2021. Student at Paul Sabatier. I love building modern web applications.',
            'home.heroReach': 'Reach out at',
            'home.heroReachSuffix': 'or through my social channels.',
            'home.quickExperienceTitle': 'Experience',
            'home.quickProjectsTitle': 'Projects',

            'experience.title': 'Experience',
            'experience.jobStudent': 'Student',
            'experience.jobCandidate': 'Candidate',
            'experience.jobWebDeveloper': 'Web Developer',
            'experience.piscinePeriod': 'July 6 - July 31, 2026',
            'experience.soon': 'Coming Soon',
            'experience.desc1': 'BTS Services Informatiques aux Organisations - Specializing in software development and IT infrastructure.',
            'experience.desc2': 'Intensive 4-week coding bootcamp (piscine) at 42 Perpignan. Selection process pending.',
            'experience.desc3': 'Intensive coding program focusing on C, algorithms, and collaborative projects.',
            'experience.desc4': 'Freelance projects and collaborations - Stay tuned for updates!',
            'experience.skillsTitle': 'Skills & Technologies',
            'experience.tools': 'Tools & Others',

            'projects.title': 'Latest Projects',
            'projects.code': 'Code',
            'projects.demo': 'Demo',
            'projects.p1Title': 'Mediaphone',
            'projects.p1Desc': 'Local storefront website for computer and phone repair support in Pepieux, including services, products, and contact pages.',
            'projects.p2Title': 'Au PecheMignon',
            'projects.p2Desc': 'Artisan bakery website in Carcassonne showcasing fresh products, local craftsmanship, and contact information.',
            'projects.p3Title': 'Social Mobile App',
            'projects.p3Desc': 'Social networking application with instant messaging and content sharing.',
            'projects.p4Title': 'AI Chatbot Platform',
            'projects.p4Desc': 'Intelligent chatbot platform powered by AI for customer support automation.',
            'projects.p5Title': 'Task Management App',
            'projects.p5Desc': 'Collaborative task management tool with real-time updates and team features.',
            'projects.p6Title': 'Portfolio Website Builder',
            'projects.p6Desc': 'Easy-to-use portfolio website builder with customizable templates.',

            'contact.socialGithubDesc': 'Check out my code and repositories',
            'contact.socialLinkedInDesc': 'Connect with me professionally',
            'contact.sending': 'Sending...',
            'contact.successFallback': 'Message sent successfully!',
            'contact.errorFallback': 'An error occurred. Please try again.',

            'veille.fallbackDate': 'Dec 15, 2025',
            'veille.fallbackCategory': 'Architecture',
            'veille.fallbackTitle': 'Zero Trust Architecture',
            'veille.fallbackDesc': 'Understand the core principles of the Zero Trust model and why it matters in modern enterprise security.',
            'veille.resource1Desc': 'Government center for monitoring, alerting, and response to cyber attacks',
            'veille.resource2Desc': 'Daily cybersecurity news',
            'veille.resource3Desc': 'Security news and tutorials',
            'veille.resource4Desc': 'Bruce Schneier\'s security expert blog',

            'quantum.fallbackDate': 'Dec 15, 2025',
            'quantum.fallbackCategory': 'Research',
            'quantum.fallbackTitle': 'The 1000-Qubit Quantum Computer',
            'quantum.fallbackDesc': 'IBM announces a major breakthrough with its 1000-qubit quantum processor, opening new possibilities for research.',
            'quantum.resource1Desc': 'Quantum computing research and development platform with free access',
            'quantum.resource2Desc': 'Microsoft quantum solutions with Q# and quantum simulators',
            'quantum.resource3Desc': 'Google research on quantum supremacy and algorithms',
            'quantum.resource4Desc': 'Scientific publications in quantum physics and quantum computing',

            'footer.rights': '© 2024 Wyatt Guemache. All rights reserved.',
            'title.index': 'Wyatt Guemache - Portfolio',
            'title.experience': 'Experience - Wyatt Guemache',
            'title.projects': 'Projects - Wyatt Guemache',
            'title.contact': 'Contact - Wyatt Guemache',
            'title.veille': 'Cyber Watch - Wyatt Guemache',
            'title.quantum': 'Quantum Computing Watch - Wyatt Guemache',
            'title.conduct': 'Code of Conduct - Wyatt Guemache'
        }
    };

    const textBindings = [
        { selector: 'nav a[href="index.php"]', key: 'nav.home' },
        { selector: 'nav a[href="experience.php"]', key: 'nav.experience' },
        { selector: 'nav a[href="projects.php"]', key: 'nav.projects' },
        { selector: 'nav a[href="veille.php"]', key: 'nav.cyber' },
        { selector: 'nav a[href="veille-quantique.php"]', key: 'nav.quantum' },
        { selector: 'nav a[href="code-conduite.php"]', key: 'nav.conduct' },
        { selector: 'nav a[href="contact.php"]', key: 'nav.contact' },

        { selector: '.quick-links .section-title', key: 'home.quickLinksTitle', preserveChildren: true },
        { selector: '.hero-intro', key: 'home.heroIntro' },
        { selector: '.hero-details', key: 'home.heroDetails' },
        { selector: '.hero-contact', key: 'home.heroReach', preserveChildren: true },
        { selector: '.hero-contact', key: 'home.heroReachSuffix', preserveTailText: true },
        { selector: '.quick-link-card:nth-of-type(1) h3', key: 'home.quickExperienceTitle' },
        { selector: '.quick-link-card:nth-of-type(2) h3', key: 'home.quickProjectsTitle' },
        { selector: '.quick-link-card:nth-of-type(1) p', key: 'home.quickExperienceDesc' },
        { selector: '.quick-link-card:nth-of-type(2) p', key: 'home.quickProjectsDesc' },
        { selector: '.quick-link-card:nth-of-type(3) p', key: 'home.quickContactDesc' },

        { selector: '.experience-section .section-title', key: 'experience.title', preserveChildren: true, whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(1) .job-title', key: 'experience.jobStudent', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(2) .job-title', key: 'experience.jobCandidate', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(3) .job-title', key: 'experience.jobStudent', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(4) .job-title', key: 'experience.jobWebDeveloper', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(2) .job-period', key: 'experience.piscinePeriod', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(4) .job-period', key: 'experience.soon', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(1) .job-description', key: 'experience.desc1', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(2) .job-description', key: 'experience.desc2', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(3) .job-description', key: 'experience.desc3', whenPath: 'experience.php' },
        { selector: '.experience-item:nth-of-type(4) .job-description', key: 'experience.desc4', whenPath: 'experience.php' },
        { selector: '.skills-section .section-title', key: 'experience.skillsTitle', preserveChildren: true, whenPath: 'experience.php' },
        { selector: '.skill-category:nth-of-type(3) h3', key: 'experience.tools', whenPath: 'experience.php' },

        { selector: '.projects-section .section-title', key: 'projects.title', preserveChildren: true, whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(1) .project-title', key: 'projects.p1Title', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(1) .project-description', key: 'projects.p1Desc', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(2) .project-title', key: 'projects.p2Title', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(2) .project-description', key: 'projects.p2Desc', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(3) .project-title', key: 'projects.p3Title', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(3) .project-description', key: 'projects.p3Desc', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(4) .project-title', key: 'projects.p4Title', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(4) .project-description', key: 'projects.p4Desc', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(5) .project-title', key: 'projects.p5Title', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(5) .project-description', key: 'projects.p5Desc', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(6) .project-title', key: 'projects.p6Title', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-card:nth-of-type(6) .project-description', key: 'projects.p6Desc', whenPath: 'projects.php' },
        { selector: '.projects-grid .project-link:first-of-type span', key: 'projects.code', all: true, whenPath: 'projects.php' },
        { selector: '.projects-grid .project-link:last-of-type span', key: 'projects.demo', all: true, whenPath: 'projects.php' },

        { selector: '.contact-intro', key: 'contact.intro' },
        { selector: '.contact-section .section-title', key: 'nav.contact', preserveChildren: true, whenPath: 'contact.php' },
        { selector: 'label[for="name"]', key: 'contact.name' },
        { selector: 'label[for="email"]', key: 'contact.email' },
        { selector: 'label[for="subject"]', key: 'contact.subject' },
        { selector: 'label[for="message"]', key: 'contact.message' },
        { selector: '.social-link-large:nth-of-type(1) .social-info p', key: 'contact.socialGithubDesc', whenPath: 'contact.php' },
        { selector: '.social-link-large:nth-of-type(2) .social-info p', key: 'contact.socialLinkedInDesc', whenPath: 'contact.php' },
        { selector: '.submit-button', key: 'contact.submit' },
        { selector: '.social-section .social-title', key: 'contact.follow' },

        { selector: 'body .projects-section .section-title', key: 'veille.title', whenPath: 'veille.php', preserveChildren: true },
        { selector: '.veille-intro', key: 'veille.intro', whenPath: 'veille.php' },
        { selector: '.projects-section .project-tech .tech-badge:nth-of-type(1)', key: 'veille.badgeCyber', all: true, whenPath: 'veille.php' },
        { selector: '.projects-section .project-tech .tech-badge:nth-of-type(2)', key: 'veille.badgeNews', all: true, whenPath: 'veille.php' },
        { selector: '.projects-section .project-links .project-link:first-of-type span', key: 'veille.readArticle', all: true, whenPath: 'veille.php' },
        { selector: '.projects-section .project-links .bookmark-link span', key: 'veille.save', all: true, whenPath: 'veille.php' },
        { selector: '.project-card .article-date', key: 'veille.fallbackDate', whenPath: 'veille.php', requireSelector: '.project-link[href*="csoonline.com/article/zero-trust"]' },
        { selector: '.project-card .article-category', key: 'veille.fallbackCategory', whenPath: 'veille.php', requireSelector: '.project-link[href*="csoonline.com/article/zero-trust"]' },
        { selector: '.project-card .project-title', key: 'veille.fallbackTitle', whenPath: 'veille.php', requireSelector: '.project-link[href*="csoonline.com/article/zero-trust"]' },
        { selector: '.project-card .project-description', key: 'veille.fallbackDesc', whenPath: 'veille.php', requireSelector: '.project-link[href*="csoonline.com/article/zero-trust"]' },
        { selector: '.veille-resources .section-title', key: 'veille.sourcesTitle', whenPath: 'veille.php', preserveChildren: true },
        { selector: '.veille-resources .resources-intro', key: 'veille.sourcesIntro', whenPath: 'veille.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(1) p', key: 'veille.resource1Desc', whenPath: 'veille.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(2) p', key: 'veille.resource2Desc', whenPath: 'veille.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(3) p', key: 'veille.resource3Desc', whenPath: 'veille.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(4) p', key: 'veille.resource4Desc', whenPath: 'veille.php' },
        { selector: '.veille-resources .resource-link-indicator', key: 'veille.visit', all: true, whenPath: 'veille.php', preserveIcon: true },

        { selector: 'body .projects-section .section-title', key: 'quantum.title', whenPath: 'veille-quantique.php', preserveChildren: true },
        { selector: '.veille-intro', key: 'quantum.intro', whenPath: 'veille-quantique.php' },
        { selector: '.projects-section .project-tech .tech-badge:nth-of-type(2)', key: 'quantum.badgeResearch', all: true, whenPath: 'veille-quantique.php' },
        { selector: '.projects-section .project-links .project-link:first-of-type span', key: 'quantum.readArticle', all: true, whenPath: 'veille-quantique.php' },
        { selector: '.projects-section .project-links .bookmark-link span', key: 'quantum.save', all: true, whenPath: 'veille-quantique.php' },
        { selector: '.project-card .article-date', key: 'quantum.fallbackDate', whenPath: 'veille-quantique.php', requireSelector: '.project-link[href*="ibm.com/quantum"]' },
        { selector: '.project-card .article-category', key: 'quantum.fallbackCategory', whenPath: 'veille-quantique.php', requireSelector: '.project-link[href*="ibm.com/quantum"]' },
        { selector: '.project-card .project-title', key: 'quantum.fallbackTitle', whenPath: 'veille-quantique.php', requireSelector: '.project-link[href*="ibm.com/quantum"]' },
        { selector: '.project-card .project-description', key: 'quantum.fallbackDesc', whenPath: 'veille-quantique.php', requireSelector: '.project-link[href*="ibm.com/quantum"]' },
        { selector: '.veille-resources .section-title', key: 'quantum.sourcesTitle', whenPath: 'veille-quantique.php', preserveChildren: true },
        { selector: '.veille-resources .resources-intro', key: 'quantum.sourcesIntro', whenPath: 'veille-quantique.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(1) p', key: 'quantum.resource1Desc', whenPath: 'veille-quantique.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(2) p', key: 'quantum.resource2Desc', whenPath: 'veille-quantique.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(3) p', key: 'quantum.resource3Desc', whenPath: 'veille-quantique.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(4) p', key: 'quantum.resource4Desc', whenPath: 'veille-quantique.php' },
        { selector: '.veille-resources .resource-link-indicator', key: 'quantum.visit', all: true, whenPath: 'veille-quantique.php', preserveIcon: true },

        { selector: 'body .projects-section .section-title', key: 'conduct.title', whenPath: 'code-conduite.php', preserveChildren: true },
        { selector: '.veille-intro', key: 'conduct.intro', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(1) .article-category', key: 'conduct.card1Category', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(1) .project-title', key: 'conduct.card1Title', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(1) .project-description', key: 'conduct.card1Desc', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(2) .article-category', key: 'conduct.card2Category', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(2) .project-title', key: 'conduct.card2Title', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(2) .project-description', key: 'conduct.card2Desc', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(3) .article-category', key: 'conduct.card3Category', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(3) .project-title', key: 'conduct.card3Title', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(3) .project-description', key: 'conduct.card3Desc', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(4) .article-category', key: 'conduct.card4Category', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(4) .project-title', key: 'conduct.card4Title', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(4) .project-description', key: 'conduct.card4Desc', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(5) .article-category', key: 'conduct.card5Category', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(5) .project-title', key: 'conduct.card5Title', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(5) .project-description', key: 'conduct.card5Desc', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(6) .article-category', key: 'conduct.card6Category', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(6) .project-title', key: 'conduct.card6Title', whenPath: 'code-conduite.php' },
        { selector: '.projects-grid .project-card:nth-of-type(6) .project-description', key: 'conduct.card6Desc', whenPath: 'code-conduite.php' },
        { selector: '.veille-resources .section-title', key: 'conduct.referencesTitle', whenPath: 'code-conduite.php', preserveChildren: true },
        { selector: '.veille-resources .resources-intro', key: 'conduct.referencesIntro', whenPath: 'code-conduite.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(1) p', key: 'conduct.ref1Desc', whenPath: 'code-conduite.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(2) p', key: 'conduct.ref2Desc', whenPath: 'code-conduite.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(3) p', key: 'conduct.ref3Desc', whenPath: 'code-conduite.php' },
        { selector: '.resources-grid .resource-card:nth-of-type(4) p', key: 'conduct.ref4Desc', whenPath: 'code-conduite.php' },
        { selector: '.veille-resources .resource-link-indicator', key: 'conduct.consult', all: true, whenPath: 'code-conduite.php', preserveIcon: true },

        { selector: '.footer p', key: 'footer.rights', whenPath: 'index.php' },
        { selector: '.footer p', key: 'footer.rights', whenPath: 'experience.php' },
        { selector: '.footer p', key: 'footer.rights', whenPath: 'projects.php' },
        { selector: '.footer p', key: 'footer.rights', whenPath: 'contact.php' },
        { selector: '.footer p', key: 'footer.rights', whenPath: 'veille.php' },
        { selector: '.footer p', key: 'footer.rights', whenPath: 'veille-quantique.php' },
        { selector: '.footer p', key: 'footer.rights', whenPath: 'code-conduite.php' }
    ];

    const attrBindings = [
        { selector: '#mobileMenuToggle', attr: 'aria-label', key: 'header.toggleMenu' }
    ];

    function getCurrentPage() {
        const path = window.location.pathname || '';
        const normalizedPath = path.endsWith('/') ? path.slice(0, -1) : path;
        const fileName = normalizedPath.split('/').pop();
        return fileName || 'index.php';
    }

    function shouldApplyBinding(binding) {
        if (!binding.whenPath) {
            return !binding.requireSelector || !!document.querySelector(binding.requireSelector);
        }

        const pathMatch = getCurrentPage() === binding.whenPath;
        if (!pathMatch) {
            return false;
        }

        if (binding.requireSelector) {
            return !!document.querySelector(binding.requireSelector);
        }

        return true;
    }

    function applyLanguage(lang) {
        const currentLang = translations[lang] ? lang : 'fr';
        const dictionary = translations[currentLang];
        const currentPage = getCurrentPage();

        if (currentPage === 'index.php') document.title = dictionary['title.index'];
        if (currentPage === 'experience.php') document.title = dictionary['title.experience'];
        if (currentPage === 'projects.php') document.title = dictionary['title.projects'];
        if (currentPage === 'contact.php') document.title = dictionary['title.contact'];
        if (currentPage === 'veille.php') document.title = dictionary['title.veille'];
        if (currentPage === 'veille-quantique.php') document.title = dictionary['title.quantum'];
        if (currentPage === 'code-conduite.php') document.title = dictionary['title.conduct'];

        textBindings.forEach(binding => {
            if (!shouldApplyBinding(binding)) {
                return;
            }

            const elements = document.querySelectorAll(binding.selector);
            if (!elements.length) {
                return;
            }

            elements.forEach((element, index) => {
                if (!binding.all && index > 0) {
                    return;
                }

                const translatedText = dictionary[binding.key];
                if (translatedText) {
                    if (binding.preserveTailText) {
                        const emailLink = element.querySelector('a.email-link');
                        if (emailLink) {
                            element.innerHTML = dictionary['home.heroReach'] + '\n                ' + emailLink.outerHTML + '\n                ' + translatedText;
                            return;
                        }
                    }

                    if (binding.preserveIcon) {
                        const icon = element.querySelector('i[data-lucide]');
                        if (icon) {
                            const iconName = icon.getAttribute('data-lucide') || 'arrow-right';
                            element.innerHTML = translatedText + ' <i data-lucide="' + iconName + '"></i>';
                            if (window.lucide && typeof window.lucide.createIcons === 'function') {
                                window.lucide.createIcons();
                            }
                            return;
                        }
                    }

                    if (binding.preserveChildren) {
                        const children = Array.from(element.children);
                        element.textContent = translatedText;
                        if (children.length > 0) {
                            element.appendChild(document.createTextNode(' '));
                            children.forEach(child => element.appendChild(child));
                        }
                        return;
                    }

                    element.textContent = translatedText;
                }
            });
        });

        attrBindings.forEach(binding => {
            if (!shouldApplyBinding(binding)) {
                return;
            }

            const element = document.querySelector(binding.selector);
            if (!element) {
                return;
            }

            const translatedText = dictionary[binding.key];
            if (translatedText) {
                element.setAttribute(binding.attr, translatedText);
            }
        });

        const langToggle = document.getElementById('langToggle');
        if (langToggle) {
            langToggle.textContent = currentLang === 'en' ? 'fr FR' : 'us EN';
        }

        document.documentElement.lang = currentLang;
        localStorage.setItem('portfolio-lang', currentLang);
    }

    const navLinks = document.querySelectorAll('.nav-link');

    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mainNav = document.getElementById('mainNav');
    
    if (mobileMenuToggle && mainNav) {
        mobileMenuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mainNav.classList.toggle('active');
            document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
        });

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 900) {
                    mobileMenuToggle.classList.remove('active');
                    mainNav.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 900 && 
                mainNav.classList.contains('active') && 
                !mainNav.contains(event.target) && 
                !mobileMenuToggle.contains(event.target)) {
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 900 && mainNav.classList.contains('active')) {
                    mobileMenuToggle.classList.remove('active');
                    mainNav.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }, 250);
        });
    }

    const langToggle = document.getElementById('langToggle');
    const savedLang = localStorage.getItem('portfolio-lang') || 'fr';
    applyLanguage(savedLang);

    if (langToggle) {
        langToggle.addEventListener('click', function() {
            const currentLang = localStorage.getItem('portfolio-lang') || 'fr';
            const nextLang = currentLang === 'en' ? 'fr' : 'en';
            applyLanguage(nextLang);
        });
    }

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

    const animatedElements = document.querySelectorAll('.experience-item, .project-card, .quick-link-card, .skill-category');
    animatedElements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = `opacity 0.6s ease-out ${index * 0.1}s, transform 0.6s ease-out ${index * 0.1}s`;
        observer.observe(element);
    });

    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const activeLang = localStorage.getItem('portfolio-lang') || 'fr';
            const activeDictionary = translations[activeLang] || translations.fr;
            
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.textContent;
            submitButton.textContent = activeDictionary['contact.sending'] || 'Envoi en cours...';
            submitButton.disabled = true;

            try {
                const response = await fetch('../api/send_email.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    formMessage.textContent = result.message || activeDictionary['contact.successFallback'] || 'Message envoyé avec succès!';
                    formMessage.className = 'form-message success';
                    contactForm.reset();
                } else {
                    formMessage.textContent = result.message || activeDictionary['contact.errorFallback'] || 'Une erreur est survenue. Veuillez réessayer.';
                    formMessage.className = 'form-message error';
                }
            } catch (error) {
                console.error('Error:', error);
                formMessage.textContent = activeDictionary['contact.errorFallback'] || 'Une erreur est survenue. Veuillez réessayer.';
                formMessage.className = 'form-message error';
            } finally {
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;

                setTimeout(() => {
                    formMessage.style.display = 'none';
                }, 5000);
            }
        });
    }

    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const circles = document.querySelectorAll('.bg-circle');
        
        circles.forEach((circle, index) => {
            const speed = index === 0 ? 0.3 : 0.5;
            circle.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-0.5rem) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

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

    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        setTimeout(() => {
            document.body.style.transition = 'opacity 0.5s';
            document.body.style.opacity = '1';
        }, 100);
    });

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
    }

    console.log('%c👋 Hello Developer!', 'font-size: 20px; color: #22d3ee; font-weight: bold;');
    console.log('%cInterested in the code? Check out my GitHub!', 'font-size: 14px; color: #a3a3a3;');
});

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

document.querySelectorAll('.submit-button, .social-icon').forEach(button => {
    button.addEventListener('click', createRipple);
});

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

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
