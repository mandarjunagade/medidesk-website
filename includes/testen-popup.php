<!-- ============= TESTEN POPUP MODAL ============= -->
<div id="testenModal" class="testen-modal">
    <div class="testen-modal-overlay"></div>
    <div class="testen-modal-content">
        <button class="testen-modal-close" aria-label="Close modal">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div class="testen-modal-header">
            <h2>MediDesk® 4 Wochen kostenlos testen</h2>
            <p>Sehen Sie selbst, wie viel ruhiger Ihr Praxisalltag werden kann.</p>
        </div>

        <div class="testen-modal-body">
            <form id="testenForm" method="POST" action="<?= $root; ?>includes/testen-email.php">
                
                <div class="form-group">
                    <select id="rolle" name="rolle" class="form-control" required>
                        <option value="">Meine Rolle: bitte auswählen</option>
                        <option value="Arzt/Ärztin">Arzt/Ärztin</option>
                        <option value="Praxismanager/in">Praxismanager/in</option>
                        <option value="MFA / Rezeption">MFA / Rezeption</option>
                        <option value="Geschäftsführung MVZ/Klinik">Geschäftsführung MVZ/Klinik</option>
                        <option value="IT-Verantwortliche/r">IT-Verantwortliche/r</option>
                        <option value="Therapeut/in">Therapeut/in</option>
                        <option value="Andere">Andere</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ihr vollständiger Name" required>
                </div>

                <div class="form-group">
                    <input type="text" id="praxis" name="praxis" class="form-control" placeholder="Name Ihrer Praxis/Klinik (optional)">
                </div>

                <div class="form-group">
                    <input type="tel" id="telefon" name="telefon" class="form-control" placeholder="Telefon (für Rückruf)" required>
                </div>

                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail-Adresse" required>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn-submit">
                        <span class="btn-text">Absenden</span>
                        <span class="btn-loader" style="display: none;">
                            <i class="fa fa-spinner fa-spin"></i> Wird gesendet...
                        </span>
                    </button>
                </div>

                <div class="form-message" style="display: none;"></div>
            </form>

            <div class="direct-contact">
                <p>Lieber direkt per E-Mail schreiben?</p>
                <a href="mailto:info@medideskr.cloud" class="email-link">
                    <i class="fa fa-envelope"></i> info@medideskr.cloud
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ============= POPUP STYLES ============= -->
<style>
.testen-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.testen-modal.active {
    display: flex;
}

.testen-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75);
    backdrop-filter: blur(5px);
}

.testen-modal-content {
    position: relative;
    background: white;
    border-radius: 16px;
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
    animation: modalSlideIn 0.3s ease;
}

@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.testen-modal-close {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: none;
    background: rgba(0, 0, 0, 0.05);
    color: #333;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    z-index: 10;
}

.testen-modal-close:hover {
    background: rgba(0, 0, 0, 0.1);
    transform: rotate(90deg);
}

.testen-modal-header {
    /* background: linear-gradient(135deg, #1e4472 0%, #052448 100%); */
    padding: 40px 30px;
    text-align: center;
    border-radius: 16px 16px 0 0;
}

.testen-modal-header h2 {
    font-size: 24px;
    font-weight: 700;
    color: black;
    margin: 0;
    line-height: 1.4;
}

.testen-modal-body {
    padding: 35px 30px 30px;
}

.form-group {
    margin-bottom: 16px;
}

.form-control {
    width: 100%;
    padding: 14px 18px;
    font-size: 15px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-family: var(--body-font);
    background: white;
}

.form-control:focus {
    outline: none;
    border-color: var(--highlighted-color);
    box-shadow: 0 0 0 3px rgba(30, 68, 114, 0.1);
}

.form-control::placeholder {
    color: #9ca3af;
    font-size: 14px;
}

select.form-control {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236b7280' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 16px center;
    padding-right: 40px;
    color: #6b7280;
}

select.form-control:focus {
    color: #111827;
}

