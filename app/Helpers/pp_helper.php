<?php

/**
 * CellaVie portal helpers
 */
function pp_img(string $filename): string
{
    return base_url('image/' . rawurlencode($filename));
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
    return [
        ['name' => 'CJC-1295 with DAC – 5mg | Research Use Only', 'slug' => 'cjc-1295-dac-5mg'],
        ['name' => 'Ipamorelin – 10mg | Research Use Only', 'slug' => 'ipamorelin-10mg'],
        ['name' => 'Tesamorelin – 10mg | Research Use Only', 'slug' => 'tesamorelin-10mg'],
        ['name' => 'GHK-Cu – 60mg | Research Use Only', 'slug' => 'ghk-cu-60mg'],
    ];
}

function pp_product_card(array $product): string
{
    $name = esc($product['name']);

    return <<<HTML
    <article class="product-card product-card--info">
        <div class="product-card__image-wrap">
            <div class="product-card__placeholder">Research Compound</div>
        </div>
        <div class="product-card__body">
            <h3 class="product-card__title">{$name}</h3>
        </div>
    </article>
    HTML;
}

function pp_product_section(string $heading, array $products, string $animDelay = '600'): string
{
    $cards = '';
    foreach ($products as $product) {
        $cards .= pp_product_card($product);
    }

    $headingEsc = esc($heading);

    return <<<HTML
    <section class="section-resource-list">
        <div class="section-resource-list__header protocol-animate protocol-animate--slide-up protocol-animate--delay-{$animDelay}">
            <h2>{$headingEsc}</h2>
        </div>
        <div class="product-grid protocol-animate protocol-animate--slide-right protocol-animate--delay-400">
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
