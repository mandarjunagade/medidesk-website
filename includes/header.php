<div class="header">
    <div class="navbar">
        <nav class="nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <img src="<?= $root; ?>assets/img/logo.png" />
                </div>
                <span>MediDesk</span>
            </a>
            
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            
            <ul class="nav-menu">
                <li>
                    <a href="<?= $root; ?>">
                        Online-Rezeption 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= $root; ?>">
                        Fachrichtungen 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="<?= $root; ?>">
                        Über uns 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                </li>
            </ul>
            
            <a href="#kostenlos-testen" class="cta-button">Jetzt testen</a>
        </nav>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const menuIcon = menuToggle.querySelector('i');
        const navLinks = document.querySelectorAll('.nav-menu li a');

        // Toggle mobile menu
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });

        function toggleMenu() {
            navMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
            
            // FontAwesome icon change
            if (navMenu.classList.contains('active')) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark'); // close icon
            } else {
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars'); // menu icon
            }
        }

        // Close menu on link click (mobile only)
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 991) {
                    closeMenu();
                }
            });
        });

        function closeMenu() {
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars');
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!navMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                if (navMenu.classList.contains('active')) {
                    closeMenu();
                }
            }
        });

        // Close menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991 && navMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 100;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                }
            });
        });
    });
</script>
