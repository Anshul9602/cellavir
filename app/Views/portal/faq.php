<?php
$brand = cv_brand();
$faqs = cv_faqs();
?>

<!-- FAQ Hero -->
<section
    class="cv-faq-hero"
    style="--cv-faq-hero-bg: url('<?= esc(pp_img('faqbanner.png')) ?>'); --cv-faq-hero-bg-mob: url('<?= esc(pp_img('faqbanner.png')) ?>');"
>
    <div class="cv-faq-hero__bg"></div>
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

<!-- FAQ Accordion -->
<section class="cv-faq-section cv-section-green protocol-section">
    <div class="cv-faq-section__inner">
        <div class="protocol-faq__accordion cv-faq-accordion">
            <?php foreach ($faqs as $i => $faq): ?>
            <details class="protocol-faq__item protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(100 + ($i * 50), 500) ?>">
                <summary class="protocol-faq__question">
                    <span class="protocol-faq__question-text"><?= esc($faq['q']) ?></span>
                    <?= cv_faq_toggle_icon() ?>
                </summary>
                <div class="protocol-faq__answer rte">
                    <p><?= esc($faq['a']) ?></p>
                </div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Still Have Questions CTA -->
<section class="cv-faq-cta-section cv-section-green protocol-section">
    <div class="cv-faq-cta-section__inner">
        <div class="cv-faq-cta">
            <div class="cv-faq-cta__bg" style="background-image:url('<?= esc(pp_img('dicover.png')) ?>')"></div>
            <div class="cv-faq-cta__overlay"></div>
            <div class="cv-faq-cta__inner">
                <div class="cv-faq-cta__icon" aria-hidden="true">
                    <?= cv_icon('leaf', 'cv-lucide--cta-leaf') ?>
                </div>
                <div class="cv-faq-cta__copy">
                    <h2 class="cv-faq-cta__title">Still have questions?</h2>
                    <p class="cv-faq-cta__text">Our team is here to help you on your wellness journey.</p>
                </div>
                <a href="<?= site_url('contact') ?>" class="cv-faq-cta__btn">
                    Contact Us
                    <?= cv_icon('arrow-right', 'cv-lucide--cta-arrow') ?>
                </a>
            </div>
        </div>
    </div>
</section>