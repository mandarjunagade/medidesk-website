<div class="header">
    <div class="navbar">
        <nav class="nav-container">
            <a href="<?= $root; ?>" class="logo">
                <div class="logo-icon">
                    <img src="<?= $root; ?>assets/img/logo.png" />
                </div>
                <span>MediDesk</span>
            </a>
            
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            
            <ul class="nav-menu">
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        Online-Rezeption 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        Fachrichtungen 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $root; ?>fachrichtungen/allgemeinmedizin">Allgemeinmedizin</a></li>
                        <li><a href="<?= $root; ?>fachrichtungen/innere-medizin">Innere Medizin</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        Über uns
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
            const dropdowns = document.querySelectorAll('.dropdown');

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

            // Dropdown toggle for mobile
            dropdowns.forEach(dropdown => {
                const mainLink = dropdown.querySelector('> a');
                
                mainLink.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        dropdown.classList.toggle('active');
                        
                        // Close other dropdowns
                        dropdowns.forEach(other => {
                            if (other !== dropdown) {
                                other.classList.remove('active');
                            }
                        });
                    }
                });
            });

            // Close menu on link click (mobile only) - for dropdown items
            document.querySelectorAll('.dropdown-menu li a').forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 991) {
                        closeMenu();
                        // Close all dropdowns
                        dropdowns.forEach(dropdown => {
                            dropdown.classList.remove('active');
                        });
                    }
                });
            });

            function closeMenu() {
                navMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                
                // Close all dropdowns when menu closes
                dropdowns.forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
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