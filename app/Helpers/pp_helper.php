<?php

/**
 * CellaVie portal helpers
 */
function pp_img(string $filename): string
{
    return base_url('image/' . rawurlencode($filename));
}

function pp_product_img(string $filename): string
{
    return base_url('image/product/' . rawurlencode($filename));
}

/**
 * Brand logo — dark = black logo on light backgrounds, light = white logo on dark backgrounds.
 */
function pp_logo(string $variant = 'dark'): string
{
    $file = $variant === 'light' ? 'logo_white.PNG' : 'logo_black.png';

    return pp_img($file);
}

/**
 * Video URL if file exists in public/video/ or public/image/.
 * Case-insensitive match so Linux hosts work when filename casing differs (e.g. .MP4 vs .mp4).
 */
function pp_video(string $filename): ?string
{
    $folders = ['video', 'image'];

    foreach ($folders as $folder) {
        $dir = ROOTPATH . 'public' . DIRECTORY_SEPARATOR . $folder;
        if (!is_dir($dir)) {
            continue;
        }

        $direct = $dir . DIRECTORY_SEPARATOR . $filename;
        if (is_file($direct)) {
            return base_url($folder . '/' . rawurlencode($filename));
        }

        $needle = strtolower($filename);
        foreach (scandir($dir) ?: [] as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            if (strtolower($entry) === $needle && is_file($dir . DIRECTORY_SEPARATOR . $entry)) {
                return base_url($folder . '/' . rawurlencode($entry));
            }
        }
    }

    return null;
}

function pp_page_header(string $title): string
{
    $home = esc(site_url('/'));
    $titleEsc = esc($title);

    return <<<HTML
    <div class="protocol-page-header" style="padding-top:40px;padding-bottom:24px;">
        <div class="protocol-page-header__inner">
            <h1 class="protocol-page-header__title protocol-animate protocol-animate--slide-up protocol-animate--delay-100">{$titleEsc}</h1>
            <nav class="protocol-page-header__breadcrumbs protocol-animate protocol-animate--slide-up protocol-animate--delay-200" aria-label="Breadcrumb">
                <a href="{$home}">Home</a>
                <span class="protocol-page-header__delimiter">/</span>
                <span class="protocol-page-header__current">{$titleEsc}</span>
            </nav>
        </div>
    </div>
    HTML;
}

function pp_products(): array
{
    return cv_home_protocols();
}

function pp_glance_card(array $item, string $extraClass = ''): string
{
    $title = esc(strtoupper($item['title'] ?? $item['name'] ?? ''));
    $url = esc(site_url($item['url'] ?? 'shop'));
    $bg = esc(pp_img($item['card_bg'] ?? '-141.jpg.jpeg'));
    $product = esc(pp_product_img($item['product_image'] ?? 'ghk-ch.png'));
    $class = esc(trim('cv-glance-card ' . $extraClass));

    $tagsHtml = '';
    $tags = $item['tags'] ?? [];
    if ($tags !== []) {
        $tagsHtml = '<div class="cv-glance-card__tags">';
        foreach ($tags as $i => $tag) {
            if ($i > 0) {
                $tagsHtml .= '<span class="cv-glance-card__tag-line" aria-hidden="true"></span>';
            }
            $tagsHtml .= '<span class="cv-glance-card__tag">' . esc($tag) . '</span>';
        }
        $tagsHtml .= '</div>';
    }

    return <<<HTML
    <a href="{$url}" class="{$class}">
        <div class="cv-glance-card__bg" style="background-image:url('{$bg}')"></div>
        <div class="cv-glance-card__shade"></div>
        <div class="cv-glance-card__content">
            <h3 class="cv-glance-card__title">{$title}</h3>
            {$tagsHtml}
            <p class="cv-glance-card__note">Research Use Only</p>
        </div>
        <img src="{$product}" alt="" class="cv-glance-card__product" loading="lazy" width="400" height="600">
    </a>
    HTML;
}

function pp_product_card(array $product): string
{
    return pp_glance_card($product, 'product-card product-card--info');
}

function pp_product_section(string $heading, array $products, string $animDelay = '600'): string
{
    $cards = '';
    foreach ($products as $product) {
        $cards .= pp_product_card($product);
    }

    $headingEsc = esc($heading);

    return <<<HTML
    <section class="section-resource-list cv-glance-section">
        <div class="cv-glance-section__head protocol-animate protocol-animate--slide-up protocol-animate--delay-{$animDelay}">
            <h2 class="cv-glance-section__title">{$headingEsc}</h2>
        </div>
        <div class="cv-glance-grid protocol-animate protocol-animate--slide-up protocol-animate--delay-400">
            {$cards}
        </div>
    </section>
    HTML;
}

function pp_divider(): string
{
    return '<div class="protocol-section" style="padding-inline:15px;"><div class="protocol-section__inner"><hr class="protocol-divider" aria-hidden="true"></div></div>';
}

function pp_coa_banner(string $sub, string $heading, string $text, string $btnLabel, string $btnUrl): string
{
    $sub = esc($sub);
    $heading = esc($heading);
    $textHtml = $text;
    $btnLabel = esc($btnLabel);
    $btnUrl = esc($btnUrl);

    return <<<HTML
    <div class="protocol-section protocol-coa" style="padding-top:48px;padding-bottom:48px;">
        <div class="protocol-section__inner">
            <p class="protocol-section__subheading protocol-animate protocol-animate--slide-up protocol-animate--delay-100">{$sub}</p>
            <h2 class="protocol-section__heading protocol-animate protocol-animate--slide-up protocol-animate--delay-200">{$heading}</h2>
            <div class="protocol-section__text protocol-section__text--center protocol-animate protocol-animate--slide-up protocol-animate--delay-300">{$textHtml}</div>
            <div class="protocol-animate protocol-animate--slide-up protocol-animate--delay-500" style="margin-top:24px;">
                <a href="{$btnUrl}" class="protocol-btn">{$btnLabel}</a>
            </div>
        </div>
    </div>
    HTML;
}
