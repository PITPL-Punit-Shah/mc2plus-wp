<?php
/**
 * Template Name: About Page
 */

get_header();

/*
 * ==========================================================
 * HERO SECTION
 * ==========================================================
 */

$hero_eyebrow = get_field('hero_eyebrow') ?: 'ABOUT';
$hero_line_1 = get_field('hero_line_1') ?: 'Where India&rsquo;s';
$hero_line_2 = get_field('hero_line_2') ?: 'Energy Innovation';
$hero_line_3 = get_field('hero_line_3') ?: 'gets built.';
$hero_description = get_field('hero_description') ?: 'MC&sup2;+ exists with a single mandate: to catalyse Indian energy innovation and accelerate the country&rsquo;s energy security and transition.';

/*
 * ==========================================================
 * MISSION SECTION
 * ==========================================================
 */

$mission_title = get_field('mission_title') ?: 'Our Mission';

$mission_description = get_field('mission_description') ?: 'Take energy ventures from idea to industrial deployment through unmatched access to infrastructure, capital, mentorship and market access.';

/*
 * ==========================================================
 * VISION SECTION
 * ==========================================================
 */

$vision_title = get_field('vision_title') ?: 'Our Vision';

$vision_paragraph_1 = get_field('vision_paragraph_1') ?: 'MC&sup2;+ is India&rsquo;s commitment to backing the founders, researchers, and builders creating the technologies that will define India&rsquo;s energy future. By opening up the infrastructure, capital, piloting sites, and expertise of India&rsquo;s largest energy majors, we are creating an unprecedented platform for energy entrepreneurship at a scale no single organization could offer alone.';

$vision_paragraph_2 = get_field('vision_paragraph_2') ?: 'MC&sup2;+ brings HPCL, ONGC, Indian Oil, BPCL, GAIL, Oil India and Petronet LNG under one mandate. Where a startup once knocked on different doors hoping one would open, there is now a single, serious, well-funded door, backed by $232 billion in combined industrial scale.';

$vision_highlight = get_field('vision_highlight') ?: 'Our goal is to make India the world&rsquo;s most vibrant hub for energy innovations that define a secure, sustainable, globally competitive energy future.';

/*
 * ==========================================================
 * SPONSORS SECTION
 * ==========================================================
 */

$sponsors_eyebrow = get_field('sponsors_eyebrow') ?: 'Backed by India&rsquo;s oil and gas majors with a turnover of $232 billion';

$meet_team_text = get_field('meet_team_text') ?: 'Meet the team';
$meet_team_url = get_field('meet_team_url') ?: home_url('/team/');

$initiatives_text = get_field('initiatives_text') ?: 'Explore initiatives';
$initiatives_url = get_field('initiatives_url') ?: home_url('/initiatives/');

/*
 * Default sponsor data.
 * Preserves the existing content if ACF repeater is empty.
 */

$default_sponsors = array(
    array(
        'logo' => get_template_directory_uri() . '/assets/images/hindustan-petroleum.png',
        'alt' => 'Hindustan Petroleum Corporation',
        'width' => '99',
        'height' => '129',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/oil-natural-gas.png',
        'alt' => 'Oil and Natural Gas Corporation',
        'width' => '101',
        'height' => '101',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/indian-oil.png',
        'alt' => 'Indian Oil Corporation',
        'width' => '112',
        'height' => '119',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/bharat-petroleum.png',
        'alt' => 'Bharat Petroleum Corporation',
        'width' => '81',
        'height' => '101',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/gas-authority.png',
        'alt' => 'GAIL (India) Limited',
        'width' => '141',
        'height' => '106',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/oil-india.png',
        'alt' => 'Oil India Limited',
        'width' => '83',
        'height' => '122',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/petronet-lng.png',
        'alt' => 'Petronet LNG Limited',
        'width' => '78',
        'height' => '103',
    ),
);

$sponsors = get_field('sponsor_logos');

if (empty($sponsors)) {
    $sponsors = $default_sponsors;
}

/*
 * ==========================================================
 * SCALE SECTION
 * ==========================================================
 */

$scale_eyebrow = get_field('scale_eyebrow') ?: 'THE SCALE BEHIND YOU';

$scale_title_line_1 = get_field('scale_title_line_1') ?: 'The industrial weight behind';

$scale_title_line_2 = get_field('scale_title_line_2') ?: 'every venture.';

