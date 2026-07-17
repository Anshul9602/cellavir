<?php
$brand = cv_brand();
$values = cv_values();
$aboutVideo = pp_video('aboutusvideo.mp4');
$philosophyItems = [
    ['title' => 'Science-Backed', 'text' => 'Every protocol is rooted in current research, clinical evidence, and precision wellness.', 'icon' => 'microscope'],
    ['title' => 'Clinically Informed', 'text' => 'Our approach reflects the rigor and transparency expected in evidence-informed care.', 'icon' => 'badge-check'],
    ['title' => 'Precision Wellness', 'text' => 'Protocols are designed with intention, tailored to repair, optimize, and elevate your baseline.', 'icon' => 'crosshair'],
];
?>

<!-- About Hero -->
<section class="cv-about-hero-split cv-section-green">
    <div class="cv-about-hero-split__inner">
        <div class="cv-about-hero-split__content protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
            <p class="cv-about-hero-split__label">About CellaVie</p>
            <h1 class="cv-about-hero-split__title">Why "CellaVie"</h1>
            <p>Our name reflects our philosophy: lasting health begins at the cellular level and is achieved through personalized protocols, not one-size-fits-all solutions.</p>
            <p>Guided by experienced practitioners, every recommendation is informed by data, refined over time, and tailored to your unique biology.</p>
            <p>From comprehensive testing to ongoing protocol optimization, every step is intentional, transparent, and focused on helping you perform at your best.</p>
        </div>
        <div class="cv-about-hero-split__media protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
            <?php if ($aboutVideo): ?>
            <video autoplay muted loop playsinline poster="<?= esc(pp_img('abouthomebg.png')) ?>">
                <source src="<?= esc($aboutVideo) ?>" type="video/mp4">
            </video>
            <?php else: ?>
            <picture>
                <source media="(max-width: 900px)" srcset="<?= esc(pp_img('abouthomebgmob.png')) ?>">
                <img src="<?= pp_img('abouthomebg.png') ?>" alt="CellaVie About">
            </picture>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Who We Are + Why CellaVie Exists -->
<section class="cv-about-split cv-section-green protocol-section">
    <div class="cv-about-split__inner">
        <div class="cv-about-split__col protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
            <div class="cv-about-section-label">
                <?= cv_icon('users', 'cv-lucide--section cv-lucide--gold') ?>
                <h2>Who We Are</h2>
            </div>
            <p><?= esc($brand['name']) ?> designs peptide protocols that support healthier aging from the cellular level. Our approach is clinical, modern, and minimal. <?= esc($brand['personality_note']) ?></p>
            <div class="cv-about-pills cv-about-pills--grid">
                <?php foreach ($brand['personality'] as $trait): ?>
                <span class="cv-about-pill"><?= esc($trait) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="cv-about-split__col protocol-animate protocol-animate--slide-up protocol-animate--delay-300">
            <div class="cv-about-section-label">
                <?= cv_icon('leaf', 'cv-lucide--section cv-lucide--gold') ?>
                <h2>Why CellaVie Exists</h2>
            </div>
            <p>Healthy aging begins within. CellaVie was founded to redefine how people experience longevity, making precision peptide wellness accessible through clinically informed science.</p>
            <p>We believe small signals can create extraordinary results. By combining science-backed protocols with editorial design and transparent communication, we help individuals take a proactive approach to recovery, performance, and long-term wellness.</p>
        </div>
    </div>
</section>

