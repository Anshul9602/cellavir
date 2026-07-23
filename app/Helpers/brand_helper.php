<?php

/**
 * CellaVie brand content — sourced from website blueprint document
 */

function cv_icon(string $name, string $class = ''): string
{
    $classes = trim('cv-lucide ' . $class);

    return '<i data-lucide="' . esc($name) . '" class="' . esc($classes) . '" aria-hidden="true"></i>';
}

function cv_faq_toggle_icon(string $class = ''): string
{
    $iconClass = trim('cv-lucide--toggle ' . $class);

    return '<span class="protocol-faq__icon protocol-faq__icon--toggle" aria-hidden="true">'
        . cv_icon('plus', $iconClass . ' cv-lucide--toggle-plus')
        . cv_icon('minus', $iconClass . ' cv-lucide--toggle-minus')
        . '</span>';
}

function cv_social_icon(string $name, string $class = ''): string
{
    $icons = [
        'instagram' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/></svg>',
        'facebook' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 8.5h2.5l-.5 3H14v9h-4v-9H8v-3h2V7.2c0-2.2 1.2-3.5 3.6-3.5H16v3h-1.8c-.7 0-1 .3-1 .9V8.5z"/></svg>',
        'linkedin' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.5 8.5h3v11h-3v-11zm1.5-5a1.8 1.8 0 110 3.6 1.8 1.8 0 010-3.6zM10 8.5h2.8v1.5h.1c.4-.8 1.5-1.7 3.1-1.7 3.3 0 3.9 2.1 3.9 4.9v6.3h-3v-5.6c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9v5.7H10V8.5z"/></svg>',
        'youtube' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.2a2.5 2.5 0 00-1.8-1.8C17.7 5 12 5 12 5s-5.7 0-7.8.4A2.5 2.5 0 002.4 7.2 26 26 0 002 12a26 26 0 00.4 4.8 2.5 2.5 0 001.8 1.8C6.3 19 12 19 12 19s5.7 0 7.8-.4a2.5 2.5 0 001.8-1.8A26 26 0 0022 12a26 26 0 00-.4-4.8zM10 15.5v-7l6 3.5-6 3.5z"/></svg>',
        'mail' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>',
    ];

    if (!isset($icons[$name])) {
        return '';
    }

    $classes = trim('cv-social-icon ' . $class);

    return '<span class="' . esc($classes) . '" aria-hidden="true">' . $icons[$name] . '</span>';
}

function cv_brand(): array
{
    return [
        'name' => 'CellaVie Premium Peptides',
        'short_name' => 'CellaVie',
        'statement' => 'Precision peptide protocols designed to optimize your biology and elevate your baseline.',
        'mission' => 'To redefine healthy aging through science-backed peptide protocols that support longevity, recovery, performance, and cellular wellness.',
        'vision' => "To become the world's most trusted premium peptide wellness company by making precision longevity accessible through clinically informed science.",
        'tagline' => 'Built on Science. Made for You.',
        'hero_headline' => 'The Science of Peptides, Made Personal.',
        'hero_subtext' => 'Research-driven peptide protocols and trusted guidance, developed with clinicians to help you make informed decisions.',
        'announcement' => 'Built on Science. Made for You. — CellaVie Premium Peptides',
        'newsletter' => 'Stay connected to the future of longevity.',
        'hero' => [
            'headline' => 'Science for the Future. Wellness for Life.',
            'subheading' => 'Precision peptide protocols engineered to support healthier aging from the cellular level.',
            'cta_primary' => 'Explore Protocols',
            'cta_primary_url' => 'shop',
            'cta_secondary' => 'Learn the Science',
            'cta_secondary_url' => 'science',
        ],
        'seo_keywords' => 'premium peptides, peptide therapy, longevity science, healthy aging, bioactive peptides, cellular health, precision wellness, regenerative wellness, wellness optimization, peptide research, science-backed wellness, collagen support, recovery protocols, metabolic health, longevity protocols',
        'personality' => ['Luxury', 'Editorial', 'Sophisticated', 'Clinical', 'Modern', 'Minimal', 'Natural', 'Confident'],
        'personality_note' => 'Never loud. Never salesy.',
        'contact_email' => 'cellaviesupport@gmail.com',
        'legal_updated' => 'July 17, 2026',
    ];
}