$scale_intro = get_field('scale_intro') ?: 'Seven energy majors contribute infrastructure, domain mentorship, pilot sites and anchor demand, assets no standalone incubator can replicate.';

/*
 * Default statistics.
 * Preserves existing content if ACF repeater is empty.
 */

$default_statistics = array(
    array(
        'value' => '4OO+ acres',
        'description' => 'Dedicated R&amp;D campuses across the energy majors',
    ),
    array(
        'value' => '12+',
        'description' => 'R&amp;D centres and labs open to startups',
    ),
    array(
        'value' => 'Pan India',
        'description' => 'Refining, E&amp;P, gas, LNG and retail operations',
    ),
    array(
        'value' => '7 Energy Majors. 1 Mandate.',
        'description' => 'Balance sheets behind a single mandate',
    ),
);

$statistics = get_field('statistics');

if (empty($statistics)) {
    $statistics = $default_statistics;
}
?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" data-astro-cid-cvz4ynoi>
    <div class="orbit position-absolute top-0 start-0 w-100" aria-hidden="true" data-astro-cid-cvz4ynoi>
        <!-- KEEP YOUR EXISTING HERO SVG EXACTLY AS-IS -->
        <svg width="1920" height="1040" viewBox="0 0 1920 1040" fill="none" class="curves" data-astro-cid-cvz4ynoi="true">
            <path id="Vector" d="M1920 0C1920 530.19 1490.19 960 960 960C429.81 960 -0.000244141 530.19 -0.000244141 0" stroke="#F37D2C" stroke-miterlimit="10" />
            <path id="Vector_2" d="M1667.63 739.96C1667.63 792.4 1625.12 834.9 1572.69 834.9C1520.25 834.9 1477.75 792.39 1477.75 739.96C1477.75 687.52 1520.26 645.02 1572.69 645.02C1625.13 645.02 1667.63 687.53 1667.63 739.96Z" stroke="#F37D2C" stroke-miterlimit="10" />
            <path id="Vector_3" d="M-19.1301 414.94C284.03 461.59 516.18 723.59 516.18 1039.81" stroke="#F37D2C" stroke-miterlimit="10" />
            <path id="Vector_4" d="M1622.04 695.2L1630.19 684.27C1634.32 678.73 1633.97 671.05 1629.36 665.91L1624.26 660.22L1635.48 666.45C1639.54 668.7 1644.53 668.41 1648.3 665.69L1659.14 657.88L1652.31 667.5C1649.42 671.57 1648.82 676.85 1650.74 681.47L1656.45 695.2L1649.73 687.86C1645.55 683.3 1638.59 682.67 1633.66 686.4L1622.05 695.2H1622.04Z" fill="#F37D2C" />
            <path id="Vector_5" d="M1484.47 775.12L1491.6 784.71C1494.65 788.81 1500.14 790.22 1504.78 788.09L1514.97 783.43L1504.22 793.02C1501.65 795.32 1501.23 799.19 1503.27 801.97C1506.45 806.32 1510.94 812.2 1513.04 813.83C1513.04 813.83 1505.82 810.66 1500.02 805.65C1496.93 802.98 1492.58 802.33 1488.82 803.91L1477.75 808.56L1487.16 798.58C1488.83 796.81 1489.41 794.27 1488.67 791.95C1487.42 788.06 1485.55 781.62 1484.48 775.12H1484.47Z" fill="#F37D2C" />
            <path id="Vector_6" d="M96.4798 419.94L102.58 435.64C104.09 439.52 100.64 443.49 96.5898 442.56L81.7998 439.13L101.67 448.76C106.67 451.18 110.99 454.81 114.25 459.3L125.36 474.63L121.36 465.31C119.59 461.19 123.54 456.92 127.79 458.37L148.83 465.54L122.12 451.29C117.19 448.66 112.99 444.84 109.9 440.18L96.4798 419.93V419.94Z" fill="#F37D2C" />
            <path id="Vector_7" d="M451.08 760.06L468.24 809.38C469.49 812.98 465.71 816.26 462.33 814.52L413.98 789.7L444.38 812.49C465.36 828.22 481.37 849.67 490.47 874.27L501.68 904.55L489.96 849.12C489.23 845.68 492.78 842.91 495.94 844.45C508.04 850.37 530.94 861.25 540.07 863.52L519.68 849.9C497.17 834.86 478.88 814.32 466.53 790.22L451.08 760.06Z" fill="#F37D2C" />
        </svg>
    </div>

    <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-cvz4ynoi>
        <p class="eyebrow" data-astro-cid-cvz4ynoi><?php echo esc_html($hero_eyebrow); ?></p>

        <div class="underline mx-auto" aria-hidden="true" data-astro-cid-cvz4ynoi></div>

        <h1 data-astro-cid-cvz4ynoi>
            <span class="line reveal-line" data-astro-cid-cvz4ynoi>
                <span class="reveal-line-box" data-astro-cid-cvz4ynoi>
                    <span class="reveal-line-text" data-astro-cid-cvz4ynoi>
                        <?php echo wp_kses_post($hero_line_1); ?>
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-cvz4ynoi="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>
                </span>
            </span>

            <span class="line reveal-line" data-astro-cid-cvz4ynoi>
                <span class="reveal-line-box" data-astro-cid-cvz4ynoi>
                    <span class="reveal-line-text accent" data-astro-cid-cvz4ynoi>
                        <?php echo esc_html($hero_line_2); ?>
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-cvz4ynoi="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>
                </span>
            </span>

            <span class="line reveal-line" data-astro-cid-cvz4ynoi>
                <span class="reveal-line-box" data-astro-cid-cvz4ynoi>
                    <span class="reveal-line-text" data-astro-cid-cvz4ynoi>
                        <?php echo wp_kses_post($hero_line_3); ?>
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-cvz4ynoi="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>
                </span>
            </span>
        </h1>

        <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-cvz4ynoi>
            <?php echo wp_kses_post($hero_description); ?>
        </p>

        <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section" data-astro-cid-cvz4ynoi>
            <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-cvz4ynoi="true">
                <path id="Vector" d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z" fill="#1E1E3C" />
            </svg>
        </button>
    </div>
