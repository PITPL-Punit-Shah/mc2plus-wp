<?php
/**
 * Template Name: Contact Us Page
 */

get_header();

/*
 * Hero Section
 */
$hero_eyebrow = get_field('hero_eyebrow') ?: 'CONTACT';
$hero_line_1 = get_field('hero_line_1') ?: 'A unique hub-and-spoke';
$hero_line_2_before = get_field('hero_line_2_before') ?: 'model to';
$hero_line_2_accent = get_field('hero_line_2_accent') ?: 'support you';
$hero_line_3_accent = get_field('hero_line_3_accent') ?: 'where you are';
$hero_description = get_field('hero_description') ?: 'Founder, researcher, institution or investor, tell us who you are';
$hero_description_line_2 = get_field('hero_description_line_2') ?: 'and we&rsquo;ll route you to the right initiative of MC&sup2;+';

/*
 * Contact Details
 */
$email_label = get_field('email_label') ?: 'EMAIL';
$email = get_field('email') ?: 'info@mc2plus.in';

$phone_label = get_field('phone_label') ?: 'PHONE';
$phone = get_field('phone') ?: '+91 76971 86690';

$office_label = get_field('office_label') ?: 'REGISTERED OFFICE';
$office_name = get_field('office_name') ?: 'MC2 FOUNDATION';
$office_address_line_1 = get_field('office_address_line_1') ?: 'Tower I, 5th Floor, World Trade Centre,';
$office_address_line_2 = get_field('office_address_line_2') ?: 'Nauroji Nagar, New Delhi &ndash; 110 029';

/*
 * Phone and email links.
 */
