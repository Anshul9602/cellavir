<?php
$trustFeatures = [
    ['icon' => 'trust-users', 'title' => 'Reliable & Trusted', 'desc' => 'On-time and safe pickup'],
    ['icon' => 'rupee', 'title' => 'Best Market Rates', 'desc' => 'Transparent pricing'],
    ['icon' => 'trust-recycle', 'title' => 'Eco-Friendly Solutions', 'desc' => 'Sustainable & responsible'],
    ['icon' => 'network', 'title' => 'Pan India Network', 'desc' => 'Wide vendor network'],
];

$offerServices = [
    ['icon' => 'truck', 'title' => 'Scrap Collection', 'desc' => 'Hassle-free doorstep scrap pickup service.'],
    ['icon' => 'ewaste', 'title' => 'E-Waste Recycling', 'desc' => 'Safe and responsible e-waste recycling.'],
    ['icon' => 'factory', 'title' => 'Industrial Scrap', 'desc' => 'Bulk scrap collection for industries.'],
    ['icon' => 'battery-recycle', 'title' => 'Battery Recycling', 'desc' => 'Safe disposal of all types of batteries.'],
    ['icon' => 'car', 'title' => 'Vehicle Scrapping', 'desc' => 'End-to-end vehicle scrapping solution.'],
    ['icon' => 'excavator', 'title' => 'Demolition Scrap', 'desc' => 'Collection of demolition and construction scrap.'],
];

$steps = [
    ['num' => 1, 'icon' => 'calendar', 'title' => 'Book Pickup', 'desc' => 'Schedule pickup online or via app'],
    ['num' => 2, 'icon' => 'truck', 'title' => 'We Collect', 'desc' => 'Our team will collect the scrap'],
    ['num' => 3, 'icon' => 'scale', 'title' => 'Weigh & Verify', 'desc' => 'Digital weighing for accuracy'],
    ['num' => 4, 'icon' => 'wallet', 'title' => 'Instant Payment', 'desc' => 'Get paid instantly in your wallet'],
];

$impactStats = [
    ['value' => '100,000+ MT', 'label' => 'Scrap Recycled', 'icon' => 'recycle'],
    ['value' => '50,000+', 'label' => 'Vendors Network', 'icon' => 'users'],
    ['value' => '250,000+ Tons', 'label' => 'CO₂ Reduced', 'icon' => 'leaf'],
];
?>

<!-- Services Hero -->
<section class="sow-hero sow-svc-hero sow-header-offset" style="background-image: url('<?= sow_img('home bannerbg.png') ?>');">
    <div class="container mx-auto px-4 sow-hero-body">
        <div class="sow-hero-content">
            <h1 class="sow-hero-title">
                <span class="sow-hero-title-green">Our Services</span>
            </h1>
            <div class="sow-hero-sub">
                <p>End-to-end scrap collection and recycling services for a cleaner and greener India.</p>
            </div>
            <div class="sow-hero-btns">
                <a href="<?= site_url('contact') ?>" class="sow-btn-hero-primary">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Schedule Pickup
                </a>
            </div>
        </div>
    </div>

    <div class="sow-svc-trust-bar-wrap container mx-auto px-4">
        <div class="sow-svc-trust-bar">
            <div class="sow-svc-trust-grid">
                <?php foreach ($trustFeatures as $feature): ?>
                <div class="sow-svc-trust-item">
                    <div class="sow-svc-trust-icon"><?= sow_icon($feature['icon']) ?></div>
                    <div class="sow-svc-trust-text">
                        <strong><?= esc($feature['title']) ?></strong>
                        <span><?= esc($feature['desc']) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- What We Offer -->
<section class="sow-svc-offer">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>What We Offer</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-svc-offer-grid">
            <?php foreach ($offerServices as $service): ?>
            <div class="sow-svc-offer-card">
                <div class="sow-svc-offer-top">
                    <div class="sow-svc-offer-icon-wrap">
                        <?= sow_icon($service['icon']) ?>
                    </div>
                    <div class="sow-svc-offer-text">
                        <h3><?= esc($service['title']) ?></h3>
                        <p><?= esc($service['desc']) ?></p>
                    </div>
                </div>
                <a href="<?= site_url('contact') ?>" class="sow-svc-learn-more">Learn More &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="sow-svc-process">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>How It Works</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-svc-process-steps">
            <?php foreach ($steps as $index => $step): ?>
            <?php if ($index > 0): ?>
            <span class="sow-svc-process-arrow" aria-hidden="true">&rarr;</span>
            <?php endif; ?>
            <div class="sow-svc-process-step-wrap">
                <div class="sow-svc-step-num"><?= $step['num'] ?></div>
                <div class="sow-svc-process-card">
                    <div class="sow-svc-process-icon"><?= sow_icon($step['icon']) ?></div>
                    <h4><?= esc($step['title']) ?></h4>
                    <p><?= esc($step['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Bulk Scrap CTA -->
<section class="sow-svc-bulk">
    <div class="container mx-auto px-4">
        <div class="sow-svc-bulk-card" style="background-image: url('<?= sow_img('bulk-scrap-banner.png') ?>');">
            <div class="sow-svc-bulk-content">
                <h2>Have Bulk Scrap? We Have Solutions!</h2>
                <p>Partner with us for regular scrap pickup and best rates.</p>
                <a href="<?= site_url('contact') ?>" class="sow-svc-bulk-btn">
                    Become a Vendor
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Impact Stats -->
<section class="sow-svc-stats">
    <div class="container mx-auto px-4">
        <div class="sow-svc-stats-bar">
            <?php foreach ($impactStats as $stat): ?>
            <div class="sow-svc-stat-item">
                <div class="sow-svc-stat-icon-wrap"><?= sow_icon($stat['icon']) ?></div>
                <div class="sow-svc-stat-text">
                    <strong><?= esc($stat['value']) ?></strong>
                    <span><?= esc($stat['label']) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