</section>

<!-- Mission Section -->
<section class="mission" data-astro-cid-urncdft6>
    <div class="container grid" data-astro-cid-urncdft6>
        <h2 data-astro-cid-urncdft6>
            <?php echo esc_html($mission_title); ?>
        </h2>

        <p class="body" data-astro-cid-urncdft6>
            <?php echo wp_kses_post($mission_description); ?>
        </p>
    </div>
</section>

<!-- Vision Section -->
<section class="vision" data-astro-cid-qb6ekgoj>
    <div class="container grid" data-astro-cid-qb6ekgoj>
        <h2 data-astro-cid-qb6ekgoj>
            <?php echo esc_html($vision_title); ?>
        </h2>

        <div class="body" data-astro-cid-qb6ekgoj>
            <p data-astro-cid-qb6ekgoj>
                <?php echo wp_kses_post($vision_paragraph_1); ?>
            </p>

            <p data-astro-cid-qb6ekgoj>
                <?php echo wp_kses_post($vision_paragraph_2); ?>
            </p>

            <p class="accent" data-astro-cid-qb6ekgoj>
                <?php echo wp_kses_post($vision_highlight); ?>
            </p>
        </div>
    </div>
</section>

<!-- Sponsors Section -->
<section class="sponsors" data-astro-cid-7krvz6jy>
    <div class="container" data-astro-cid-7krvz6jy>

        <p class="eyebrow" data-astro-cid-7krvz6jy>
            <?php echo wp_kses_post($sponsors_eyebrow); ?>
        </p>

        <div class="logos-viewport" data-astro-cid-7krvz6jy>
            <ul class="logos list-unstyled" data-astro-cid-7krvz6jy>

                <?php foreach ($sponsors as $sponsor) : ?>

                    <?php
                    $logo = !empty($sponsor['logo']) ? $sponsor['logo'] : '';
                    $alt = !empty($sponsor['alt']) ? $sponsor['alt'] : '';
                    $width = !empty($sponsor['width']) ? $sponsor['width'] : '';
                    $height = !empty($sponsor['height']) ? $sponsor['height'] : '';

                    if (is_array($logo)) {
                        $logo_url = $logo['url'];
                        $alt = !empty($logo['alt']) ? $logo['alt'] : $alt;
                        $width = !empty($logo['width']) ? $logo['width'] : $width;
                        $height = !empty($logo['height']) ? $logo['height'] : $height;
                    } else {
                        $logo_url = $logo;
                    }
                    ?>

                    <li data-astro-cid-7krvz6jy>
                        <span class="logo-frame" data-astro-cid-7krvz6jy>
                            <img
                                src="<?php echo esc_url($logo_url); ?>"
                                alt="<?php echo esc_attr($alt); ?>"
                                <?php if ($width) : ?>width="<?php echo esc_attr($width); ?>"<?php endif; ?>
                                <?php if ($height) : ?>height="<?php echo esc_attr($height); ?>"<?php endif; ?>
                                class="logo"
                                data-astro-cid-7krvz6jy
                            >
                        </span>
                    </li>

                <?php endforeach; ?>

                <?php foreach ($sponsors as $sponsor) : ?>

                    <?php
                    $logo = !empty($sponsor['logo']) ? $sponsor['logo'] : '';
                    $alt = !empty($sponsor['alt']) ? $sponsor['alt'] : '';
                    $width = !empty($sponsor['width']) ? $sponsor['width'] : '';
                    $height = !empty($sponsor['height']) ? $sponsor['height'] : '';

                    if (is_array($logo)) {
                        $logo_url = $logo['url'];
                        $alt = !empty($logo['alt']) ? $logo['alt'] : $alt;
                        $width = !empty($logo['width']) ? $logo['width'] : $width;
                        $height = !empty($logo['height']) ? $logo['height'] : $height;
                    } else {
                        $logo_url = $logo;
                    }
                    ?>

                    <li aria-hidden="true" data-astro-cid-7krvz6jy>
                        <span class="logo-frame" data-astro-cid-7krvz6jy>
                            <img
                                src="<?php echo esc_url($logo_url); ?>"
                                alt="<?php echo esc_attr($alt); ?>"
                                <?php if ($width) : ?>width="<?php echo esc_attr($width); ?>"<?php endif; ?>
                                <?php if ($height) : ?>height="<?php echo esc_attr($height); ?>"<?php endif; ?>
                                class="logo"
                                data-astro-cid-7krvz6jy
                            >
                        </span>
                    </li>

                <?php endforeach; ?>

            </ul>
        </div>

        <div class="ctas d-flex justify-content-center align-items-center flex-wrap" data-astro-cid-7krvz6jy>

            <a
                href="<?php echo esc_url($meet_team_url); ?>"
                data-astro-cid-b7tmfpbf="true"
                class="pill ghost"
            >
                <span class="pill-label" data-astro-cid-b7tmfpbf>
                    <?php echo esc_html($meet_team_text); ?>
                </span>

                <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
                    <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
                        <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                        <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                    </svg>
                </span>
            </a>

            <a
                href="<?php echo esc_url($initiatives_url); ?>"
                data-astro-cid-b7tmfpbf="true"
                class="pill filled"
            >
                <span class="pill-label" data-astro-cid-b7tmfpbf>
                    <?php echo esc_html($initiatives_text); ?>
                </span>

                <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
                    <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
                        <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                        <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                    </svg>
                </span>
            </a>

        </div>

        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="divider-spark" aria-hidden="true" data-astro-cid-7krvz6jy="true">
            <path id="Vector" d="M36.87 23.02L49.54 24.77L36.87 26.52C31.49 27.26 27.26 31.4901 26.52 36.8701L24.77 49.54L23.02 36.8701C22.28 31.4901 18.05 27.26 12.67 26.52L0 24.77L12.67 23.02C18.05 22.28 22.28 18.0499 23.02 12.6699L24.77 0L26.52 12.6699C27.26 18.0499 31.49 22.28 36.87 23.02Z" fill="#F37D2C" />
        </svg>

    </div>