$email_href = 'mailto:' . sanitize_email($email);
$phone_href = 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" data-astro-cid-iluq64ft>
    <div class="orbit position-absolute top-0 start-0 w-100" aria-hidden="true" data-astro-cid-iluq64ft>
        <svg width="1920" height="1012" viewBox="0 0 1920 1012" fill="none" class="curves" data-astro-cid-iluq64ft="true">
            <g id="Desktop">
                <g id="contact test 1">
                    <g id="Group">
                        <g id="Layer_1">
                            <g id="Group_2">
                                <path id="Vector"
                                    d="M1876.32 -138.81C1980.88 380.97 1644.28 887.1 1124.5 991.66C604.71 1096.22 98.5903 759.61 -5.96973 239.83"
                                    stroke="#F37D2C" stroke-miterlimit="10" />
                                <path id="Vector_2"
                                    d="M1891.29 38.68C1937.81 38.68 1981.55 56.8 2014.45 89.69C2047.35 122.59 2065.46 166.33 2065.46 212.85C2065.46 259.37 2047.34 303.11 2014.45 336.01C1981.55 368.91 1937.81 387.02 1891.29 387.02C1844.77 387.02 1801.03 368.9 1768.13 336.01C1735.23 303.11 1717.12 259.38 1717.12 212.85C1717.12 166.32 1735.24 122.59 1768.13 89.69C1801.03 56.79 1844.77 38.68 1891.29 38.68ZM1891.29 37.68C1794.55 37.68 1716.12 116.11 1716.12 212.85C1716.12 309.59 1794.55 388.02 1891.29 388.02C1988.03 388.02 2066.46 309.59 2066.46 212.85C2066.46 116.11 1988.03 37.68 1891.29 37.68Z"
                                    fill="#F37D2C" />
                                <path id="Vector_4"
                                    d="M1843.93 359.88L1839.2 368.38C1837.07 372.2 1832.71 374.21 1828.42 373.33L1814.95 370.57L1826.87 377.73C1830.43 379.87 1832.29 383.98 1831.54 388.06L1829.45 399.46L1836.01 388.5C1837.99 385.19 1841.7 383.31 1845.54 383.66L1857.82 384.79L1848.26 379.97C1844.55 378.1 1842.4 374.13 1842.84 370.01L1843.94 359.87L1843.93 359.88Z"
                                    fill="#F37D2C" />
                                <path id="Vector_3"
                                    d="M344.04 109.3C422.17 375.25 321.97 679.45 102.15 847.97C30.1101 904.54 -53.3298 946.38 -141.59 970.78C226.38 870.95 449.12 475.74 344.04 109.3Z"
                                    fill="#F37D2C" />
                                <path id="Vector_5"
                                    d="M264.85 665.66L250.67 681.95C242.30 691.56 227.72 692.55 218.14 684.16L200.45 668.67L222.16 699.00C225.88 704.20 226.33 711.06 223.33 716.70L209.20 743.20L222.58 731.23C230.88 723.81 243.29 723.38 252.08 730.22L277.79 750.23L252.54 716.88C248.93 712.11 248.12 705.78 250.43 700.26L264.86 665.68L264.85 665.66Z"
                                    fill="#F37D2C" />
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </div>

    <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-iluq64ft>
        <p class="eyebrow" data-astro-cid-iluq64ft><?php echo esc_html($hero_eyebrow); ?></p>

        <div class="underline mx-auto" aria-hidden="true" data-astro-cid-iluq64ft></div>

        <h1 data-astro-cid-iluq64ft>
            <span class="line reveal-line" data-astro-cid-iluq64ft>
                <span class="reveal-line-box" data-astro-cid-iluq64ft>
                    <span class="reveal-line-text" data-astro-cid-iluq64ft><?php echo esc_html($hero_line_1); ?></span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                        data-astro-cid-iluq64ft="true">
                        <path
                            d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                            fill="#1E1E3C" />
                    </svg>
                </span>
            </span>

            <span class="line reveal-line" data-astro-cid-iluq64ft>
                <span class="reveal-line-box" data-astro-cid-iluq64ft>
                    <span class="reveal-line-text" data-astro-cid-iluq64ft>
                        <?php echo esc_html($hero_line_2_before); ?>
                        <span class="accent" data-astro-cid-iluq64ft><?php echo esc_html($hero_line_2_accent); ?></span>
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                        data-astro-cid-iluq64ft="true">
                        <path
                            d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                            fill="#1E1E3C" />
                    </svg>
                </span>
            </span>

            <span class="line reveal-line" data-astro-cid-iluq64ft>
                <span class="reveal-line-box" data-astro-cid-iluq64ft>
                    <span class="reveal-line-text" data-astro-cid-iluq64ft>
                        <span class="accent" data-astro-cid-iluq64ft><?php echo esc_html($hero_line_3_accent); ?></span>.
                    </span>

                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                        data-astro-cid-iluq64ft="true">
                        <path
                            d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                            fill="#1E1E3C" />
                    </svg>
                </span>
            </span>
        </h1>

        <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-iluq64ft>
            <?php echo esc_html($hero_description); ?><br data-astro-cid-iluq64ft>
            <?php echo wp_kses_post($hero_description_line_2); ?>
        </p>

        <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section"
            data-astro-cid-iluq64ft>
            <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-iluq64ft="true">
                <path id="Vector"
                    d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z"
                    fill="#1E1E3C" />
            </svg>
        </button>
    </div>
</section>

<!-- Contact Details Section -->
<section class="contact-section" data-astro-cid-jbceweda>
    <div class="container grid" data-astro-cid-jbceweda>
        <div class="info" data-astro-cid-jbceweda>

            <div class="info-block" data-astro-cid-jbceweda>
                <p class="info-label" data-astro-cid-jbceweda>
                    <?php echo esc_html($email_label); ?>
                </p>

                <a
                    class="info-value"
                    href="<?php echo esc_attr($email_href); ?>"
                    data-astro-cid-jbceweda
                >
                    <?php echo esc_html($email); ?>
                </a>
            </div>

            <div class="info-block" data-astro-cid-jbceweda>
                <p class="info-label" data-astro-cid-jbceweda>
                    <?php echo esc_html($phone_label); ?>
                </p>

                <a
                    class="info-value"
                    href="<?php echo esc_attr($phone_href); ?>"
                    data-astro-cid-jbceweda
                >
                    <?php echo esc_html($phone); ?>
                </a>
            </div>

            <div class="info-block" data-astro-cid-jbceweda>
                <p class="info-label" data-astro-cid-jbceweda>
                    <?php echo esc_html($office_label); ?>
                </p>

                <p class="info-office" data-astro-cid-jbceweda>
                    <?php echo esc_html($office_name); ?><br data-astro-cid-jbceweda>
                    <?php echo esc_html($office_address_line_1); ?><br data-astro-cid-jbceweda>
                    <?php echo wp_kses_post($office_address_line_2); ?>
                </p>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>