<?php
$heroStats = [
    ['icon' => 'users', 'value' => '50,000+', 'label' => 'Active Vendors'],
    ['icon' => 'vnd-cities', 'value' => '1000+', 'label' => 'Cities Covered'],
    ['icon' => 'vnd-verified', 'value' => '100%', 'label' => 'Trusted & Verified'],
    ['icon' => 'vnd-instant', 'value' => 'Instant', 'label' => 'Payments'],
];

$whyJoin = [
    ['icon' => 'vnd-rates', 'title' => 'Best Market Rates', 'desc' => 'Get competitive pricing for all types of scrap materials.'],
    ['icon' => 'vnd-transparent', 'title' => 'Transparent Pricing', 'desc' => 'Real-time rate updates with no hidden charges.'],
    ['icon' => 'vnd-payment', 'title' => 'Instant Payments', 'desc' => 'Receive payments directly to your bank account.'],
    ['icon' => 'vnd-pickup', 'title' => 'Regular Pickups', 'desc' => 'Hassle-free and on-time scrap pickups.'],
    ['icon' => 'vnd-growth', 'title' => 'Grow Your Business', 'desc' => 'Increase sales with our pan-India network.'],
    ['icon' => 'vnd-support', 'title' => 'Dedicated Support', 'desc' => 'Personalized support from our vendor care team.'],
];

$steps = [
    ['icon' => 'vnd-register', 'title' => 'Register', 'desc' => 'Fill in your details and submit the registration form.'],
    ['icon' => 'vnd-verify', 'title' => 'Verification', 'desc' => 'Our team will verify your details and approve your account.'],
    ['icon' => 'vnd-handshake', 'title' => 'Start Selling', 'desc' => 'List your scrap or schedule a pickup and get the best market rates.'],
    ['icon' => 'vnd-paid', 'title' => 'Get Paid', 'desc' => 'Receive instant payments directly in your bank account.'],
];

$scrapTypes = [
    ['img' => 'split_3_1.png', 'label' => 'Metal Scrap'],
    ['img' => 'split_0_0.png', 'label' => 'E-Waste'],
    ['img' => 'split_3_2.png', 'label' => 'Battery Scrap'],
    ['img' => 'split_0_1.png', 'label' => 'Plastic Scrap'],
    ['img' => 'split_0_3.png', 'label' => 'Paper Scrap'],
    ['img' => 'split_3_2 (1).png', 'label' => 'Industrial Scrap'],
    ['img' => 'split_3_3.png', 'label' => 'Vehicle Scrap'],
];
?>

<!-- Vendor Hero -->
<section class="sow-vnd-hero sow-header-offset" style="background-image: url('<?= sow_img('vendors-hero-bg.png') ?>');">
    <div class="container mx-auto px-4 sow-vnd-hero-body">
        <div class="sow-vnd-hero-content">
            <h1 class="sow-vnd-hero-title">India&rsquo;s Largest Scrap Vendor Network</h1>
            <p class="sow-vnd-hero-sub">Join thousands of vendors across India who trust Scrap on Wheels for transparent pricing, instant payments and growing business opportunities.</p>

            <div class="sow-vnd-hero-stats">
                <?php foreach ($heroStats as $stat): ?>
                <div class="sow-vnd-stat-circle">
                    <div class="sow-vnd-stat-icon"><?= sow_icon($stat['icon']) ?></div>
                    <strong><?= esc($stat['value']) ?></strong>
                    <span><?= esc($stat['label']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="sow-vnd-hero-btns">
                <a href="<?= site_url('contact') ?>" class="sow-btn-hero-primary">
                    Become a Vendor
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Join -->
<section class="sow-vnd-why">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>Why Join Our Vendor Network?</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-vnd-why-grid">
            <?php foreach ($whyJoin as $item): ?>
            <div class="sow-vnd-why-card">
                <div class="sow-vnd-why-icon"><?= sow_icon($item['icon']) ?></div>
                <h3><?= esc($item['title']) ?></h3>
                <p><?= esc($item['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="sow-vnd-process">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>How It Works</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-vnd-process-steps">
            <?php foreach ($steps as $index => $step): ?>
            <?php if ($index > 0): ?>
            <span class="sow-vnd-process-arrow" aria-hidden="true"></span>
            <?php endif; ?>
            <div class="sow-vnd-process-step">
                <div class="sow-vnd-process-icon"><?= sow_icon($step['icon']) ?></div>
                <h4><?= esc($step['title']) ?></h4>
                <p><?= esc($step['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Scrap Types -->
<section class="sow-vnd-scrap">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>We Deal In All Types Of Scrap</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-vnd-scrap-grid">
            <?php foreach ($scrapTypes as $type): ?>
            <div class="sow-vnd-scrap-card">
                <div class="sow-vnd-scrap-img">
                    <img src="<?= sow_img($type['img']) ?>" alt="<?= esc($type['label']) ?>" loading="lazy">
                </div>
                <span><?= esc($type['label']) ?></span>
            </div>
            <?php endforeach; ?>
            <div class="sow-vnd-scrap-card sow-vnd-scrap-more">
                <div class="sow-vnd-scrap-more-circle">
                    <span></span><span></span><span></span>
                </div>
                <span>And More</span>
            </div>
        </div>
    </div>
</section>

<!-- Partner CTA -->
<section class="sow-vnd-cta">
    <div class="container mx-auto px-4">
        <div class="sow-vnd-cta-card" style="background-image: url('<?= sow_img('bulk-scrap-banner.png') ?>');">
            <div class="sow-vnd-cta-content">
                <h2>Partner with India&rsquo;s Most Trusted Scrap Recycling Platform</h2>
                <p>Join our vendor network and grow your business with Scrap on Wheels.</p>
                <a href="<?= site_url('contact') ?>" class="sow-vnd-cta-btn">
                    Become a Vendor
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
