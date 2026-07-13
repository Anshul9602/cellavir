
    </main>

    <footer>
        <div class="footer-content">
            <div class="logo-block">
                <a href="<?= site_url('/') ?>">
                    <img src="<?= pp_img('logo.png') ?>" alt="<?= esc(cv_brand()['short_name']) ?>" class="logo-block__image">
                </a>
                <p class="cv-footer-tagline"><?= esc(cv_brand()['statement']) ?></p>
            </div>
            <div class="cv-footer-menus">
                <div class="menu-block">
                    <h3 class="menu__heading">Explore</h3>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="<?= site_url('about') ?>">About</a></li>
                        <li class="menu__item"><a href="<?= site_url('science') ?>">Science</a></li>
                        <li class="menu__item"><a href="<?= site_url('shop') ?>">Protocols</a></li>
                        <li class="menu__item"><a href="<?= site_url('science') ?>">Research</a></li>
                        <li class="menu__item"><a href="<?= site_url('faq') ?>">FAQ</a></li>
                    </ul>
                </div>
                <div class="menu-block">
                    <h3 class="menu__heading">Policies</h3>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="<?= site_url('privacy-policy') ?>">Privacy</a></li>
                        <li class="menu__item"><a href="<?= site_url('terms-of-service') ?>">Terms</a></li>
                        <li class="menu__item"><a href="<?= site_url('shipping-policy') ?>">Shipping</a></li>
                        <li class="menu__item"><a href="<?= site_url('contact') ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="cv-footer-connect">
                <div class="group-block">
                    <div class="group-block-content">
                        <h3 class="menu__heading cv-footer-newsletter-title">Newsletter</h3>
                        <p><?= esc(cv_brand()['newsletter']) ?></p>
                        <form class="email-signup-block" action="#" method="post">
                            <input type="email" name="email" placeholder="Email" required aria-label="Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="cv-footer-social">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><?= cv_social_icon('instagram') ?></a>
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><?= cv_social_icon('facebook') ?></a>
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><?= cv_social_icon('linkedin') ?></a>
                    <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><?= cv_social_icon('youtube') ?></a>
                    <a href="mailto:hello@cellavie.com" aria-label="Email"><?= cv_social_icon('mail') ?></a>
                </div>
            </div>
        </div>

        <div class="footer-utilities">
            <div class="utilities" data-testid="footer-utilities">
                <p class="footer-utilities__text">© <?= date('Y') ?> <a href="<?= site_url('/') ?>"><?= esc(cv_brand()['short_name']) ?></a> · <?= esc(cv_brand()['tagline']) ?></p>
            </div>
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
