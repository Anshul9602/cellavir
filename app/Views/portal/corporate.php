<?php
$solutions = [
    ['icon' => 'factory', 'title' => 'Bulk Scrap Procurement', 'desc' => 'Regular scheduled pickups for high-volume industrial and commercial scrap.'],
    ['icon' => 'users', 'title' => 'Vendor Management', 'desc' => 'Centralized vendor coordination with verified partners across India.'],
    ['icon' => 'scale', 'title' => 'Digital Weighing & Reporting', 'desc' => 'Accurate weighing with custom reports for audit and compliance.'],
    ['icon' => 'shield', 'title' => 'Compliance & Documentation', 'desc' => 'Proper documentation for environmental and regulatory requirements.'],
    ['icon' => 'truck', 'title' => 'Scheduled Pickups', 'desc' => 'Flexible pickup schedules tailored to your operations.'],
    ['icon' => 'vnd-support', 'title' => 'Dedicated Account Manager', 'desc' => 'Personalized support from a corporate account specialist.'],
];

$industries = [
    'Manufacturing & Industrial',
    'IT & Corporate Offices',
    'Retail & Warehousing',
    'Construction & Real Estate',
    'Hospitality & Healthcare',
    'Education & Institutions',
];

$steps = [
    ['icon' => 'calendar', 'title' => 'Consultation', 'desc' => 'Share your scrap volume, locations, and requirements.'],
    ['icon' => 'vnd-verify', 'title' => 'Custom Proposal', 'desc' => 'We design a tailored solution with pricing and schedule.'],
    ['icon' => 'truck', 'title' => 'Onboarding', 'desc' => 'Set up pickups, vendors, and reporting dashboards.'],
    ['icon' => 'wallet', 'title' => 'Ongoing Support', 'desc' => 'Regular pickups with transparent reporting and payments.'],
];

$trustFeatures = [
    ['icon' => 'trust-users', 'title' => '1,000+ Corporate Clients', 'desc' => 'Trusted by leading businesses'],
    ['icon' => 'rupee', 'title' => 'Cost Optimization', 'desc' => 'Reduce scrap management costs'],
    ['icon' => 'eco', 'title' => 'ESG Compliance', 'desc' => 'Support sustainability goals'],
    ['icon' => 'network', 'title' => 'Pan-India Coverage', 'desc' => 'Multi-location support'],
];
?>

<!-- Corporate Hero -->
<section class="sow-hero sow-svc-hero sow-corp-hero sow-header-offset" style="background-image: url('<?= sow_img('home bannerbg.png') ?>');">
    <div class="container mx-auto px-4 sow-hero-body">
        <div class="sow-hero-content">
            <h1 class="sow-hero-title">
                <span class="sow-hero-title-green">Corporate Solutions</span>
            </h1>
            <div class="sow-hero-sub">
                <p>Simplify scrap management for your business — bulk pickups, vendor coordination, custom reporting, and sustainable operations at scale.</p>
            </div>
            <div class="sow-hero-btns">
                <a href="<?= site_url('contact') ?>" class="sow-btn-hero-primary">
                    Request a Proposal
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="tel:+918094141410" class="sow-btn-hero-light">Talk to Sales</a>
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

<!-- Solutions -->
<section class="sow-page-section sow-corp-solutions">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>What We Offer</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-svc-offer-grid">
            <?php foreach ($solutions as $item): ?>
            <div class="sow-svc-offer-card">
                <div class="sow-svc-offer-top">
                    <div class="sow-svc-offer-icon-wrap">
                        <?= sow_icon($item['icon']) ?>
                    </div>
                    <div class="sow-svc-offer-text">
                        <h3><?= esc($item['title']) ?></h3>
                        <p><?= esc($item['desc']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Industries -->
<section class="sow-page-section sow-corp-industries">
    <div class="container mx-auto px-4">
        <div class="sow-corp-split">
            <div class="sow-page-card sow-corp-industries-content">
                <div class="sow-section-heading sow-section-heading--left">
                    <h2>Industries We Serve</h2>
                    <div class="sow-title-underline"></div>
                </div>
                <ul class="sow-corp-industry-list">
                    <?php foreach ($industries as $industry): ?>
                    <li><?= esc($industry) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="sow-corp-industries-visual">
                <img src="<?= sow_img('split_1_3.png') ?>" alt="Corporate scrap management dashboard" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="sow-page-section sow-corp-process">
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

<!-- CTA -->
<section class="sow-page-section sow-corp-cta">
    <div class="container mx-auto px-4">
        <div class="sow-page-cta-card" style="background-image: url('<?= sow_img('bulk-scrap-banner.png') ?>');">
            <div class="sow-page-cta-content">
                <h2>Ready to Streamline Your Scrap Management?</h2>
                <p>Get a custom proposal for your organization with transparent pricing and dedicated support.</p>
                <a href="<?= site_url('contact') ?>" class="sow-page-cta-btn">
                    Request a Proposal
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