function cv_timeline(): array
{
    return ['Cell', 'Signal', 'Repair', 'Performance', 'Longevity'];
}

function cv_science_features(): array
{
    return [
        ['title' => 'Science-Backed', 'text' => 'Every protocol is rooted in research and clinical evidence.', 'icon' => 'microscope'],
        ['title' => 'Precision Designed', 'text' => 'Carefully formulated peptides for targeted biological outcomes.', 'icon' => 'crosshair'],
        ['title' => 'Cellular Focus', 'text' => 'Works at the cellular level for real, lasting change.', 'icon' => 'dna'],
        ['title' => 'Transparent', 'text' => 'Clear communication, honest science, no unnecessary claims.', 'icon' => 'badge-check'],
        ['title' => 'Results Driven', 'text' => 'Protocols built to help you feel, perform, and age better.', 'icon' => 'trending-up'],
    ];
}

function cv_home_timeline(): array
{
    return [
        ['step' => 'Cell', 'text' => 'Cells receive biological signals', 'icon' => 'circle-dot'],
        ['step' => 'Signal', 'text' => 'Signals are sent to trigger responses', 'icon' => 'radio'],
        ['step' => 'Repair', 'text' => 'Repair processes begin', 'icon' => 'plus-circle', 'highlight' => true],
        ['step' => 'Performance', 'text' => 'Functions improve at the cellular level', 'icon' => 'activity'],
        ['step' => 'Longevity', 'text' => 'Sustained wellness and long-term health', 'icon' => 'infinity'],
    ];
}

function cv_science_timeline(): array
{
    return [
        ['step' => 'Cell', 'text' => 'Peptides communicate with cells and initiate biological signals.', 'icon' => 'circle-dot'],
        ['step' => 'Signal', 'text' => 'Signals are sent to trigger specific cellular responses.', 'icon' => 'radio'],
        ['step' => 'Repair', 'text' => 'Cells begin repair processes and reduce inflammation.', 'icon' => 'plus-circle'],
        ['step' => 'Performance', 'text' => 'Improved function, energy, and metabolic efficiency.', 'icon' => 'activity'],
        ['step' => 'Longevity', 'text' => 'Sustained wellness and long-term health optimization.', 'icon' => 'infinity'],
    ];
}

function cv_home_hero_features(): array
{
    return [
        ['title' => 'Science-Backed', 'icon' => 'microscope'],
        ['title' => 'Precision Designed', 'icon' => 'crosshair'],
        ['title' => 'Cellular Focus', 'icon' => 'dna'],
        ['title' => 'Clinically Informed', 'icon' => 'badge-check'],
    ];
}

function cv_home_trust_bar(): array
{
    return [
        ['title' => 'Clinical Grade Quality', 'icon' => 'shield-check'],
        ['title' => 'Transparent Formulations', 'icon' => 'badge-check'],
        ['title' => 'Third-Party Tested', 'icon' => 'flask-conical'],
        ['title' => 'Made in USA', 'icon' => 'flag'],
    ];
}

function cv_home_pillars(): array
{
    return [
        ['title' => 'Optimize Your Biology', 'text' => 'Support cellular communication and biological performance from within.', 'icon' => 'leaf'],
        ['title' => 'Elevate Your Baseline', 'text' => 'Build resilience through precision protocols designed for long-term wellness.', 'icon' => 'atom'],
        ['title' => 'Longevity & Wellness', 'text' => 'Proactive healthy aging rooted in science, transparency, and clinical rigor.', 'icon' => 'shield-check'],
    ];
}