</section>

<!-- Scale Section -->
<section class="scale" data-astro-cid-3i43cze6>
    <div class="container reveal text-center" data-astro-cid-3i43cze6>

        <p class="eyebrow" data-astro-cid-3i43cze6>
            <?php echo esc_html($scale_eyebrow); ?>
        </p>

        <h2 data-astro-cid-3i43cze6>

            <span class="reveal-line" data-astro-cid-3i43cze6>
                <span class="reveal-line-box" data-astro-cid-3i43cze6>

                    <span class="reveal-line-text" data-astro-cid-3i43cze6>
                        <?php echo esc_html($scale_title_line_1); ?>
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-3i43cze6="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>

                </span>
            </span>

            <span class="reveal-line" data-astro-cid-3i43cze6>
                <span class="reveal-line-box" data-astro-cid-3i43cze6>

                    <span class="reveal-line-text" data-astro-cid-3i43cze6>
                        <?php echo esc_html($scale_title_line_2); ?>
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-3i43cze6="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>

                </span>
            </span>

        </h2>

        <p class="intro reveal-rise reveal-rise--after-2-lines" data-astro-cid-3i43cze6>
            <?php echo wp_kses_post($scale_intro); ?>
        </p>

        <div class="stats-wrap position-relative" data-astro-cid-3i43cze6>

