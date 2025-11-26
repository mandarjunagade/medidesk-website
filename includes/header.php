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
                <!-- Online-Rezeption -->
                <li class="dropdown">
                    <a href="<?= $root; ?>online-rezeption">
                        Online-Rezeption
                    </a>
                </li>

                <!-- Fachrichtungen - MEGA MENU -->
                <li class="dropdown mega-menu-dropdown">
                    <a href="javascript:void(0)">
                        Fachrichtungen 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-grid">
                            <!-- Item 1 -->
                            <a href="<?= $root; ?>fachrichtungen/allgemeinmedizin" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-stethoscope"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Allgemeinmedizin</strong>
                                </div>
                            </a>

                            <!-- Item 2 -->
                            <a href="<?= $root; ?>fachrichtungen/innere-medizin" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-heart-pulse"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Innere Medizin</strong>
                                </div>
                            </a>

                            <!-- Item 3 -->
                            <a href="<?= $root; ?>fachrichtungen/radiologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-x-ray"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Radiologie</strong>
                                </div>
                            </a>

                            <!-- Item 4 -->
                            <a href="<?= $root; ?>fachrichtungen/onkologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-ribbon"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Onkologie</strong>
                                </div>
                            </a>

                            <!-- Item 5 -->
                            <a href="<?= $root; ?>fachrichtungen/kardiologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Kardiologie</strong>
                                </div>
                            </a>

                            <!-- Item 6 -->
                            <a href="<?= $root; ?>fachrichtungen/neurologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-brain"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Neurologie</strong>
                                </div>
                            </a>

                            <!-- Item 7 -->
                            <a href="<?= $root; ?>fachrichtungen/paediatrie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-baby"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Pädiatrie</strong>
                                </div>
                            </a>

                            <!-- Item 8 -->
                            <a href="<?= $root; ?>fachrichtungen/orthopaedie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-bone"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Orthopädie</strong>
                                </div>
                            </a>

                            <!-- Item 9 -->
                            <a href="<?= $root; ?>fachrichtungen/zahnmedizin" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-tooth"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Zahnmedizin</strong>
                                </div>
                            </a>

                            <!-- Item 10 -->
                            <a href="<?= $root; ?>fachrichtungen/dermatologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-hand-dots"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Dermatologie</strong>
                                </div>
                            </a>

                            <!-- Item 11 -->
                            <a href="<?= $root; ?>fachrichtungen/gynaekologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-venus"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Gynäkologie</strong>
                                </div>
                            </a>

                            <!-- Item 12 -->
                            <a href="<?= $root; ?>fachrichtungen/mvz-kliniken" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-hospital-user"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>MVZ & Kliniken</strong>
                                </div>
                            </a>

                            <!-- Item 13 -->
                            <a href="<?= $root; ?>fachrichtungen/physio-reha" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-hands-holding-circle"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Physio & Reha</strong>
                                </div>
                            </a>

                            <!-- Item 14 -->
                            <a href="<?= $root; ?>fachrichtungen/psychotherapie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-head-side-virus"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Psychotherapie</strong>
                                </div>
                            </a>

                            <!-- Item 15 -->
                            <a href="<?= $root; ?>fachrichtungen/chirurgie-op" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-scissors"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Chirurgische & OP-Zentren</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- Über uns -->
                <li class="dropdown">
                    <a href="<?= $root; ?>ueber-uns">
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
        console.log('Navigation script loaded');
        
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const menuIcon = menuToggle ? menuToggle.querySelector('i') : null;
        const dropdowns = document.querySelectorAll('.dropdown');

        console.log('Found elements:', {
            menuToggle: !!menuToggle,
            navMenu: !!navMenu,
            menuIcon: !!menuIcon,
            dropdownsCount: dropdowns.length
        });

        // Check if elements exist
        if (!menuToggle || !navMenu || !menuIcon) {
            console.error('Navigation elements not found!');
            return;
        }

        // Toggle mobile menu
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            console.log('Menu toggle clicked');
            toggleMenu();
        });

        function toggleMenu() {
            navMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
            
            if (navMenu.classList.contains('active')) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
                console.log('Menu opened');
            } else {
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                console.log('Menu closed');
            }
        }

        // Dropdown toggle for mobile - FIXED WITH LOGGING
        dropdowns.forEach((dropdown, index) => {
            const mainLink = dropdown.querySelector('> a');
            
            console.log(`Dropdown ${index}:`, {
                hasMegaMenu: dropdown.classList.contains('mega-menu-dropdown'),
                linkText: mainLink ? mainLink.textContent.trim() : 'no link'
            });
            
            if (mainLink) {
                mainLink.addEventListener('click', function(e) {
                    console.log('Dropdown clicked:', mainLink.textContent.trim());
                    console.log('Window width:', window.innerWidth);
                    
                    if (window.innerWidth <= 991) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        console.log('Mobile mode - toggling dropdown');
                        
                        // Check if already active
                        const wasActive = dropdown.classList.contains('active');
                        
                        // Close other dropdowns
                        dropdowns.forEach(other => {
                            if (other !== dropdown) {
                                other.classList.remove('active');
                                console.log('Closed other dropdown');
                            }
                        });
                        
                        // Toggle current dropdown
                        if (wasActive) {
                            dropdown.classList.remove('active');
                            console.log('Removed active class');
                        } else {
                            dropdown.classList.add('active');
                            console.log('Added active class');
                        }
                        
                        // Verify class was added
                        console.log('Dropdown classes after toggle:', dropdown.className);
                        console.log('Has active class:', dropdown.classList.contains('active'));
                        
                        // Check if mega menu is visible
                        const megaMenu = dropdown.querySelector('.mega-menu');
                        if (megaMenu) {
                            console.log('Mega menu found, computed style:', {
                                maxHeight: window.getComputedStyle(megaMenu).maxHeight,
                                overflow: window.getComputedStyle(megaMenu).overflow,
                                display: window.getComputedStyle(megaMenu).display
                            });
                        }
                    }
                });
            }
        });

        // Close menu on mega menu item click (mobile)
        document.querySelectorAll('.mega-menu-item').forEach(link => {
            link.addEventListener('click', function() {
                console.log('Mega menu item clicked');
                if (window.innerWidth <= 991) {
                    setTimeout(() => {
                        closeMenu();
                    }, 100);
                }
            });
        });

        function closeMenu() {
            console.log('Closing menu');
            navMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars');
            
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!navMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                if (navMenu.classList.contains('active')) {
                    console.log('Clicked outside, closing menu');
                    closeMenu();
                }
            }
        });

        // Close menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991 && navMenu.classList.contains('active')) {
                console.log('Window resized, closing menu');
                closeMenu();
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href !== '#' && href !== 'javascript:void(0)') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        const offset = 100;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                        
                        if (window.innerWidth <= 991) {
                            closeMenu();
                        }
                    }
                }
            });
        });

        console.log('Navigation script initialized successfully');
    });
</script>