
    </main>

    <footer class="cv-footer">
        <div class="cv-footer__top">
            <div class="cv-footer__cta">
                <h2 class="cv-footer__cta-title">Curious but not quite ready to dive in?</h2>
                <p class="cv-footer__cta-lead">We’d love to connect.</p>
                <p class="cv-footer__cta-text">Email our team at <a href="mailto:<?= esc(cv_brand()['contact_email']) ?>"><?= esc(cv_brand()['contact_email']) ?></a> to explore how CellaVie works — and whether it’s the right fit for you.</p>
                <form class="cv-footer__newsletter" action="#" method="post">
                    <label class="cv-footer__newsletter-label" for="cv-footer-newsletter-email">Newsletter</label>
                    <div class="cv-footer__newsletter-row">
                        <input id="cv-footer-newsletter-email" type="email" name="email" placeholder="Enter your email" required aria-label="Email">
                        <button type="submit">Subscribe</button>
                    </div>
                </form>
            </div>

            <div class="cv-footer__right">
                <div class="cv-footer__columns">
                    <div class="cv-footer__col">
                        <h3 class="cv-footer__heading">Explore</h3>
                        <ul class="cv-footer__list">
                            <li><a href="<?= site_url('shop') ?>">Protocols</a></li>
                            <li><a href="<?= site_url('science') ?>">Science</a></li>
                            <li><a href="<?= site_url('faq') ?>">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="cv-footer__col">
                        <h3 class="cv-footer__heading">Support</h3>
                        <ul class="cv-footer__list">
                            <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                            <li><a href="<?= site_url('terms-of-service') ?>">Terms &amp; Conditions</a></li>
                            <li><a href="<?= site_url('shipping-policy') ?>">Shipping Policy</a></li>
                            <li><a href="<?= site_url('contact') ?>">Contact</a></li>
                        </ul>
                    </div>
                    <div class="cv-footer__col">
                        <h3 class="cv-footer__heading">Company</h3>
                        <ul class="cv-footer__list">
                            <li><a href="<?= site_url('contact') ?>">Contact</a></li>
                            <li><a href="<?= site_url('about') ?>">About Us</a></li>
                            <li><a href="<?= site_url('science') ?>">Our Science</a></li>
                        </ul>
                    </div>
                </div>

                <div class="cv-footer__social">
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><?= cv_social_icon('linkedin') ?></a>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><?= cv_social_icon('instagram') ?></a>
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><?= cv_social_icon('facebook') ?></a>
                </div>

                <div class="cv-footer__legal">
                    <p>© <?= date('Y') ?> <?= esc(cv_brand()['short_name']) ?>. All rights reserved.</p>
                    <p class="cv-footer__disclaimer"><?= esc(cv_brand()['short_name']) ?> is not affiliated with any government agency. While we collaborate with medical professionals and advisors, our products and information are provided for educational and research purposes only and are not intended as a substitute for professional medical advice, diagnosis, or treatment.</p>
                </div>
            </div>
        </div>

        <div class="cv-footer__brand-banner">
            <p class="cv-footer__brand-banner-name"><?= esc(cv_brand()['short_name']) ?></p>
            <p class="cv-footer__brand-banner-line">Learn. Discover. Evolve.</p>
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
