
    </main>

    <footer class="cv-footer">
        <div class="cv-footer__main">
            <div class="cv-footer__brand">
                <a href="<?= site_url('/') ?>" class="cv-footer__logo-link">
                    <img src="<?= pp_logo('light') ?>" alt="<?= esc(cv_brand()['short_name']) ?>" class="cv-footer__logo">
                </a>
                <p class="cv-footer__tagline"><?= esc(cv_brand()['statement']) ?></p>
            </div>
            <div class="cv-footer__columns">
                <div class="cv-footer__col">
                    <h3 class="cv-footer__heading">Explore</h3>
                    <ul class="cv-footer__list">
                        <li><a href="<?= site_url('about') ?>">About Us</a></li>
                        <li><a href="<?= site_url('science') ?>">Science</a></li>
                        <li><a href="<?= site_url('shop') ?>">Protocols</a></li>
                        <li><a href="<?= site_url('faq') ?>">FAQ</a></li>
                    </ul>
                </div>
                <div class="cv-footer__col">
                    <h3 class="cv-footer__heading">Support</h3>
                    <ul class="cv-footer__list">
                        <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                        <li><a href="<?= site_url('terms-of-service') ?>">Terms &amp; Conditions</a></li>
                        <li><a href="<?= site_url('contact') ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="cv-footer__col cv-footer__col--connect">
                    <h3 class="cv-footer__heading">Newsletter</h3>
                    <p><?= esc(cv_brand()['newsletter']) ?></p>
                    <form class="cv-footer__newsletter" action="#" method="post">
                        <input type="email" name="email" placeholder="Email" required aria-label="Email">
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="cv-footer__social">
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><?= cv_social_icon('instagram') ?></a>
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><?= cv_social_icon('facebook') ?></a>
                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><?= cv_social_icon('linkedin') ?></a>
                        <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><?= cv_social_icon('youtube') ?></a>
                        <a href="mailto:hello@cellavie.com" aria-label="Email"><?= cv_social_icon('mail') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cv-footer__bottom">
            <p>© <?= date('Y') ?> <a href="<?= site_url('/') ?>"><?= esc(cv_brand()['short_name']) ?></a> · <?= esc(cv_brand()['tagline']) ?></p>
            <p class="cv-footer__disclaimer">CellaVie products and information are provided for educational and research purposes only and are not intended as a substitute for professional medical advice, diagnosis, or treatment.</p>
        </div>
    </footer>
</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script src="<?= base_url('assets/js/cellavei-portal.js') ?>"></script>
<script src="<?= base_url('assets/js/protocol-animations.js') ?>" defer></script>
<?php if (!empty($loadFaqJs)): ?>
<script src="<?= base_url('assets/js/protocol-faq.js') ?>" defer></script>
<?php endif; ?>
<?php if (!empty($loadContactJs)): ?>
<script src="<?= base_url('assets/js/protocol-contact.js') ?>" defer></script>
<?php endif; ?>
</body>
</html>