.form-submit {
    margin-top: 20px;
}

.btn-submit {
    width: 100%;
    padding: 16px 32px;
    font-size: 16px;
    font-weight: 600;
    border: none;
    background: linear-gradient(135deg, #1e4472 0%, #052448 100%);
    color: white;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.btn-submit:hover {
    background: linear-gradient(135deg, #163559 0%, #041b35 100%);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 68, 114, 0.4);
}

.btn-submit:active {
    transform: translateY(0);
}

.btn-submit:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.form-message {
    margin-top: 15px;
    padding: 12px 16px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
}

.form-message.success {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #6ee7b7;
}

.form-message.error {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fca5a5;
}

/* Direct Contact Section */
.direct-contact {
    text-align: center;
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #e5e7eb;
}

.direct-contact p {
    font-size: 14px;
    color: #6b7280;
    margin-bottom: 12px;
}

.email-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    background: #f3f4f6;
    color: var(--highlighted-color);
    text-decoration: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.email-link:hover {
    background: var(--highlighted-color);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 68, 114, 0.3);
}

.email-link i {
    font-size: 16px;
}

/* Mobile Responsive */
@media (max-width: 640px) {
    .testen-modal-content {
        max-width: 95%;
        max-height: 95vh;
        border-radius: 12px;
    }

    .testen-modal-header {
        padding: 30px 20px;
        border-radius: 12px 12px 0 0;
    }

    .testen-modal-header h2 {
        font-size: 20px;
    }

    .testen-modal-body {
        padding: 25px 20px 20px;
    }

    .form-control {
        padding: 12px 16px;
        font-size: 14px;
    }

    .btn-submit {
        padding: 14px 28px;
        font-size: 15px;
    }

    .email-link {
        padding: 10px 20px;
        font-size: 14px;
    }

    .direct-contact {
        margin-top: 25px;
        padding-top: 20px;
    }
}

/* Smooth scrollbar */
.testen-modal-content::-webkit-scrollbar {
    width: 6px;
}

.testen-modal-content::-webkit-scrollbar-track {
    background: #f9fafb;
}

.testen-modal-content::-webkit-scrollbar-thumb {
    background: #d1d5db;
    border-radius: 3px;
}

.testen-modal-content::-webkit-scrollbar-thumb:hover {
    background: #9ca3af;
}
</style>

<!-- ============= POPUP SCRIPTS ============= -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('testenModal');
    const closeBtn = modal.querySelector('.testen-modal-close');
    const overlay = modal.querySelector('.testen-modal-overlay');
    const form = document.getElementById('testenForm');
    const submitBtn = form.querySelector('.btn-submit');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    const formMessage = modal.querySelector('.form-message');

    // Open modal when clicking "Jetzt testen" or "Kostenlos testen" buttons
    document.querySelectorAll('a[href="#kostenlos-testen"], a[href*="testen"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    });

    // Close modal functions
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    function openModal() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Disable submit button
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoader.style.display = 'inline-block';
        formMessage.style.display = 'none';

        // Get form data
        const formData = new FormData(form);

        // Send AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Re-enable submit button
            submitBtn.disabled = false;
            btnText.style.display = 'inline-block';
            btnLoader.style.display = 'none';

            // Show message
            formMessage.style.display = 'block';
            formMessage.className = 'form-message ' + (data.success ? 'success' : 'error');
            formMessage.textContent = data.message;

            if (data.success) {
                // Reset form on success
                form.reset();
                
                // Close modal after 3 seconds
                setTimeout(function() {
                    closeModal();
                    formMessage.style.display = 'none';
                }, 3000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            submitBtn.disabled = false;
            btnText.style.display = 'inline-block';
            btnLoader.style.display = 'none';
            
            formMessage.style.display = 'block';
            formMessage.className = 'form-message error';
            formMessage.textContent = 'Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.';
        });
    });
});
</script>
<!-- ============= POPUP END ============= -->