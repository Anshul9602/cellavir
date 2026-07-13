<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($pageTitle ?? cv_brand()['tagline'] . ' — ' . cv_brand()['short_name']) ?></title>
    <meta name="description" content="<?= esc(cv_brand()['statement']) ?>">
    <meta name="keywords" content="<?= esc(cv_brand()['seo_keywords']) ?>">
    <link rel="icon" href="<?= pp_img('logo.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/protocol-peptides.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/cellavei-portal.css') ?>">
</head>
<body class="protocol-peptides-theme cv-portal-js<?= !empty($bodyClass) ? ' ' . esc($bodyClass) : '' ?>">

<div class="cv-page-wrapper" id="header-group">
    <div class="cv-announcement header-announcements">
        <p><?= esc(cv_brand()['announcement']) ?></p>
    </div>

    <header class="cv-header">
        <div class="cv-header__inner">
            <a href="<?= site_url('/') ?>" class="cv-header__logo logo-block">
                <img src="<?= pp_img('logo.png') ?>" alt="CellaVie" class="logo-block__image">
            </a>

            <nav class="cv-header__nav" aria-label="Main">
                <a href="<?= site_url('/') ?>" class="<?= ($activeNav ?? '') === 'home' ? 'active' : '' ?>">Home</a>
                <a href="<?= site_url('shop') ?>" class="<?= ($activeNav ?? '') === 'shop' ? 'active' : '' ?>">Protocols</a>
                <a href="<?= site_url('science') ?>" class="<?= ($activeNav ?? '') === 'science' ? 'active' : '' ?>">Science</a>
                <a href="<?= site_url('about') ?>" class="<?= ($activeNav ?? '') === 'about' ? 'active' : '' ?>">About Us</a>
                <a href="<?= site_url('faq') ?>" class="<?= ($activeNav ?? '') === 'faq' ? 'active' : '' ?>">FAQs</a>
                <a href="<?= site_url('contact') ?>" class="<?= ($activeNav ?? '') === 'contact' ? 'active' : '' ?>">Contact</a>
            </nav>

            <div class="cv-header__actions">
                <button type="button" class="cv-mobile-toggle" id="cv-mobile-toggle" aria-label="Menu">
                    <?= cv_icon('menu', 'cv-lucide--nav') ?>
                </button>
            </div>
        </div>
    </header>

    <div class="cv-mobile-overlay" id="cv-mobile-overlay">
        <div class="cv-mobile-panel">
            <button type="button" class="cv-header__icon" id="cv-mobile-close" aria-label="Close" style="margin-left:auto;display:flex;">
                <?= cv_icon('x', 'cv-lucide--nav') ?>
            </button>
            <nav>
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('shop') ?>">Protocols</a>
                <a href="<?= site_url('science') ?>">Science</a>
                <a href="<?= site_url('about') ?>">About Us</a>
                <a href="<?= site_url('faq') ?>">FAQs</a>
                <a href="<?= site_url('contact') ?>">Contact</a>
            </nav>
        </div>
    </div>

    <main class="cv-main" id="MainContent">