<svg viewBox="0 0 1920 335" preserveAspectRatio="none" fill="none" class="grid-lines" aria-hidden="true" data-astro-cid-3i43cze6="true">
            <g id="Desktop" clip-path="url(#clip0_0_1)">
              <g id="about test 1" clip-path="url(#clip1_0_1)">
                <g id="Group">
                  <g id="Layer_1">
                    <g id="Group_2">
                      <g id="Group_3">
                        <g id="Group_4">
                          <g id="Group_5">
                            <path id="Vector" d="M1723.08 244.65C1722.43 166.28 1722.42 78.37 1723.08 0C1723.74 78.37 1723.73 166.28 1723.08 244.65Z" fill="#F37D2C"></path>
                            <path id="Vector_2" d="M1341.99 294.65C1341.38 200.27 1341.37 94.39 1341.99 0C1342.61 94.38 1342.6 200.26 1341.99 294.65Z" fill="#F37D2C"></path>
                            <path id="Vector_3" d="M960.91 334.65C960.3 233.86 960.29 120.79 960.91 20C961.53 120.79 961.52 233.86 960.91 334.65Z" fill="#F37D2C"></path>
                            <path id="Vector_4" d="M579.82 334.65C579.21 237.06 579.2 127.59 579.82 30C580.44 127.59 580.43 237.06 579.82 334.65Z" fill="#F37D2C"></path>
                            <path id="Vector_5" d="M198.74 334.65C198.09 264.29 198.08 185.36 198.74 115C199.4 185.36 199.39 264.29 198.74 334.65Z" fill="#F37D2C"></path>
                            <path id="Vector_6" d="M1074.75 285.49C729.29 286.07 317.6 286.07 -27.8501 285.49C317.61 284.91 729.3 284.92 1074.75 285.49Z" fill="#F37D2C"></path>
                            <path id="Vector_7" d="M1947.85 51.0297C1565.48 51.6097 1109.82 51.6097 727.47 51.0297C1109.84 50.4497 1565.5 50.4497 1947.85 51.0297Z" fill="#F37D2C"></path>
                          </g>
                          <g id="Group_6">
                            <path id="Vector_8" d="M1339.87 285.8L1337.65 285.49L1339.87 285.18C1340.81 285.05 1341.55 284.31 1341.68 283.37L1341.99 281.15L1342.3 283.37C1342.43 284.31 1343.17 285.05 1344.11 285.18L1346.33 285.49L1344.11 285.8C1343.17 285.93 1342.43 286.67 1342.3 287.61L1341.99 289.83L1341.68 287.61C1341.55 286.67 1340.81 285.93 1339.87 285.8Z" fill="#F37D2C"></path>
                            <path id="Vector_9" d="M1710.97 52.7798L1698.3 51.0298L1710.97 49.2798C1716.35 48.5398 1720.58 44.3099 1721.32 38.9299L1723.07 26.26L1724.82 38.9299C1725.56 44.3099 1729.79 48.5398 1735.17 49.2798L1747.84 51.0298L1735.17 52.7798C1729.79 53.5198 1725.56 57.7499 1724.82 63.1299L1723.07 55.7998L1721.32 63.1299C1720.58 57.7499 1716.35 53.5198 1710.97 52.7798Z" fill="#F37D2C"></path>
                            <path id="Vector_10" d="M1329.89 52.7798L1317.22 51.0298L1329.89 49.2798C1335.27 48.5398 1339.5 44.3099 1340.24 38.9299L1341.99 26.26L1343.74 38.9299C1344.48 44.3099 1348.71 48.5398 1354.09 49.2798L1366.76 51.0298L1354.09 52.7798C1348.71 53.5198 1344.48 57.7499 1343.74 63.1299L1341.99 55.7998L1340.24 63.1299C1339.5 57.7499 1335.27 53.5198 1329.89 52.7798Z" fill="#F37D2C"></path>
                            <path id="Vector_11" d="M952.1 286.92L943.07 285.67L952.1 284.42C955.93 283.89 958.95 280.88 959.48 277.04L960.73 268.01L961.98 277.04C962.51 280.87 965.52 283.89 969.36 284.42L978.39 285.67L969.36 286.92C965.53 287.45 962.51 290.46 961.98 294.3L960.73 303.33L959.48 294.3C958.95 290.47 955.94 287.45 952.1 286.92Z" fill="#F37D2C"></path>
                            <path id="Vector_12" d="M952.05 52.3098L942.78 51.0298L952.05 49.75C955.99 49.21 959.08 46.1099 959.63 42.1699L960.91 32.8999L962.19 42.1699C962.73 46.1099 965.83 49.2 969.77 49.75L979.04 51.0298L969.77 52.3098C965.83 52.8498 962.74 55.9499 962.19 59.8899L960.91 49.1599L959.63 59.8899C959.09 55.9499 955.99 52.8598 952.05 52.3098Z" fill="#F37D2C"></path>
                            <path id="Vector_13" d="M567.72 287.24L555.05 285.49L567.72 283.74C573.1 283 577.33 278.77 578.07 273.39L579.82 260.72L581.57 273.39C582.31 278.77 586.54 283 591.92 283.74L604.59 285.49L591.92 287.24C586.54 287.98 582.31 292.21 581.57 297.59L579.82 310.26L578.07 297.59C577.33 292.21 573.1 287.98 567.72 287.24Z" fill="#F37D2C"></path>
                            <path id="Vector_14" d="M575.83 51.6099L571.65 51.0298L575.83 50.45C577.61 50.2 579 48.8098 579.25 47.0298L579.83 42.8499L580.41 47.0298C580.66 48.8098 582.05 50.2 583.83 50.45L588.01 51.0298L583.83 51.6099C582.05 51.8599 580.66 53.2498 580.41 55.0298L579.83 59.21L579.25 55.0298C579 53.2498 577.61 51.8599 575.83 51.6099Z" fill="#F37D2C"></path>
                            <path id="Vector_15" d="M186.63 287.24L173.96 285.49L186.63 283.74C192.01 283 196.24 278.77 196.98 273.39L198.73 260.72L200.48 273.39C201.22 278.77 205.45 283 210.83 283.74L223.5 285.49L210.83 287.24C205.45 287.98 201.22 292.21 200.48 297.59L198.73 310.26L196.98 297.59C196.24 292.21 192.01 287.98 186.63 287.24Z" fill="#F37D2C"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
            <defs>
              <clipPath id="clip0_0_1">
                <rect width="1920" height="4673" fill="white" transform="translate(0 -3698.85)"></rect>
              </clipPath>
              <clipPath id="clip1_0_1">
                <rect width="1920" height="4679.47" fill="white" transform="translate(0 -3698.85)"></rect>
              </clipPath>
            </defs>
          </svg>

            <ul class="stats list-unstyled" data-astro-cid-3i43cze6>

                <?php foreach ($statistics as $index => $stat) : ?>

                    <?php
                    $stat_value = !empty($stat['stat_value'])
                        ? $stat['stat_value']
                        : (!empty($stat['value']) ? $stat['value'] : '');

                    $stat_description = !empty($stat['stat_description'])
                        ? $stat['stat_description']
                        : (!empty($stat['description']) ? $stat['description'] : '');
                    ?>

                    <li data-astro-cid-3i43cze6>

                        <?php if ($index > 0) : ?>

                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="stat-spark stat-spark-top"
                                aria-hidden="true" data-astro-cid-3i43cze6="true">
                                <path id="Vector"
                                    d="M36.87 23.02L49.54 24.77L36.87 26.52C31.49 27.26 27.26 31.4901 26.52 36.8701L24.77 49.54L23.02 36.8701C22.28 31.4901 18.05 27.26 12.67 26.52L0 24.77L12.67 23.02C18.05 22.28 22.28 18.0499 23.02 12.6699L24.77 0L26.52 12.6699C27.26 18.0499 31.49 22.28 36.87 23.02Z"
                                    fill="#F37D2C" />
                            </svg>

                        <?php endif; ?>

                        <p class="stat-value" data-astro-cid-3i43cze6>
                            <?php echo wp_kses_post($stat_value); ?>
                        </p>

                        <p class="stat-desc" data-astro-cid-3i43cze6>
                            <?php echo wp_kses_post($stat_description); ?>
                        </p>

                    </li>

                <?php endforeach; ?>

                <span class="stats-rail" aria-hidden="true" data-astro-cid-3i43cze6></span>

            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>