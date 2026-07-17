<?php
$brand = cv_brand();
$pillars = cv_home_pillars();
$timeline = cv_home_timeline();
$protocols = cv_home_protocols();
$promises = cv_home_promises();
$testimonials = cv_home_testimonials();
$homeVideo = pp_video('homevideo.MP4');
?>

<!-- Hero Banner -->
<section class="cv-video-hero">
    <div class="cv-video-hero__media">
        <?php if ($homeVideo): ?>
        <video autoplay muted loop playsinline poster="<?= esc(pp_img('cellaviebanner.png')) ?>">
            <source src="<?= esc($homeVideo) ?>" type="video/mp4">
        </video>
        <?php else: ?>
        <picture>
            <source media="(max-width: 900px)" srcset="<?= esc(pp_img('homemobile.png')) ?>">
            <img src="<?= pp_img('cellaviebanner.png') ?>" alt="CellaVie">
        </picture>
        <?php endif; ?>
    </div>
    <div class="cv-video-hero__overlay"></div>
    <div class="cv-video-hero__content protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
        <h1 class="cv-video-hero__title"><?= esc($brand['hero_headline']) ?></h1>
        <p class="cv-video-hero__text"><?= esc($brand['hero_subtext']) ?></p>
        <div class="cv-video-hero__actions">
            <a href="<?= site_url('shop') ?>" class="cv-btn-gold-solid">Explore Protocols</a>
            <a href="<?= site_url('science') ?>" class="cv-btn-gold-outline cv-btn-gold-outline--light">Learn the Science</a>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="cv-home-intro cv-section-green protocol-section">
    <div class="cv-home-intro__inner protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
        <h2 class="cv-home-intro__title cv-home-intro__title--single"><?= esc($brand['tagline']) ?></h2>
        <p class="cv-home-intro__text"><?= esc($brand['statement']) ?></p>
        <div class="cv-home-intro__actions">
            <a href="<?= site_url('shop') ?>" class="cv-btn-gold-solid">Explore Protocols</a>
            <a href="<?= site_url('science') ?>" class="cv-btn-gold-outline cv-btn-gold-outline--light">Learn the Science</a>
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
<section class="cv-home-science cv-section-green">
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
<section class="cv-glance-section cv-section-green protocol-section">
    <div class="cv-glance-section__inner">
        <div class="cv-glance-section__head protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
            <h2 class="cv-glance-section__title">At a Glance</h2>
            <a href="<?= site_url('shop') ?>" class="cv-glance-section__more">View More</a>
        </div>
        <div class="cv-glance-grid">
            <?php foreach ($protocols as $i => $protocol): ?>
            <?= pp_glance_card($protocol, 'protocol-animate protocol-animate--slide-up protocol-animate--delay-' . min(150 + ($i * 60), 500)) ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose + Our Promise -->
<section class="cv-home-choose cv-section-green protocol-section">
    <div class="cv-home-choose__inner">
        <h2 class="cv-home-section-title cv-home-section-title--light protocol-animate protocol-animate--slide-up protocol-animate--delay-100">Why Choose CellaVie</h2>
        <div class="cv-home-choose__actions protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
            <a href="<?= site_url('science') ?>" class="cv-btn-gold-solid">Our Science</a>
            <a href="<?= site_url('shop') ?>" class="cv-btn-gold-outline cv-btn-gold-outline--light">View Products</a>
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
<section class="cv-home-testimonials cv-section-green protocol-section">
    <div class="cv-home-testimonials__inner">
        <h2 class="cv-home-section-title cv-home-section-title--light protocol-animate protocol-animate--slide-up protocol-animate--delay-100">Real People. Real Results.</h2>
        <div class="cv-home-testimonials__grid">
            <?php foreach ($testimonials as $i => $t): ?>
            <blockquote class="cv-home-testimonial protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(200 + ($i * 80), 500) ?>">
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