<!-- Our Philosophy -->
<section class="cv-about-philosophy-section cv-section-green protocol-section">
    <div class="cv-about-philosophy-section__inner">
        <div class="cv-about-section-label cv-about-section-label--center protocol-animate protocol-animate--slide-up protocol-animate--delay-100">
            <?= cv_icon('leaf', 'cv-lucide--section cv-lucide--gold') ?>
            <h2>Our Philosophy</h2>
        </div>
        <p class="cv-about-philosophy-lead protocol-animate protocol-animate--slide-up protocol-animate--delay-200">Your biology already knows how to heal. Peptides simply help it communicate more effectively.</p>
        <div class="cv-about-philosophy-grid">
            <?php foreach ($philosophyItems as $i => $item): ?>
            <div class="cv-about-philosophy-card protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(300 + ($i * 100), 500) ?>">
                <div class="cv-about-icon-circle">
                    <?= cv_icon($item['icon'], 'cv-lucide--circle cv-lucide--gold') ?>
                </div>
                <h3><?= esc($item['title']) ?></h3>
                <p><?= esc($item['text']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="cv-about-philosophy-footer protocol-animate protocol-animate--slide-up protocol-animate--delay-500">We focus on cellular repair, regeneration, and healthy aging, not quick fixes. Wellness at the cellular level is the foundation of living better.</p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="cv-about-mv-cards">
    <div class="cv-about-mv-cards__grid">
        <article class="cv-about-mv-card protocol-animate protocol-animate--slide-up protocol-animate--delay-200" style="--cv-mv-bg: url('<?= esc(pp_img('mission.jpeg')) ?>')">
            <div class="cv-about-mv-card__overlay"></div>
            <div class="cv-about-mv-card__content">
                <div class="cv-about-mv-icon">
                    <?= cv_icon('target', 'cv-lucide--mv') ?>
                </div>
                <h3>Our Mission</h3>
                <p><?= esc($brand['mission']) ?></p>
            </div>
        </article>
        <article class="cv-about-mv-card protocol-animate protocol-animate--slide-up protocol-animate--delay-300" style="--cv-mv-bg: url('<?= esc(pp_img('vision.jpeg')) ?>')">
            <div class="cv-about-mv-card__overlay"></div>
            <div class="cv-about-mv-card__content">
                <div class="cv-about-mv-icon">
                    <?= cv_icon('eye', 'cv-lucide--mv') ?>
                </div>
                <h3>Our Vision</h3>
                <p><?= esc($brand['vision']) ?></p>
            </div>
        </article>
    </div>
</section>

<!-- Our Values -->
<section class="cv-about-values-section cv-section-green protocol-section">
    <div class="cv-about-values-section__inner">
        <h2 class="cv-about-values-title protocol-animate protocol-animate--slide-up protocol-animate--delay-100">Our Values</h2>
        <div class="cv-about-values-list">
            <?php foreach ($values as $i => $value): ?>
            <article class="cv-about-value-row protocol-animate protocol-animate--slide-up protocol-animate--delay-<?= min(200 + ($i * 50), 500) ?>">
                <div class="cv-about-value-icon">
                    <?= cv_icon($value['icon'], 'cv-lucide--value cv-lucide--gold') ?>
                </div>
                <div>
                    <h3><?= esc($value['title']) ?></h3>
                    <p><?= esc($value['text']) ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Leadership + Scientific Advisory -->
<section class="cv-about-team-section cv-section-green protocol-section">
    <div class="cv-about-team-section__inner">
        <div class="cv-about-team-card protocol-animate protocol-animate--slide-up protocol-animate--delay-200">
            <div class="cv-about-team-icon">
                <?= cv_icon('briefcase', 'cv-lucide--team cv-lucide--gold') ?>
            </div>
            <h3>Leadership</h3>
            <p>CellaVie's leadership team brings together expertise in wellness innovation, scientific advisory, and premium brand experience, building the world's most trusted premium peptide wellness company.</p>
        </div>
        <div class="cv-about-team-card protocol-animate protocol-animate--slide-up protocol-animate--delay-300">
            <div class="cv-about-team-icon">
                <?= cv_icon('flask-conical', 'cv-lucide--team cv-lucide--gold') ?>
            </div>
            <h3>Scientific Advisory</h3>
            <p>Scientific accuracy is at the heart of everything we do. CellaVie works alongside experienced scientific advisors who guide protocol development, research summaries, and our evidence-informed approach to longevity science.</p>
        </div>
    </div>
</section>
