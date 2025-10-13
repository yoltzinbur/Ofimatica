
        // Initialize Lucide icons
        lucide.createIcons();

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileNav = document.getElementById('mobile-nav');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            mobileNav.classList.toggle('active');
            
            if (mobileNav.classList.contains('active')) {
                menuIcon.style.display = 'none';
                closeIcon.style.display = 'block';
            } else {
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        }

        // Smooth scroll to section
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
                // Close mobile menu if open
                const mobileNav = document.getElementById('mobile-nav');
                if (mobileNav.classList.contains('active')) {
                    toggleMobileMenu();
                }
            }
        }

        // Scroll to top
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Accordion toggle
        function toggleAccordion(trigger) {
            const content = trigger.nextElementSibling;
            const icon = trigger.querySelector('[data-lucide="chevron-down"]');
            const isActive = content.classList.contains('active');
            
            // Close all other accordions in the same section
            const section = trigger.closest('.topic-section');
            const allContents = section.querySelectorAll('.accordion-content');
            const allIcons = section.querySelectorAll('.accordion-trigger [data-lucide="chevron-down"]');
            
            allContents.forEach(c => c.classList.remove('active'));
            allIcons.forEach(i => i.style.transform = 'rotate(0deg)');
            
            // Toggle current accordion
            if (!isActive) {
                content.classList.add('active');
                icon.style.transform = 'rotate(180deg)';
            }
        }

        // Add scroll animations
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-fade-in, .animate-slide-up');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        // Initialize animations
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileNav = document.getElementById('mobile-nav');
            const menuButton = document.querySelector('.menu-button');
            
            if (mobileNav.classList.contains('active') && 
                !mobileNav.contains(event.target) && 
                !menuButton.contains(event.target)) {
                toggleMobileMenu();
            }
        });
   

