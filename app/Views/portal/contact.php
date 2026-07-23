<?php
$brand = cv_brand();
$enquiries = [
    [
        'id' => 'clinic',
        'tab' => 'Clinic',
        'title' => 'Clinic Enquiries',
        'description' => 'For licensed clinics and healthcare organizations seeking information about CellaVie peptide protocols, wellness programs, or professional partnerships.',
        'list_heading' => 'We can assist with:',
        'list' => ['Protocol information', 'Wellness program enquiries', 'Professional guidance', 'Clinic partnerships', 'General support'],
        'email' => 'cellaviesupport@gmail.com',
        'subject' => 'Clinic Enquiry',
        'cta' => 'Select clinic enquiry',
        'active' => true,
    ],
    [
        'id' => 'research',
        'tab' => 'Research',
        'title' => 'Research Enquiries',
        'description' => 'Our team supports researchers, clinicians, and wellness professionals exploring the science behind peptide protocols and longevity.',
        'list_heading' => 'Topics include:',
        'list' => ['Peptide science and mechanisms', 'Clinical references', 'Evidence summaries', 'Protocol research', 'Scientific collaboration'],
        'email' => 'cellaviesupport@gmail.com',
        'subject' => 'Research Enquiry',
        'cta' => 'Select research enquiry',
        'active' => false,
    ],
    [
        'id' => 'partnerships',
        'tab' => 'Partnerships',
        'title' => 'Partnerships',
        'description' => 'CellaVie welcomes collaborations with clinics, wellness brands, distributors, and organizations who share our commitment to science-backed longevity.',
        'list_heading' => 'Partnership opportunities include:',
        'list' => ['Clinic partnerships', 'Brand collaborations', 'Distribution partnerships', 'Wellness program integrations', 'Strategic partnerships'],
        'email' => 'cellaviesupport@gmail.com',
        'subject' => 'Partnership Enquiry',
        'cta' => 'Select partnership enquiry',
        'active' => false,
    ],
];
$contactVideo = pp_video('contactus.MP4');
?>

<!-- Contact Hero -->
<section class="cv-contact-hero">
    <div class="cv-contact-hero__media">
        <?php if ($contactVideo): ?>
        <video autoplay muted loop playsinline poster="<?= esc(pp_img('abouthomebg.png')) ?>">
            <source src="<?= esc($contactVideo) ?>" type="video/mp4">
        </video>
        <?php else: ?>
        <div class="cv-contact-hero__bg" style="--cv-contact-hero-bg: url('<?= esc(pp_img('abouthomebg.png')) ?>'); --cv-contact-hero-bg-mob: url('<?= esc(pp_img('abouthomebgmob.png')) ?>');"></div>
        <?php endif; ?>
    </div>
    <div class="cv-contact-hero__overlay"></div>
    <div class="cv-contact-hero__inner">
        <div class="cv-contact-hero__content protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
            <h1 class="cv-contact-hero__title">Contact Us</h1>
            <span class="cv-contact-hero__line" aria-hidden="true">
                <span class="cv-contact-hero__line-bar"></span>
                <?= cv_icon('leaf', 'cv-lucide--hero-leaf') ?>
                <span class="cv-contact-hero__line-bar"></span>
            </span>
            <p class="cv-contact-hero__text"><?= esc($brand['statement']) ?></p>
        </div>
    </div>
</section>

