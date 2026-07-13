<?php
$rateCategories = [
    [
        'title' => 'Metal Scrap',
        'icon' => 'split_3_1.png',
        'rates' => [
            ['material' => 'Copper', 'price' => '₹ 820 /kg'],
            ['material' => 'Aluminum', 'price' => '₹ 210 /kg'],
            ['material' => 'Brass', 'price' => '₹ 450 /kg'],
            ['material' => 'Iron', 'price' => '₹ 42 /kg'],
            ['material' => 'Steel', 'price' => '₹ 38 /kg'],
        ],
    ],
    [
        'title' => 'Paper & Cardboard',
        'icon' => 'split_0_3.png',
        'rates' => [
            ['material' => 'Newspaper', 'price' => '₹ 18 /kg'],
            ['material' => 'Cardboard', 'price' => '₹ 12 /kg'],
            ['material' => 'Office Paper', 'price' => '₹ 15 /kg'],
            ['material' => 'Books & Magazines', 'price' => '₹ 10 /kg'],
        ],
    ],
    [
        'title' => 'Plastic Scrap',
        'icon' => 'split_0_1.png',
        'rates' => [
            ['material' => 'Mixed Plastic', 'price' => '₹ 25 /kg'],
            ['material' => 'PET Bottles', 'price' => '₹ 30 /kg'],
            ['material' => 'HDPE', 'price' => '₹ 28 /kg'],
            ['material' => 'PP Plastic', 'price' => '₹ 22 /kg'],
        ],
    ],
    [
        'title' => 'E-Waste & Battery',
        'icon' => 'split_0_0.png',
        'rates' => [
            ['material' => 'E-Waste (General)', 'price' => '₹ 35 /kg'],
            ['material' => 'Mobile Phones', 'price' => '₹ 120 /kg'],
            ['material' => 'Lead Battery', 'price' => '₹ 95 /kg'],
            ['material' => 'Lithium Battery', 'price' => '₹ 150 /kg'],
        ],
    ],
    [
        'title' => 'Industrial Scrap',
        'icon' => 'split_3_2 (1).png',
        'rates' => [
            ['material' => 'Industrial Iron', 'price' => '₹ 40 /kg'],
            ['material' => 'Machinery Scrap', 'price' => '₹ 35 /kg'],
            ['material' => 'Cable & Wire', 'price' => '₹ 180 /kg'],
            ['material' => 'Stainless Steel', 'price' => '₹ 55 /kg'],
        ],
    ],
    [
        'title' => 'Vehicle Scrap',
        'icon' => 'split_3_3.png',
        'rates' => [
            ['material' => 'Two Wheeler', 'price' => 'Market Rate'],
            ['material' => 'Four Wheeler', 'price' => 'Market Rate'],
            ['material' => 'Auto Parts', 'price' => '₹ 45 /kg'],
            ['material' => 'Vehicle Battery', 'price' => '₹ 95 /kg'],
        ],
    ],
];

$updatedAt = 'Today, 10:30 AM';
?>

<!-- Rate Card Hero -->
<section class="sow-page-hero sow-rates-hero sow-header-offset" style="background-image: url('<?= sow_img('home bannerbg.png') ?>');">
    <div class="container mx-auto px-4 sow-page-hero-body">
        <div class="sow-page-hero-content">
            <h1 class="sow-page-hero-title">
                <span class="sow-hero-title-green">Live Scrap Rate Card</span>
            </h1>
            <p class="sow-page-hero-sub">Transparent, market-linked rates updated daily. Final prices are confirmed at the time of digital weighing during pickup.</p>
            <div class="sow-rates-hero-meta">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Rates updated <?= esc($updatedAt) ?>
            </div>
        </div>
    </div>
</section>

<!-- Notice -->
<section class="sow-page-section sow-rates-notice-section">
    <div class="container mx-auto px-4">
        <div class="sow-rates-notice">
            <strong>Note:</strong> Rates shown are indicative and may vary based on market conditions, material quality, and location. Contact us for bulk or corporate pricing.
        </div>
    </div>
</section>

<!-- Rate Categories -->
<section class="sow-page-section sow-rates-categories">
    <div class="container mx-auto px-4">
        <div class="sow-rates-category-grid">
            <?php foreach ($rateCategories as $category): ?>
            <div class="sow-rates-category-card">
                <div class="sow-rates-category-head">
                    <div class="sow-rates-category-img">
                        <img src="<?= sow_img($category['icon']) ?>" alt="<?= esc($category['title']) ?>" loading="lazy">
                    </div>
                    <h3><?= esc($category['title']) ?></h3>
                </div>
                <div class="sow-rates-list">
                    <?php foreach ($category['rates'] as $rate): ?>
                    <div class="sow-rates-row">
                        <span class="sow-rates-material"><?= esc($rate['material']) ?></span>
                        <span class="price"><?= esc($rate['price']) ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="sow-page-section sow-rates-cta">
    <div class="container mx-auto px-4">
        <div class="sow-page-cta-card" style="background-image: url('<?= sow_img('bulk-scrap-banner.png') ?>');">
            <div class="sow-page-cta-content">
                <h2>Ready to Sell Your Scrap?</h2>
                <p>Schedule a pickup and get the best market rates with instant payment.</p>
                <a href="<?= site_url('contact') ?>" class="sow-page-cta-btn">
                    Book Pickup
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
