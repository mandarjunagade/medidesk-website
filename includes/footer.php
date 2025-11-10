	<!-- ============= FOOTER SECTION START ============= -->
    <?php include 'includes/testen-popup.php'; ?>
    <div class="footer-wrapper">
        <footer class="footer">
            <div class="footer-container">
                
                <!-- Main Footer Content -->
                <div class="row">
                    <!-- Column 1: About -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="footer-logo">
                            <a href="#" class="logo">
                                <div class="logo-icon">
                                    <img src="<?= $root; ?>assets/img/logo.png" />
                                </div>
                                <span>MediDesk</span>
                            </a>
                        </div>
                        <p class="footer-description">
                            Die digitale Online-Rezeption für Praxen, Kliniken & Therapiepraxen. 
                            Strukturierte Patientenanfragen ohne Telefonklingeln.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h4 class="footer-heading">Produkt</h4>
                        <ul class="footer-links">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Preise</a></li>
                            <li><a href="#">Demo ansehen</a></li>
                            <li><a href="#">Integration</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Resources -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h4 class="footer-heading">Ressourcen</h4>
                        <ul class="footer-links">
                            <li><a href="#">Hilfe Center</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <h4 class="footer-heading">Kontakt</h4>
                        <div class="contact-item">
                            <i class="fa fa-envelope"></i>
                            <span>info@medidesk.de</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-phone"></i>
                            <span>+49 (0) 123 456789</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>Musterstraße 123<br>12345 Berlin, Deutschland</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <p class="footer-copyright">
						Copyright © <span id="currentYear"></span>. All Rights Reserved.
					</p>
                    <ul class="footer-bottom-links">
                        <li><a href="<?= $root; ?>#">Datenschutz</a></li>
                        <li><a href="<?= $root; ?>impressum">Impressum</a></li>
                        <li><a href="<?= $root; ?>agb">AGB</a></li>
                    </ul>
                </div>

            </div>
        </footer>
    </div>
    <!-- ============= FOOTER SECTION END ============= -->
	
	<!-- Start Scroll Up Button -->
	<span class="cs_scrollup">
		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
		</svg>
	</span>
	<!-- End Scroll Up Button -->
	
	<!-- Year -->
	<script>
  		document.getElementById("currentYear").textContent = new Date().getFullYear();
	</script>
	<!-- Year End -->

	<!-- Scroll Up -->
	<script>
		// Scroll Up Button Show/Hide
		window.addEventListener('scroll', function() {
			const scrollUp = document.querySelector('.cs_scrollup');
			if (window.scrollY > 300) {
				scrollUp.classList.add('active');
			} else {
				scrollUp.classList.remove('active');
			}
		});

		// Scroll to Top on Click
		document.querySelector('.cs_scrollup').addEventListener('click', function() {
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
			});
		});
	</script>
	<!-- Scroll Up End -->

    <!-- Script --> 
	<script src="<?= $root; ?>assets/js/bootstrap.bundle.min.js"></script> 
	<script src="<?= $root; ?>assets/js/jquery-3.7.1.min.js"></script>
	<script src="<?= $root; ?>assets/js/wow.min.js"></script>
	<script src="<?= $root; ?>assets/js/jquery.slick.min.js"></script>
	<script src="<?= $root; ?>assets/js/odometer.js"></script>
	<script src="<?= $root; ?>assets/js/light-gallery.min.js"></script>
	<script src="<?= $root; ?>assets/js/jquery-ui.js"></script>
	<script src="<?= $root; ?>assets/js/jquery-timepicker.min.js"></script>
	<script src="<?= $root; ?>assets/js/select2.min.js"></script>
	<script src="<?= $root; ?>assets/js/ripples.min.js"></script>

</body>

</html>
