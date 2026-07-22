(function () {
    'use strict';

    var toggle = document.getElementById('cv-mobile-toggle');
    var overlay = document.getElementById('cv-mobile-overlay');
    var closeBtn = document.getElementById('cv-mobile-close');

    function openMenu() {
        if (!overlay) return;
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        if (!overlay) return;
        overlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (toggle) toggle.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (overlay) {
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) closeMenu();
        });
    }

    var headerGroup = document.getElementById('header-group');
    if (headerGroup) {
        var height = headerGroup.offsetHeight;
        document.documentElement.style.setProperty('--header-group-height', height + 'px');
    }

    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        var contactSuccess = document.getElementById('contact-success');
        var contactError = document.getElementById('contact-error');
        if (contactSuccess) {
            contactSuccess.focus();
            contactForm.querySelectorAll('.cv-contact-field').forEach(function (field) {
                field.style.display = 'none';
            });
            var submitBtn = contactForm.querySelector('.protocol-contact-form__submit');
            if (submitBtn) submitBtn.style.display = 'none';
            var formLabel = contactForm.querySelector('.protocol-contact-page__form-label');
            if (formLabel) formLabel.style.display = 'none';
        }
        if (contactError) {
            contactError.focus();
        }
    }

    document.querySelectorAll('.protocol-faq__accordion').forEach(function (accordion) {
        accordion.querySelectorAll('.protocol-faq__item').forEach(function (item) {
            if (item.dataset.cvAccordionBound === 'true') return;
            item.dataset.cvAccordionBound = 'true';

            item.addEventListener('toggle', function () {
                if (!item.open) return;
                accordion.querySelectorAll('.protocol-faq__item').forEach(function (other) {
                    if (other !== item) other.open = false;
                });
            });
        });
    });

    if (window.lucide && typeof window.lucide.createIcons === 'function') {
        window.lucide.createIcons();
    }
})();