function cv_home_protocols(): array
{
    $backgrounds = [
        '-141.jpg.jpeg',
        '-142.jpg.jpeg',
        'Image 35.jpeg',
        'Image 36.jpeg',
        'Image 37.jpeg',
        'Understanding The Differences Between Lotion And Moisturizer.jpg.jpeg',
        '-141.jpg.jpeg',
    ];

    $items = [
        [
            'title'       => 'GHK-Cu',
            'description' => 'Copper peptide best known for supporting collagen production, skin rejuvenation, wound healing, and hair research.',
            'tags'        => ['Collagen', 'Skin Rejuvenation'],
            'url'         => 'shop',
            'product_image' => 'ghk-ch.png',
        ],
        [
            'title'       => 'Ipamorelin',
            'description' => 'Growth hormone secretagogue that selectively stimulates natural growth hormone release with minimal effect on cortisol or prolactin.',
            'tags'        => ['GH Secretagogue', 'Recovery'],
            'url'         => 'shop',
            'product_image' => 'lpamorelin.png',
        ],
        [
            'title'       => 'Tesamorelin',
            'description' => 'GHRH analogue primarily researched for reducing visceral fat and increasing natural growth hormone secretion.',
            'tags'        => ['GHRH Analogue', 'Metabolic Health'],
            'url'         => 'shop',
            'product_image' => 'tesamorelin.png',
        ],
        [
            'title'       => 'CJC-1295',
            'description' => 'Long-acting growth hormone-releasing hormone (GHRH) analogue designed to increase GH and IGF-1 levels.',
            'tags'        => ['GHRH Analogue', 'IGF-1'],
            'url'         => 'shop',
            'product_image' => 'cjc-1295.png',
        ],
        [
            'title'       => 'CJC-1295 with DAC',
            'description' => 'Extended-release version of CJC-1295 that remains active much longer due to the Drug Affinity Complex (DAC).',
            'tags'        => ['Extended Release', 'GH Research'],
            'url'         => 'shop',
            'product_image' => 'cjc-1295-dac.png',
        ],
        [
            'title'       => 'MOTS-c',
            'description' => 'Mitochondrial-derived peptide researched for improving metabolism, insulin sensitivity, exercise capacity, and healthy aging.',
            'tags'        => ['Mitochondrial', 'Longevity'],
            'url'         => 'shop',
            'product_image' => 'mots-c.png',
        ],
        [
            'title'       => 'GLP3-PP (30 mg)',
            'description' => 'Proprietary GLP-based research peptide intended to investigate metabolic regulation and appetite-related pathways (the manufacturer does not publicly specify its exact sequence or composition).',
            'tags'        => ['GLP Research', 'Metabolic Health'],
            'url'         => 'shop',
            'product_image' => 'glp3.png',
        ],
    ];

    foreach ($items as $i => &$item) {
        $item['card_bg'] = $backgrounds[$i] ?? $backgrounds[0];
    }

    return $items;
}

function cv_home_promises(): array
{
    return [
        ['title' => 'Pure & Potent', 'text' => 'High-purity peptide compounds backed by rigorous quality standards.', 'icon' => 'flask-conical'],
        ['title' => 'Transparent', 'text' => 'Clear science communication with no unnecessary claims or sales pressure.', 'icon' => 'search'],
        ['title' => 'Clinically Informed', 'text' => 'Protocols rooted in current research, clinical evidence, and precision wellness.', 'icon' => 'stethoscope'],
    ];
}

function cv_home_testimonials(): array
{
    return [
        ['quote' => 'Within a few weeks my recovery felt noticeably smoother. The guidance was clear and the protocol felt thoughtful, not rushed.', 'name' => 'K.L.', 'title' => 'Recovery Protocol'],
        ['quote' => 'I wanted something science-led without the hype. CellaVie explained the why behind each step and that made all the difference for me.', 'name' => 'M.C.', 'title' => 'Performance Protocol'],
        ['quote' => 'The process felt personal from day one. My questions were answered properly and I finally understood how the protocol fit my goals.', 'name' => 'C.Y.', 'title' => 'Vitality Protocol'],
        ['quote' => 'Clean branding, honest communication, and a team that actually listens. That is rare in this space.', 'name' => 'Elena K.', 'title' => 'CellaVie Client'],
    ];
}

function cv_testimonials(): array
{
    return [
        ['role' => 'Clinician', 'quote' => 'CellaVie protocols reflect the precision and transparency we expect in evidence-informed wellness. The science communication is clear and professional.', 'name' => 'Dr. Sarah M., Integrative Medicine'],
        ['role' => 'Practitioner', 'quote' => 'The editorial approach and protocol design feel refined — not sales-driven. My clients appreciate the clarity around what peptides are and how they work.', 'name' => 'James R., Wellness Practitioner'],
        ['role' => 'Patient', 'quote' => 'Small signals, extraordinary results — that resonates. I feel supported in taking a proactive approach to healthy aging at the cellular level.', 'name' => 'Elena K., CellaVie Client'],
    ];
}

