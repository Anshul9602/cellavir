<?php
$resources = [
    ['icon' => 'rupee', 'title' => 'Rate Card', 'desc' => 'View live scrap rates for metals, plastics, paper, and more.', 'href' => site_url('rate-card')],
    ['icon' => 'vnd-register', 'title' => 'Vendor Registration Guide', 'desc' => 'Step-by-step guide to joining our vendor network.', 'href' => site_url('vendors')],
    ['icon' => 'eco', 'title' => 'Sustainability', 'desc' => 'Learn how we promote responsible recycling across India.', 'href' => site_url('about-us')],
    ['icon' => 'building', 'title' => 'Corporate Solutions', 'desc' => 'Bulk scrap management for businesses and industries.', 'href' => site_url('corporate-solutions')],
    ['icon' => 'shield', 'title' => 'Privacy Policy', 'desc' => 'How we collect, use, and protect your information.', 'href' => site_url('privacy-policy')],
];

$faqs = [
    ['q' => 'How do I schedule a scrap pickup?', 'a' => 'You can schedule a pickup through our website, mobile app, or by calling our helpline at 80941 41410.'],
    ['q' => 'How are scrap rates determined?', 'a' => 'Rates are linked to live market prices and updated regularly. Final rates are confirmed at the time of weighing during pickup.'],
    ['q' => 'How do I become a vendor?', 'a' => 'Visit our Vendor Network page and click "Become a Vendor" to submit your registration. Our team will verify and approve your account.'],
    ['q' => 'Do you offer corporate bulk pickup services?', 'a' => 'Yes. We provide tailored corporate solutions with scheduled pickups, custom reporting, and dedicated account management.'],
    ['q' => 'When will I receive payment?', 'a' => 'Payments are processed instantly after digital weighing and verification, directly to your bank account or wallet.'],
];
?>

<!-- Resources Hero -->
<section class="sow-page-hero sow-res-hero sow-header-offset" style="background-image: url('<?= sow_img('vendors-hero-bg.png') ?>');">
    <div class="container mx-auto px-4 sow-page-hero-body">
        <div class="sow-page-hero-content">
            <h1 class="sow-page-hero-title">
                <span class="sow-hero-title-green">Resources</span>
            </h1>
            <p class="sow-page-hero-sub">Guides, tools, and information to help you get the most out of Scrap on Wheels — whether you&rsquo;re a customer, vendor, or corporate partner.</p>
        </div>
    </div>
</section>

<!-- Resource Cards -->
<section class="sow-page-section sow-res-grid-section">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>Helpful Resources</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-res-grid">
            <?php foreach ($resources as $resource): ?>
            <a href="<?= esc($resource['href']) ?>" class="sow-res-card">
                <div class="sow-res-card-icon"><?= sow_icon($resource['icon']) ?></div>
                <h3><?= esc($resource['title']) ?></h3>
                <p><?= esc($resource['desc']) ?></p>
                <span class="sow-res-card-link">Learn More &rarr;</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="sow-page-section sow-res-faq">
    <div class="container mx-auto px-4">
        <div class="sow-section-heading">
            <h2>Frequently Asked Questions</h2>
            <div class="sow-title-underline"></div>
        </div>
        <div class="sow-res-faq-list">
            <?php foreach ($faqs as $faq): ?>
            <details class="sow-res-faq-item">
                <summary><?= esc($faq['q']) ?></summary>
                <p><?= esc($faq['a']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- App Download CTA -->
<section class="sow-page-section sow-res-cta">
    <div class="container mx-auto px-4">
        <div class="sow-res-app-banner sow-page-card">
            <div class="sow-res-app-text">
                <h2>Download Our Mobile Apps</h2>
                <p>Book pickups, track orders, check rates, and manage your account on the go.</p>
                <a href="<?= site_url('/') ?>#download-app" class="sow-btn-primary inline-flex items-center gap-2 px-5 py-3 text-sm">
                    Download App
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </a>
            </div>
            <div class="sow-res-app-img">
                <img src="<?= sow_img('split_2_2.png') ?>" alt="Scrap on Wheels mobile apps" loading="lazy">
            </div>
        </div>
    </div>
</section>
