<?php
$brand = cv_brand();
$faqs = cv_faqs();
$faqVideo = pp_video('faq.MP4');
?>

<!-- FAQ Hero -->
<section class="cv-faq-hero">
    <div class="cv-faq-hero__media">
        <?php if ($faqVideo): ?>
        <video autoplay muted loop playsinline poster="<?= esc(pp_img('faqbanner.png')) ?>">
            <source src="<?= esc($faqVideo) ?>" type="video/mp4">
        </video>
        <?php else: ?>
        <div class="cv-faq-hero__bg" style="--cv-faq-hero-bg: url('<?= esc(pp_img('faqbanner.png')) ?>'); --cv-faq-hero-bg-mob: url('<?= esc(pp_img('faqbanner.png')) ?>');"></div>
        <?php endif; ?>
    </div>
    <div class="cv-faq-hero__overlay"></div>
    <div class="cv-faq-hero__inner">
        <div class="cv-faq-hero__content protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
            <h1 class="cv-faq-hero__title">FAQ</h1>
            <span class="cv-faq-hero__line" aria-hidden="true">
                <span class="cv-faq-hero__line-bar"></span>
                <?= cv_icon('leaf', 'cv-lucide--hero-leaf') ?>
                <span class="cv-faq-hero__line-bar"></span>
            </span>
            <p class="cv-faq-hero__text"><?= esc($brand['statement']) ?></p>
        </div>
    </div>
</section>

<!-- FAQ Document Content (Quality Standards style) -->
<section class="cv-faq-doc cv-section-green protocol-section">
    <div class="cv-faq-doc__inner protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
        <header class="cv-faq-doc__header">
            <h2 class="cv-faq-doc__title">Frequently Asked Questions</h2>
            <p class="cv-faq-doc__updated">Last Updated: <?= esc($brand['legal_updated']) ?></p>
        </header>

        <article class="cv-faq-doc__block">
            <h3 class="cv-faq-doc__heading">Overview</h3>
            <p><?= esc($brand['statement']) ?> Below you’ll find clear answers to the questions we hear most often about peptides, protocols, and how CellaVie approaches science-backed wellness.</p>
        </article>

        <?php foreach ($faqs as $i => $faq): ?>
        <article class="cv-faq-doc__block protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(150 + ($i * 40), 500) ?>">
            <h3 class="cv-faq-doc__heading"><?= esc($faq['q']) ?></h3>
            <p><?= esc($faq['a']) ?></p>
        </article>
        <?php endforeach; ?>

        <article class="cv-faq-doc__block cv-faq-doc__block--connect">
            <h3 class="cv-faq-doc__heading">Still have questions?</h3>
            <p>We’d love to connect. Reach out to our team to explore how CellaVie protocols work — and whether they’re the right fit for you.</p>
            <a href="<?= site_url('contact') ?>" class="cv-btn-gold-solid">Contact Us</a>
        </article>
    </div>
</section>
