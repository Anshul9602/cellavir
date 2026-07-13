<?php
$brand = cv_brand();
$pillars = cv_home_pillars();
$timeline = cv_home_timeline();
$protocols = cv_home_protocols();
$promises = cv_home_promises();
$testimonials = cv_home_testimonials();
?>

<!-- Hero Banner -->
<section class="cv-home-banner">
    <picture>
        <source media="(max-width: 900px)" srcset="<?= esc(pp_img('homemobile.png')) ?>">
        <img src="<?= pp_img('cellaviebanner.png') ?>" alt="CellaVie — Science for the Future. Wellness for Life.">
    </picture>
</section>

<!-- Intro -->
<section class="cv-home-intro protocol-section">
    <div class="cv-home-intro__inner protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
        <h2 class="cv-home-intro__title"><?= esc($brand['tagline']) ?></h2>
        <p class="cv-home-intro__text"><?= esc($brand['statement']) ?></p>
        <div class="cv-home-intro__actions">
            <a href="<?= site_url('shop') ?>" class="protocol-btn">Explore Protocols</a>
            <a href="<?= site_url('science') ?>" class="protocol-btn protocol-btn--secondary">Learn the Science</a>
        </div>
    </div>
    <div class="cv-home-pillars">
        <?php foreach ($pillars as $i => $pillar): ?>
        <article class="cv-home-pillar protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(200 + ($i * 100), 500) ?>">
            <div class="cv-home-pillar__icon">
                <?= cv_icon($pillar['icon'], 'cv-lucide--pillar cv-lucide--gold') ?>
            </div>
            <h3><?= esc($pillar['title']) ?></h3>
            <p><?= esc($pillar['text']) ?></p>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- Science Timeline -->
<section class="cv-home-science">
    <div class="cv-home-science__bg" style="background-image:url('<?= esc(pp_img('midbanner.png')) ?>')"></div>
    <div class="cv-home-science__overlay"></div>
    <div class="cv-home-science__inner protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
        <h2 class="cv-home-science__title">The Science of Living Better</h2>
        <p class="cv-home-science__lead">Peptides communicate with cells and initiate biological signals that help your body repair, regenerate, and perform at its best.</p>
        <div class="cv-home-science__track">
            <div class="cv-home-science__line" aria-hidden="true"></div>
            <?php foreach ($timeline as $item): ?>
            <div class="cv-home-science__step<?= !empty($item['highlight']) ? ' cv-home-science__step--highlight' : '' ?>">
                <?php if (!empty($item['highlight'])): ?>
                <span class="cv-home-science__diamond" aria-hidden="true"></span>
                <?php endif; ?>
                <div class="cv-home-science__step-icon">
                    <?= cv_icon($item['icon'], 'cv-lucide--timeline cv-lucide--gold') ?>
                </div>
                <h3><?= esc($item['step']) ?></h3>
                <p><?= esc($item['text']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Protocols -->
<section class="cv-home-protocols protocol-section">
    <div class="cv-home-protocols__inner">
        <h2 class="cv-home-section-title protocol-animate protocol-animate--slide-up protocol-animate--delay-100">Featured Protocols</h2>
        <div class="cv-home-protocols__grid">
            <?php foreach ($protocols as $i => $protocol): ?>
            <a href="<?= site_url($protocol['url']) ?>" class="cv-home-protocol-card protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(150 + ($i * 60), 500) ?>">
                <div class="cv-home-protocol-card__image">
                    <img src="<?= esc($protocol['image']) ?>" alt="<?= esc($protocol['title']) ?>" loading="lazy" width="1000" height="740">
                </div>
                <div class="cv-home-protocol-card__body">
                    <h3><?= esc($protocol['title']) ?></h3>
                    <p><?= esc($protocol['text']) ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose + Our Promise -->
<section class="cv-home-choose protocol-section">
    <div class="cv-home-choose__inner">
        <h2 class="cv-home-section-title protocol-animate protocol-animate--slide-up protocol-animate--delay-100">Why Choose CellaVie</h2>
        <div class="cv-home-choose__actions protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
            <a href="<?= site_url('science') ?>" class="protocol-btn">Our Science</a>
            <a href="<?= site_url('shop') ?>" class="protocol-btn protocol-btn--secondary">View Products</a>
        </div>
        <h3 class="cv-home-choose__subtitle protocol-animate protocol-animate--slide-up protocol-animate--delay-250">Our Promise</h3>
        <div class="cv-home-promises">
            <?php foreach ($promises as $i => $promise): ?>
            <article class="cv-home-promise protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(300 + ($i * 100), 500) ?>">
                <div class="cv-home-promise__icon">
                    <?= cv_icon($promise['icon'], 'cv-lucide--promise cv-lucide--gold') ?>
                </div>
                <h4><?= esc($promise['title']) ?></h4>
                <p><?= esc($promise['text']) ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="cv-home-testimonials protocol-section">
    <div class="cv-home-testimonials__inner">
        <h2 class="cv-home-section-title protocol-animate protocol-animate--slide-up protocol-animate--delay-100">Trusted by Experts</h2>
        <div class="cv-home-testimonials__grid">
            <?php foreach ($testimonials as $i => $t): ?>
            <blockquote class="cv-home-testimonial protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(200 + ($i * 80), 500) ?>">
                <div class="cv-home-testimonial__stars" aria-label="5 out of 5 stars">
                    <?php for ($s = 0; $s < 5; $s++): ?>
                    <?= cv_icon('star', 'cv-lucide--star') ?>
                    <?php endfor; ?>
                </div>
                <p>"<?= esc($t['quote']) ?>"</p>
                <footer>
                    <cite><?= esc($t['name']) ?></cite>
                    <span><?= esc($t['title']) ?></span>
                </footer>
            </blockquote>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Secondary CTA -->
<section class="cv-home-cta">
    <div class="cv-home-cta__bg" style="background-image:url('<?= esc(pp_img('dicover.png')) ?>')"></div>
    <div class="cv-home-cta__overlay"></div>
    <div class="cv-home-cta__inner protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
        <h2>Learn. Discover. Evolve.</h2>
        <p><?= esc($brand['statement']) ?></p>
        <div class="cv-home-cta__actions">
            <a href="<?= site_url('science') ?>" class="cv-btn-gold-solid">Resource Center</a>
            <a href="<?= site_url('faq') ?>" class="cv-btn-gold-outline">Read Our Blog</a>
        </div>
    </div>
</section>