function cv_research_topics(): array
{
    return ['Latest studies', 'Clinical references', 'Evidence summaries'];
}

function cv_values(): array
{
    return [
        ['title' => 'Science First', 'text' => 'Every protocol is informed by current research and clinical evidence.', 'icon' => 'microscope'],
        ['title' => 'Transparency', 'text' => 'We communicate clearly about what peptides are, how they work, and what to expect.', 'icon' => 'shield-check'],
        ['title' => 'Precision', 'text' => 'Protocols are designed with intention — tailored to specific biological goals.', 'icon' => 'target'],
        ['title' => 'Longevity', 'text' => 'We focus on sustainable wellness and long-term resilience, not short-term trends.', 'icon' => 'hourglass'],
        ['title' => 'Wellness', 'text' => 'Our work supports proactive health, recovery, and the art of living better.', 'icon' => 'leaf'],
        ['title' => 'Innovation', 'text' => 'We continuously evolve with the latest discoveries in peptide science and cellular health.', 'icon' => 'lightbulb'],
        ['title' => 'Integrity', 'text' => "We operate with honesty, responsibility, and respect for every individual's wellness journey.", 'icon' => 'heart-handshake'],
    ];
}

function cv_faqs(): array
{
    return [
        ['q' => 'What are peptides?', 'a' => 'Peptides are short chains of amino acids that act as biological messengers, helping regulate natural processes such as repair, recovery, inflammation, and cellular communication.'],
        ['q' => 'Are peptide protocols safe?', 'a' => 'When used under appropriate professional guidance, peptide protocols are designed to support specific biological functions. Individual suitability should always be assessed.'],
        ['q' => 'Who are CellaVie protocols for?', 'a' => 'Individuals seeking proactive wellness, healthy aging, recovery support, metabolic optimization, and overall longevity.'],
        ['q' => 'Do I need a consultation?', 'a' => 'Depending on the protocol, a consultation may be recommended to ensure the most appropriate approach.'],
        ['q' => 'Are your protocols science-backed?', 'a' => 'Yes. Our philosophy is rooted in current scientific research, clinical evidence, and precision wellness.'],
        ['q' => 'How quickly will I notice results?', 'a' => 'Experiences vary based on the protocol, individual biology, and consistency.'],
        ['q' => 'Are peptides the same as steroids?', 'a' => 'No. Peptides are signaling molecules that support biological communication and differ significantly from anabolic steroids in both structure and function.'],
        ['q' => 'Do you ship internationally?', 'a' => 'Shipping availability depends on local regulations and product availability.'],
    ];
}

function cv_science_sections(): array
{
    return [
        ['title' => 'What Are Peptides?', 'text' => 'Peptides are short chains of amino acids — the building blocks of proteins. Unlike full proteins, peptides are small enough to act as precise biological messengers, signaling cells to perform specific functions related to repair, recovery, inflammation, and communication.'],
        ['title' => 'How Do They Work?', 'text' => 'Peptides work by binding to receptors on cell surfaces and triggering targeted biological responses. Think of them as instructions — helping your body understand what to repair, when to recover, and how to optimize performance at the cellular level.'],
        ['title' => 'Why Signaling Matters', 'text' => 'Your biology already knows how to heal. Peptides simply help it communicate more effectively. Signaling is the language of cellular health — and when that communication is clear, the body can repair, regenerate, and perform at its best.'],
        ['title' => 'How Peptides Communicate', 'text' => 'Peptides act as signaling molecules that coordinate activity between cells. They can influence processes such as tissue repair, immune response, metabolic function, and collagen production — all essential to healthy aging and long-term wellness.'],
        ['title' => 'Cellular Repair', 'text' => "Many peptide protocols are designed to support the body's natural repair mechanisms. By enhancing cellular communication, peptides can help accelerate recovery, reduce inflammation, and promote tissue regeneration."],
        ['title' => 'Healthy Aging', 'text' => 'Healthy aging begins within. CellaVie protocols are engineered to support longevity, recovery, performance, and cellular wellness — helping you build resilience for long-term wellbeing.'],
    ];
}
