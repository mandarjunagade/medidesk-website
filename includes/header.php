<!-- ========== PASTE THIS COMPLETE CODE REPLACING YOUR CURRENT NAVIGATION ========== -->

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
                <li class="dropdown mega-menu-dropdown" id="fachrichtungen-dropdown">
                    <a href="javascript:void(0)" id="fachrichtungen-link">
                        Fachrichtungen 
                        <i class="fa fa-chevron-down dropdown-icon"></i>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-grid">
                            <a href="<?= $root; ?>fachrichtungen/allgemeinmedizin" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-stethoscope"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Allgemeinmedizin</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/innere-medizin" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-heart-pulse"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Innere Medizin</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/radiologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-x-ray"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Radiologie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/onkologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-ribbon"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Onkologie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/kardiologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Kardiologie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/neurologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-brain"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Neurologie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/paediatrie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-baby"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Pädiatrie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/orthopaedie/" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-bone"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Orthopädie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/zahnmedizin" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-tooth"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Zahnmedizin</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/dermatologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-hand-dots"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Dermatologie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/gynaekologie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-venus"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Gynäkologie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/mvz_kliniken" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-hospital-user"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>MVZ & Kliniken</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/physio_reha" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-hands-holding-circle"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Physio & Reha</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/psychotherapie" class="mega-menu-item">
                                <div class="mega-item-icon">
                                    <i class="fa-solid fa-head-side-virus"></i>
                                </div>
                                <div class="mega-item-text">
                                    <strong>Psychotherapie</strong>
                                </div>
                            </a>

                            <a href="<?= $root; ?>fachrichtungen/chirurgische_opzentren" class="mega-menu-item">
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

<!-- ========== ULTRA SIMPLE JAVASCRIPT - GUARANTEED TO WORK ========== -->
<script>
(function() {
    'use strict';
    
    console.log('🔥 Navigation script starting...');
    
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    function init() {
        console.log('✅ DOM Ready - Initializing navigation...');
        
        // Get elements
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const menuIcon = menuToggle?.querySelector('i');
        const fachrichtungenDropdown = document.getElementById('fachrichtungen-dropdown');
        const fachrichtungenLink = document.getElementById('fachrichtungen-link');
        
        console.log('Elements found:', {
            menuToggle: !!menuToggle,
            navMenu: !!navMenu,
            menuIcon: !!menuIcon,
            fachrichtungenDropdown: !!fachrichtungenDropdown,
            fachrichtungenLink: !!fachrichtungenLink
        });
        
        if (!menuToggle || !navMenu || !menuIcon) {
            console.error('❌ Required elements not found!');
            return;
        }
        
        // ========== HAMBURGER MENU TOGGLE ==========
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('🍔 Hamburger clicked');
            
            const isOpen = navMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open', isOpen);
            
            if (isOpen) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
                console.log('✅ Menu opened');
            } else {
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                // Close all dropdowns
                document.querySelectorAll('.dropdown').forEach(d => {
                    d.classList.remove('active');
                });
                console.log('✅ Menu closed');
            }
        });
        
        // ========== FACHRICHTUNGEN DROPDOWN TOGGLE ==========
        if (fachrichtungenLink && fachrichtungenDropdown) {
            // Click event
            fachrichtungenLink.addEventListener('click', function(e) {
                console.log('🖱️ Fachrichtungen clicked!');
                
                // Only prevent default and toggle on mobile
                if (window.innerWidth <= 991) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const isActive = fachrichtungenDropdown.classList.toggle('active');
                    console.log(isActive ? '📂 Dropdown OPENED' : '📴 Dropdown CLOSED');
                    
                    // Visual feedback in console
                    console.log('Dropdown state:', {
                        hasActiveClass: fachrichtungenDropdown.classList.contains('active'),
                        maxHeight: window.getComputedStyle(fachrichtungenDropdown.querySelector('.mega-menu')).maxHeight
                    });
                }
            });
            
            // Touch event for mobile devices
            fachrichtungenLink.addEventListener('touchend', function(e) {
                console.log('👆 Touch event triggered');
                
                if (window.innerWidth <= 991) {
                    e.preventDefault();
                    fachrichtungenDropdown.classList.toggle('active');
                    console.log('Touch toggle complete');
                }
            }, { passive: false });
            
            console.log('✅ Fachrichtungen dropdown listeners attached');
        } else {
            console.error('❌ Fachrichtungen elements not found!');
        }
        
        // ========== CLOSE ON OUTSIDE CLICK ==========
        document.addEventListener('click', function(e) {
            if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    document.body.classList.remove('menu-open');
                    menuIcon.classList.remove('fa-xmark');
                    menuIcon.classList.add('fa-bars');
                    document.querySelectorAll('.dropdown').forEach(d => {
                        d.classList.remove('active');
                    });
                    console.log('👆 Clicked outside - menu closed');
                }
            }
        });
        
        // ========== CLOSE ON RESIZE ==========
        window.addEventListener('resize', function() {
            if (window.innerWidth > 991 && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                console.log('📐 Resized - menu closed');
            }
        });
        
        console.log('🎉 Navigation initialized successfully!');
    }
})();
</script>

<!-- ========== INLINE CSS FIX (TEMPORARY DEBUG) ========== -->
<style>
/* This will override any conflicting styles */
@media (max-width: 991px) {
    .mega-menu {
        position: static !important;
        width: 100% !important;
        max-width: none !important;
        transform: none !important;
        opacity: 1 !important;
        visibility: visible !important;
        box-shadow: none !important;
        border-radius: 12px !important;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        background: #f8fafc !important;
        border: none !important;
        padding: 0 !important;
        max-height: 0 !important;
        overflow: hidden !important;
        transition: max-height 0.4s ease !important;
    }

    .mega-menu-dropdown.active .mega-menu {
        max-height: 2500px !important;
        padding: 20px 15px !important;
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .mega-menu-grid {
        grid-template-columns: 1fr !important;
        gap: 8px !important;
    }

    .mega-menu-item {
        padding: 12px 15px !important;
        animation: none !important;
    }

    .mega-menu-dropdown > a .dropdown-icon {
        transform: rotate(0deg) !important;
        transition: transform 0.3s ease !important;
    }

    .mega-menu-dropdown.active > a .dropdown-icon {
        transform: rotate(180deg) !important;
    }
}
</style>