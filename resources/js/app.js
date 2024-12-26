import './bootstrap';
import '../css/app.css';

// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && closeMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        // Close menu when clicking on mobile menu links
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = 'auto';
            });
        });
    }
});
