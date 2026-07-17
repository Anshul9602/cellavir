<?php
$brand = cv_brand();
$features = cv_science_features();
$timeline = cv_science_timeline();
$sections = cv_science_sections();
$scienceVideo = pp_video('science.MP4');
?>

<!-- Science Hero Video -->
<section class="cv-video-hero cv-video-hero--science">
    <div class="cv-video-hero__media">
        <?php if ($scienceVideo): ?>
        <video autoplay muted loop playsinline poster="<?= esc(pp_img('cellaviebanner.png')) ?>">
            <source src="<?= esc($scienceVideo) ?>" type="video/mp4">
        </video>
        <?php else: ?>
        <picture>
            <source media="(max-width: 900px)" srcset="<?= esc(pp_img('homemobile.png')) ?>">
            <img src="<?= pp_img('cellaviebanner.png') ?>" alt="CellaVie Science">
        </picture>
        <?php endif; ?>
    </div>
    <div class="cv-video-hero__overlay"></div>
    <div class="cv-video-hero__content protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
        <h1 class="cv-video-hero__title">Science</h1>
        <span class="cv-video-hero__line" aria-hidden="true">
            <span class="cv-video-hero__line-bar"></span>
            <?= cv_icon('leaf', 'cv-lucide--hero-leaf') ?>
            <span class="cv-video-hero__line-bar"></span>
        </span>
        <p class="cv-video-hero__text"><?= esc($brand['statement']) ?></p>
    </div>
</section>

<!-- Intro -->
<section class="cv-science-intro cv-section-green protocol-section">
    <div class="cv-science-intro__inner protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
        <p class="cv-science-intro__label">Science</p>
        <h1 class="cv-science-intro__title">The Science of Living Better</h1>
        <p class="cv-science-intro__text"><?= esc($brand['statement']) ?></p>
    </div>
</section>

<!-- Feature Pillars -->
<section class="cv-science-features cv-section-green protocol-section">
    <div class="cv-science-features__grid">
        <?php foreach ($features as $i => $feature): ?>
        <article class="cv-science-feature protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(100 + ($i * 80), 500) ?>">
            <div class="cv-science-feature__icon">
                <?= cv_icon($feature['icon'], 'cv-lucide--feature cv-lucide--gold') ?>
            </div>
            <h2 class="cv-science-feature__title"><?= esc($feature['title']) ?></h2>
            <p class="cv-science-feature__text"><?= esc($feature['text']) ?></p>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- Science Timeline -->
<section class="cv-science-timeline-section cv-section-green protocol-section">
    <div class="cv-science-timeline-box protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
        <h2 class="cv-science-timeline-box__title">The Science Timeline</h2>
        <div class="cv-science-timeline">
            <?php foreach ($timeline as $i => $item): ?>
            <div class="cv-science-timeline__step">
                <div class="cv-science-timeline__icon">
                    <?= cv_icon($item['icon'], 'cv-lucide--timeline cv-lucide--gold') ?>
                </div>
                <h3 class="cv-science-timeline__label"><?= esc($item['step']) ?></h3>
                <p class="cv-science-timeline__text"><?= esc($item['text']) ?></p>
            </div>
            <?php if ($i < count($timeline) - 1): ?>
            <span class="cv-science-timeline__arrow" aria-hidden="true">
                <?= cv_icon('arrow-right', 'cv-lucide--arrow cv-lucide--gold') ?>
            </span>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- The Science Explained -->
<section class="cv-science-explained cv-section-green protocol-section">
    <div class="cv-science-explained__inner">
        <h2 class="cv-science-explained__title protocol-animate protocol-animate--slide-up protocol-animate--delay-100">The Science Explained</h2>
        <div class="protocol-faq__accordion cv-science-accordion protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
            <?php foreach ($sections as $section): ?>
            <details class="protocol-faq__item">
                <summary class="protocol-faq__question">
                    <span class="protocol-faq__question-text"><?= esc($section['title']) ?></span>
                    <?= cv_faq_toggle_icon() ?>
                </summary>
                <div class="protocol-faq__answer rte">
                    <p><?= esc($section['text']) ?></p>
                </div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