<section class="protocol-section protocol-contact-page cv-section-green cv-contact-section" data-protocol-contact>
    <div class="protocol-contact-page__inner">
        <div class="protocol-contact-page__intro protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
            <h2 class="protocol-contact-page__heading">Get in Touch</h2>
            <div class="protocol-contact-page__intro-text rte">
                <p>We appreciate your interest in CellaVie Premium Peptides. Whether you have questions about our protocols, the science behind peptides, or partnership opportunities, our team is here to assist you.</p>
                <p>Speak with our team — we're committed to thoughtful, professional support rooted in scientific integrity.</p>
            </div>
        </div>

        <div class="protocol-contact-page__layout">
            <!-- Contact Form -->
            <div class="protocol-contact-page__form-wrap protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
                <form class="protocol-contact-form protocol-contact-form--page" id="contact-form" action="<?= site_url('contact/submit') ?>" method="post" novalidate>
                    <p class="protocol-contact-page__form-label">Book a Consultancy</p>

                    <?php if (session()->getFlashdata('contact_success')): ?>
                    <div class="protocol-contact-form__success" id="contact-success" tabindex="-1">
                        <?= esc(session()->getFlashdata('contact_success')) ?>
                    </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('contact_error')): ?>
                    <div class="protocol-contact-form__error" id="contact-error" tabindex="-1">
                        <?= esc(session()->getFlashdata('contact_error')) ?>
                    </div>
                    <?php endif; ?>

                    <div class="protocol-contact-form__field cv-contact-field protocol-animate protocol-animate--slide-up protocol-animate--delay-300">
                        <label class="protocol-contact-form__label" for="contact-name">Full Name</label>
                        <input type="text" id="contact-name" class="protocol-contact-form__input" name="name" autocomplete="name" placeholder="Full Name" value="<?= esc(old('name')) ?>" required>
                    </div>

                    <div class="protocol-contact-form__field cv-contact-field protocol-animate protocol-animate--slide-up protocol-animate--delay-400">
                        <label class="protocol-contact-form__label" for="contact-email">Email Address</label>
                        <input type="email" id="contact-email" class="protocol-contact-form__input" name="email" autocomplete="email" placeholder="Email Address" value="<?= esc(old('email')) ?>" required>
                    </div>

                    <div class="protocol-contact-form__field cv-contact-field protocol-animate protocol-animate--slide-up protocol-animate--delay-500">
                        <label class="protocol-contact-form__label" for="contact-organization">Organization / Institution (Optional)</label>
                        <input type="text" id="contact-organization" class="protocol-contact-form__input" name="organization" autocomplete="organization" placeholder="Organization / Institution (Optional)" value="<?= esc(old('organization')) ?>">
                    </div>

                    <div class="protocol-contact-form__field cv-contact-field protocol-animate protocol-animate--slide-up protocol-animate--delay-500">
                        <label class="protocol-contact-form__label" for="contact-subject">Subject</label>
                        <input type="text" id="contact-subject" class="protocol-contact-form__input protocol-contact-form__subject" name="subject" placeholder="Subject" value="<?= esc(old('subject', 'Book a Consultancy')) ?>" data-protocol-contact-subject>
                    </div>

                    <div class="protocol-contact-form__field cv-contact-field protocol-animate protocol-animate--slide-up protocol-animate--delay-600">
                        <label class="protocol-contact-form__label" for="contact-message">Message <span class="cv-contact-field__hint">(min: 25 words)</span></label>
                        <textarea id="contact-message" class="protocol-contact-form__input protocol-contact-form__textarea" name="message" rows="8" placeholder="Message (min: 25 words)" required data-min-words="25"><?= esc(old('message')) ?></textarea>
                    </div>

                    <button type="submit" class="protocol-btn protocol-contact-form__submit protocol-animate protocol-animate--slide-up protocol-animate--delay-600">
                        To Book a Consultancy
                    </button>
                </form>
            </div>

            <!-- Enquiry Tabs & Panels -->
            <div class="protocol-contact-page__panels protocol-animate protocol-animate--slide-up protocol-animate--delay-300">
                <div class="protocol-contact-tabs" role="tablist" aria-label="Enquiry types">
                    <?php foreach ($enquiries as $enquiry): ?>
                    <button
                        type="button"
                        class="protocol-contact-tabs__tab<?= $enquiry['active'] ? ' is-active' : '' ?>"
                        role="tab"
                        id="ProtocolContactTab-<?= esc($enquiry['id']) ?>"
                        aria-selected="<?= $enquiry['active'] ? 'true' : 'false' ?>"
                        aria-controls="ProtocolContactPanel-<?= esc($enquiry['id']) ?>"
                        data-protocol-contact-tab
                        data-subject="<?= esc($enquiry['subject']) ?>"
                    ><?= esc($enquiry['tab']) ?></button>
                    <?php endforeach; ?>
                </div>

                <div class="protocol-contact-panels">
                    <?php foreach ($enquiries as $enquiry): ?>
                    <div
                        class="protocol-contact-panel<?= $enquiry['active'] ? ' is-active' : '' ?>"
                        role="tabpanel"
                        id="ProtocolContactPanel-<?= esc($enquiry['id']) ?>"
                        aria-labelledby="ProtocolContactTab-<?= esc($enquiry['id']) ?>"
                        data-protocol-contact-panel
                        <?= $enquiry['active'] ? '' : 'hidden' ?>
                    >
                        <h3 class="protocol-contact-panel__title"><?= esc($enquiry['title']) ?></h3>
                        <p class="protocol-contact-panel__description"><?= esc($enquiry['description']) ?></p>
                        <p class="protocol-contact-panel__list-heading"><?= esc($enquiry['list_heading']) ?></p>
                        <ul class="protocol-contact-panel__list">
                            <?php foreach ($enquiry['list'] as $item): ?>
                            <li><?= esc($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="mailto:<?= esc($enquiry['email']) ?>" class="protocol-contact-panel__email">Email: <?= esc($enquiry['email']) ?></a>
                        <button
                            type="button"
                            class="protocol-contact-panel__cta protocol-btn"
                            data-protocol-contact-use
                            data-subject="<?= esc($enquiry['subject']) ?>"
                        ><?= esc($enquiry['cta']) ?></button>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Business Info Cards -->
        <div class="protocol-contact-page__info protocol-animate protocol-animate--slide-up protocol-animate--delay-400">
            <div class="protocol-contact-info-card">
                <h3 class="protocol-contact-info-card__title">Business Hours</h3>
                <div class="protocol-contact-info-card__body rte">
                    <p>Monday – Friday: 9:00 AM – 6:00 PM</p>
                    <p>Saturday: 10:00 AM – 2:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
            <div class="protocol-contact-info-card">
                <h3 class="protocol-contact-info-card__title">Response Time</h3>
                <div class="protocol-contact-info-card__body rte">
                    <p>Our team aims to respond to all enquiries within 1–2 business days. For technical or documentation-related requests, additional time may be required to ensure complete and accurate information.</p>
                </div>
            </div>
        </div>
    </div>
</section>
