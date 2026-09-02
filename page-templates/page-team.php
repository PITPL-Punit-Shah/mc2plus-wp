<?php
/**
 * Template Name: Team Page
 */

get_header();

$default_hero_eyebrow = 'TEAM & GOVERNANCE';
$default_hero_line_1 = 'Leadership';
$default_hero_line_2_before = 'built for';
$default_hero_line_2_accent = 'speed';
$default_hero_line_3_before = 'and';
$default_hero_line_3_accent = 'accountability';
$default_hero_description = 'A board that carries national gravitas, an advisory bench deep in energy and deep-tech, and an operating team that moves like a startup.';

$default_board_eyebrow = 'GOVERNANCE';
$default_board_title = 'Board of Directors';
$default_board_description = 'MC&sup2;+ is governed by leaders drawn from the <span class="nowrap">Ministry of Petroleum and Natural Gas</span> and India&rsquo;s energy majors.';

$default_advisory_eyebrow = 'GUIDANCE';
$default_advisory_title = 'Advisory Board';
$default_advisory_description = 'Independent experts across energy, deep-tech research and public policy who guide theme strategy and selection.';

$default_cta_title = 'Want to build with this team?';
$default_cta_description = 'We&rsquo;re onboarding mentors as Cohort 1 spins up.';
$default_cta_contact_text = 'Get in touch';
$default_cta_contact_url = home_url('/contact/');
$default_cta_initiatives_text = 'Explore initiatives';
$default_cta_initiatives_url = home_url('/initiatives/');

/*
 * Hero fields.
 */
$hero_eyebrow = get_field('hero_eyebrow') ?: $default_hero_eyebrow;
$hero_line_1 = get_field('hero_line_1') ?: $default_hero_line_1;
$hero_line_2_before = get_field('hero_line_2_before') ?: $default_hero_line_2_before;
$hero_line_2_accent = get_field('hero_line_2_accent') ?: $default_hero_line_2_accent;
$hero_line_3_before = get_field('hero_line_3_before') ?: $default_hero_line_3_before;
$hero_line_3_accent = get_field('hero_line_3_accent') ?: $default_hero_line_3_accent;
$hero_description = get_field('hero_description') ?: $default_hero_description;

/*
 * Board fields.
 */
$board_eyebrow = get_field('board_eyebrow') ?: $default_board_eyebrow;
$board_title = get_field('board_title') ?: $default_board_title;
$board_description = get_field('board_description') ?: $default_board_description;

/*
 * Advisory fields.
 */
$advisory_eyebrow = get_field('advisory_eyebrow') ?: $default_advisory_eyebrow;
$advisory_title = get_field('advisory_title') ?: $default_advisory_title;
$advisory_description = get_field('advisory_description') ?: $default_advisory_description;

/*
 * CTA fields.
 */
$cta_title = get_field('cta_title') ?: $default_cta_title;
$cta_description = get_field('cta_description') ?: $default_cta_description;
$cta_contact_text = get_field('cta_contact_text') ?: $default_cta_contact_text;
$cta_contact_url = get_field('cta_contact_url') ?: $default_cta_contact_url;
$cta_initiatives_text = get_field('cta_initiatives_text') ?: $default_cta_initiatives_text;
$cta_initiatives_url = get_field('cta_initiatives_url') ?: $default_cta_initiatives_url;

/*
 * Default Board Members.
 * These preserve the existing content until ACF repeater data is entered.
 */
$default_directors = array(
    array(
        'name' => 'Dr. Neeraj Mittal',
        'role' => 'CHAIRMAN & DIRECTOR',
        'description' => 'Secretary, Ministry of Petroleum and <span class="nowrap">Natural Gas</span>',
        'photo' => get_template_directory_uri() . '/assets/dir-neeraj.YIWErEIc_16wejb.webp',
        'srcset' => get_template_directory_uri() . '/assets/dir-neeraj.YIWErEIc_Z1BDGHr.webp 240w, ' . get_template_directory_uri() . '/assets/dir-neeraj.YIWErEIc_42lL5.webp 480w',
        'alt' => 'Dr. Neeraj Mittal',
    ),
    array(
        'name' => 'Shri Vikas Kaushal',
        'role' => 'DIRECTOR',
        'description' => 'Chairman &amp; Managing Director, HPCL',
        'photo' => get_template_directory_uri() . '/assets/dir-vikas.AQLLukzx_Z1StheC.webp',
        'srcset' => get_template_directory_uri() . '/assets/dir-vikas.AQLLukzx_Z1KzvIu.webp 240w, ' . get_template_directory_uri() . '/assets/dir-vikas.AQLLukzx_hMcNX.webp 480w',
        'alt' => 'Shri Vikas Kaushal',
    ),
    array(
        'name' => 'Shri Sanjay Khanna',
        'role' => 'DIRECTOR',
        'description' => 'Chairman &amp; Managing Director, BPCL',
        'photo' => get_template_directory_uri() . '/assets/dir-sanjay.CEITuRV0_h33ia.webp',
        'srcset' => get_template_directory_uri() . '/assets/dir-sanjay.CEITuRV0_ZkdSyw.webp 240w, ' . get_template_directory_uri() . '/assets/dir-sanjay.CEITuRV0_1ls9U0.webp 480w',
        'alt' => 'Shri Sanjay Khanna',
    ),
    array(
        'name' => 'Shri Akshay Kumar Singh',
        'role' => 'DIRECTOR',
        'description' => 'Managing Director and Chief Executive Officer, Petronet LNG Ltd.',
        'photo' => get_template_directory_uri() . '/assets/dir-akshay.DSjNdEZ8_Z1FQrx0.webp',
        'srcset' => get_template_directory_uri() . '/assets/dir-akshay.DSjNdEZ8_Z229KAx.webp 240w, ' . get_template_directory_uri() . '/assets/dir-akshay.DSjNdEZ8_ZlsH71.webp 480w',
        'alt' => 'Shri Akshay Kumar Singh',
    ),
    array(
        'name' => 'Shri Sandeep Maheshwari',
        'role' => 'DIRECTOR & CHIEF EXECUTIVE OFFICER',
        'description' => 'Executive Director, Corporate Strategy &amp; Business Development, HPCL',
        'photo' => get_template_directory_uri() . '/assets/dir-sandeep.fGOCubwD_ZQItmv.webp',
        'srcset' => get_template_directory_uri() . '/assets/dir-sandeep.fGOCubwD_29q324.webp 240w, ' . get_template_directory_uri() . '/assets/dir-sandeep.fGOCubwD_2tkw9u.webp 480w',
        'alt' => 'Shri Sandeep Maheshwari',
    ),
);

$directors = get_field('directors');

if (empty($directors)) {
    $directors = $default_directors;
}

/*
 * Default Advisory Members.
 * These preserve the existing content until ACF repeater data is entered.
 */
$default_advisors = array(
    array(
        'name' => 'Dr. Abhay Karandikar',
        'description' => 'Member, NITI Aayog. Former Secretary, Department of Science &amp; Technology, Government of India',
        'photo' => get_template_directory_uri() . '/assets/adv-abhay.CratbNTT_ZCIXoH.webp',
        'srcset' => get_template_directory_uri() . '/assets/adv-abhay.CratbNTT_Z1L5lG8.webp 252w, ' . get_template_directory_uri() . '/assets/images/adv-abhay.CratbNTT_Z18418i.webp 504w',
        'alt' => 'Dr. Abhay Karandikar',
        'pdf' => get_template_directory_uri() . '/advisors/abhay-karandikar.pdf',
    ),
    array(
        'name' => 'Dr. Madhukar Garg',
        'description' => 'Former President, R&amp;D, Refining and Petrochemicals, Reliance Industries Ltd.',
        'photo' => get_template_directory_uri() . '/assets/adv-madhukar.DiATjXsZ_DaGqU.webp',
        'srcset' => get_template_directory_uri() . '/assets/adv-madhukar.DiATjXsZ_10jrLd.webp 252w, ' . get_template_directory_uri() . '/assets/images/adv-madhukar.DiATjXsZ_Z20jiag.webp 504w',
        'alt' => 'Dr. Madhukar Garg',
        'pdf' => get_template_directory_uri() . '/advisors/madhukar-garg.pdf',
    ),
    array(
        'name' => 'Shri Neelkanth Mishra',
        'description' => 'Chief Economist, Axis Bank; Head of Global Research and Board member, Axis Capital',
        'photo' => get_template_directory_uri() . '/assets/adv-neelkanth.cwssDYh0_KgTAP.webp',
        'srcset' => get_template_directory_uri() . '/assets/adv-neelkanth.cwssDYh0_Z1UjkGu.webp 252w, ' . get_template_directory_uri() . '/assets/images/adv-neelkanth.cwssDYh0_Z1IAeHK.webp 504w',
        'alt' => 'Shri Neelkanth Mishra',
        'pdf' => get_template_directory_uri() . '/advisors/neelkanth-mishra.pdf',
    ),
    array(
        'name' => 'Dr. Pawan Goenka',
        'description' => 'Chairperson, IN-SPACe, Department of Space, Government of India',
        'photo' => get_template_directory_uri() . '/assets/adv-pawan.CWm5aGaH_ZBCS7X.webp',
        'srcset' => get_template_directory_uri() . '/assets/adv-pawan.CWm5aGaH_Q34Ff.webp 252w, ' . get_template_directory_uri() . '/assets/images/adv-pawan.CWm5aGaH_1u4pe5.webp 504w',
        'alt' => 'Dr. Pawan Goenka',
        'pdf' => get_template_directory_uri() . '/advisors/pawan-goenka.pdf',
    ),
);

$advisors = get_field('advisors');

if (empty($advisors)) {
    $advisors = $default_advisors;
}
?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" data-astro-cid-rw2a77x6>
    <div class="orbit position-absolute top-0 start-0 w-100" aria-hidden="true" data-astro-cid-rw2a77x6>
        <svg width="1920" height="1012" viewBox="0 0 1920 1012" fill="none" class="curves" data-astro-cid-rw2a77x6="true">
            <path id="Vector" d="M48.5701 -138.81C-55.9899 380.97 280.61 887.1 800.39 991.66C1320.17 1096.22 1826.3 759.62 1930.86 239.84" stroke="#F37D2C" stroke-miterlimit="10" />
            <path id="Vector_2" d="M33.5899 38.68C80.1099 38.68 123.85 56.8 156.75 89.69C189.65 122.59 207.76 166.33 207.76 212.85C207.76 259.37 189.64 303.11 156.75 336.01C123.85 368.91 80.1199 387.02 33.5899 387.02C-12.9401 387.02 -56.6701 368.9 -89.5701 336.01C-122.47 303.11 -140.58 259.38 -140.58 212.85C-140.58 166.32 -122.46 122.59 -89.5701 89.69C-56.6701 56.8 -12.9301 38.68 33.5899 38.68ZM33.5899 37.68C-63.1501 37.68 -141.58 116.11 -141.58 212.85C-141.58 309.59 -63.1501 388.02 33.5899 388.02C130.33 388.02 208.76 309.59 208.76 212.85C208.76 116.11 130.33 37.68 33.5899 37.68Z" fill="#F37D2C" />
            <path id="Vector_3" d="M1580.84 109.3C1475.75 475.8 1698.56 870.97 2066.47 970.79C1978.21 946.39 1894.77 904.55 1822.73 847.98C1602.91 679.46 1502.71 375.25 1580.84 109.31V109.3Z" fill="#F37D2C" />
            <path id="Vector_4" d="M80.9501 359.88L85.6801 368.38C87.8101 372.2 92.1701 374.21 96.4601 373.33L109.93 370.57L98.0101 377.73C94.4501 379.87 92.5901 383.98 93.3401 388.06L95.4301 399.46L88.8701 388.5C86.8901 385.19 83.1801 383.31 79.3401 383.66L67.0601 384.79L76.6201 379.97C80.3301 378.1 82.4801 374.13 82.0401 370.01L80.9401 359.87L80.9501 359.88Z" fill="#F37D2C" />
        </svg>

        <svg width="78" height="85" viewBox="0 0 78 85" fill="none" class="right-spark" data-astro-cid-rw2a77x6="true">
            <path id="Vector" d="M12.9401 0L27.12 16.29C35.49 25.9 50.07 26.89 59.65 18.5L77.34 3.01001L55.63 33.34C51.91 38.54 51.4601 45.4 54.4601 51.04L68.59 77.54L55.2101 65.57C46.9101 58.15 34.5001 57.72 25.7101 64.56L0 84.57L25.25 51.22C28.86 46.45 29.67 40.12 27.36 34.6L12.9301 0.0200195L12.9401 0Z" fill="#F37D2C" />
        </svg>
    </div>

    <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-rw2a77x6>
        <p class="eyebrow" data-astro-cid-rw2a77x6><?php echo esc_html($hero_eyebrow); ?></p>
        <div class="underline mx-auto" aria-hidden="true" data-astro-cid-rw2a77x6></div>

        <h1 data-astro-cid-rw2a77x6>
            <span class="line reveal-line" data-astro-cid-rw2a77x6>
                <span class="reveal-line-box" data-astro-cid-rw2a77x6>
                    <span class="reveal-line-text" data-astro-cid-rw2a77x6><?php echo esc_html($hero_line_1); ?></span>
                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-rw2a77x6="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>
                </span>
            </span>

            <span class="line reveal-line" data-astro-cid-rw2a77x6>
                <span class="reveal-line-box" data-astro-cid-rw2a77x6>
                    <span class="reveal-line-text" data-astro-cid-rw2a77x6>
                        <?php echo esc_html($hero_line_2_before); ?>
                        <span class="accent" data-astro-cid-rw2a77x6><?php echo esc_html($hero_line_2_accent); ?></span>
                    </span>
                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-rw2a77x6="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>
                </span>
            </span>

            <span class="line reveal-line" data-astro-cid-rw2a77x6>
                <span class="reveal-line-box" data-astro-cid-rw2a77x6>
                    <span class="reveal-line-text" data-astro-cid-rw2a77x6>
                        <?php echo esc_html($hero_line_3_before); ?>
                        <span class="accent" data-astro-cid-rw2a77x6><?php echo esc_html($hero_line_3_accent); ?></span>.
                    </span>
                    <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-rw2a77x6="true">
                        <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                    </svg>
                </span>
            </span>
        </h1>

        <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-rw2a77x6>
            <?php echo wp_kses_post($hero_description); ?>
        </p>

        <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section" data-astro-cid-rw2a77x6>
            <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-rw2a77x6="true">
                <path id="Vector" d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z" fill="#1E1E3C" />
            </svg>
        </button>
    </div>
</section>

<!-- Board Section -->
<section class="board" data-astro-cid-iziqqrtu>
    <div class="container" data-astro-cid-iziqqrtu>
        <p class="eyebrow" data-astro-cid-iziqqrtu><?php echo esc_html($board_eyebrow); ?></p>

        <div class="reveal" data-astro-cid-iziqqrtu>
            <h2 data-astro-cid-iziqqrtu>
                <span class="reveal-line" data-astro-cid-iziqqrtu>
                    <span class="reveal-line-box" data-astro-cid-iziqqrtu>
                        <span class="reveal-line-text" data-astro-cid-iziqqrtu><?php echo esc_html($board_title); ?></span>
                        <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-iziqqrtu="true">
                            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                        </svg>
                    </span>
                </span>
            </h2>

            <p class="subheading reveal-rise reveal-rise--after-1-line" data-astro-cid-iziqqrtu>
                <?php echo wp_kses_post($board_description); ?>
            </p>
        </div>

        <div class="grid" data-astro-cid-iziqqrtu>

            <?php foreach ($directors as $director) : ?>
                <?php
                $name = !empty($director['director_name']) ? $director['director_name'] : (!empty($director['name']) ? $director['name'] : '');
                $role = !empty($director['director_role']) ? $director['director_role'] : (!empty($director['role']) ? $director['role'] : '');
                $description = !empty($director['director_description']) ? $director['director_description'] : (!empty($director['description']) ? $director['description'] : '');
                $photo = !empty($director['director_photo']) ? $director['director_photo'] : (!empty($director['photo']) ? $director['photo'] : '');
                $srcset = !empty($director['srcset']) ? $director['srcset'] : '';
                $alt = !empty($director['alt']) ? $director['alt'] : $name;

                if (is_array($photo)) {
                    $photo_url = $photo['url'];
                    $photo_alt = !empty($photo['alt']) ? $photo['alt'] : $alt;
                    $srcset = !empty($photo['srcset']) ? $photo['srcset'] : '';
                } else {
                    $photo_url = $photo;
                    $photo_alt = $alt;
                }
                ?>

                <article class="card" data-astro-cid-iziqqrtu>
                    <div class="photo-wrap" data-astro-cid-iziqqrtu>
                        <span class="v-line" aria-hidden="true" data-astro-cid-iziqqrtu></span>
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" class="card-spark" aria-hidden="true" data-astro-cid-iziqqrtu="true">
                            <path d="M34.18 21.34L45.92 22.96L34.18 24.58C29.19 25.27 25.27 29.1899 24.58 34.1799L22.96 45.9199L21.34 34.1799C20.65 29.1899 16.73 25.27 11.74 24.58L0 22.96L11.74 21.34C16.73 20.65 20.65 16.73 21.34 11.74L22.96 0L24.58 11.74C25.27 16.73 29.19 20.65 34.18 21.34Z" fill="#FF7400" />
                        </svg>

                        <?php if ($photo_url) : ?>
                            <img
                                src="<?php echo esc_url($photo_url); ?>"
                                <?php if ($srcset) : ?>srcset="<?php echo esc_attr($srcset); ?>"<?php endif; ?>
                                alt="<?php echo esc_attr($photo_alt); ?>"
                                sizes="240px"
                                data-astro-cid-iziqqrtu="true"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                class="photo"
                            >
                        <?php endif; ?>
                    </div>

                    <div class="meta" data-astro-cid-iziqqrtu>
                        <h3 data-astro-cid-iziqqrtu><?php echo esc_html($name); ?></h3>
                        <p class="role" data-astro-cid-iziqqrtu><?php echo esc_html($role); ?></p>
                        <p class="desc" data-astro-cid-iziqqrtu><?php echo wp_kses_post($description); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Advisory Section -->
<section class="advisory" data-astro-cid-wfcpxlmj>
    <div class="container" data-astro-cid-wfcpxlmj>
        <p class="eyebrow" data-astro-cid-wfcpxlmj><?php echo esc_html($advisory_eyebrow); ?></p>

        <div class="reveal" data-astro-cid-wfcpxlmj>
            <h2 data-astro-cid-wfcpxlmj>
                <span class="reveal-line" data-astro-cid-wfcpxlmj>
                    <span class="reveal-line-box" data-astro-cid-wfcpxlmj>
                        <span class="reveal-line-text" data-astro-cid-wfcpxlmj><?php echo esc_html($advisory_title); ?></span>
                        <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-wfcpxlmj="true">
                            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
                        </svg>
                    </span>
                </span>
            </h2>

            <p class="subheading reveal-rise reveal-rise--after-1-line" data-astro-cid-wfcpxlmj>
                <?php echo wp_kses_post($advisory_description); ?>
            </p>
        </div>

        <div class="grid" data-astro-cid-wfcpxlmj>

            <?php foreach ($advisors as $advisor) : ?>
                <?php
                $name = !empty($advisor['advisor_name']) ? $advisor['advisor_name'] : (!empty($advisor['name']) ? $advisor['name'] : '');
                $description = !empty($advisor['advisor_description']) ? $advisor['advisor_description'] : (!empty($advisor['description']) ? $advisor['description'] : '');
                $photo = !empty($advisor['advisor_photo']) ? $advisor['advisor_photo'] : (!empty($advisor['photo']) ? $advisor['photo'] : '');
                $pdf = !empty($advisor['advisor_pdf']) ? $advisor['advisor_pdf'] : (!empty($advisor['pdf']) ? $advisor['pdf'] : '');
                $srcset = !empty($advisor['srcset']) ? $advisor['srcset'] : '';
                $alt = !empty($advisor['alt']) ? $advisor['alt'] : $name;

                if (is_array($photo)) {
                    $photo_url = $photo['url'];
                    $photo_alt = !empty($photo['alt']) ? $photo['alt'] : $alt;
                    $srcset = !empty($photo['srcset']) ? $photo['srcset'] : '';
                } else {
                    $photo_url = $photo;
                    $photo_alt = $alt;
                }

                if (is_array($pdf)) {
                    $pdf_url = $pdf['url'];
                } else {
                    $pdf_url = $pdf;
                }
                ?>

                <article class="card" data-astro-cid-wfcpxlmj>
                    <a
                        class="pdf-link"
                        href="<?php echo esc_url($pdf_url); ?>"
                        target="_blank"
                        rel="noopener"
                        aria-label="<?php echo esc_attr(sprintf('View %s profile (PDF)', $name)); ?>"
                        data-astro-cid-wfcpxlmj
                    >
                        <?php if ($photo_url) : ?>
                            <img
                                src="<?php echo esc_url($photo_url); ?>"
                                <?php if ($srcset) : ?>srcset="<?php echo esc_attr($srcset); ?>"<?php endif; ?>
                                alt="<?php echo esc_attr($photo_alt); ?>"
                                sizes="(max-width: 559.98px) 45vw, (max-width: 1023.98px) 30vw, 252px"
                                data-astro-cid-wfcpxlmj="true"
                                loading="lazy"
                                decoding="async"
                                width="1080"
                                height="1080"
                                class="photo"
                            >
                        <?php endif; ?>
                    </a>

                    <h3 data-astro-cid-wfcpxlmj>
                        <a
                            class="pdf-link"
                            href="<?php echo esc_url($pdf_url); ?>"
                            target="_blank"
                            rel="noopener"
                            data-astro-cid-wfcpxlmj
                        >
                            <?php echo esc_html($name); ?>
                        </a>
                    </h3>

                    <p class="desc" data-astro-cid-wfcpxlmj>
                        <?php echo wp_kses_post($description); ?>
                    </p>
                </article>
            <?php endforeach; ?>

        </div>

        <div class="spark-wrap" data-astro-cid-wfcpxlmj>
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" class="spark" aria-hidden="true" data-astro-cid-wfcpxlmj="true">
                <path d="M34.18 21.34L45.92 22.96L34.18 24.58C29.19 25.27 25.27 29.1899 24.58 34.1799L22.96 45.9199L21.34 34.1799C20.65 29.1899 16.73 25.27 11.74 24.58L0 22.96L11.74 21.34C16.73 20.65 20.65 16.73 21.34 11.74L22.96 0L24.58 11.74C25.27 16.73 29.19 20.65 34.18 21.34Z" fill="#FF7400" />
            </svg>
        </div>
    </div>
</section>

<!-- Team CTA Section -->
<section class="team-cta" data-astro-cid-qa7iabfn>
    <div class="container text-center" data-astro-cid-qa7iabfn>
        <h2 data-astro-cid-qa7iabfn><?php echo esc_html($cta_title); ?></h2>

        <p class="lede" data-astro-cid-qa7iabfn>
            <?php echo wp_kses_post($cta_description); ?>
        </p>

        <div class="ctas d-flex justify-content-center align-items-center flex-wrap" data-astro-cid-qa7iabfn>

            <a
                href="<?php echo esc_url($cta_contact_url); ?>"
                class="pill filled"
                data-astro-cid-b7tmfpbf="true"
            >
                <span class="pill-label" data-astro-cid-b7tmfpbf>
                    <?php echo esc_html($cta_contact_text); ?>
                </span>

                <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
                    <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
                        <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                        <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                    </svg>
                </span>
            </a>

            <a
                href="<?php echo esc_url($cta_initiatives_url); ?>"
                class="pill filled"
                data-astro-cid-b7tmfpbf="true"
            >
                <span class="pill-label" data-astro-cid-b7tmfpbf>
                    <?php echo esc_html($cta_initiatives_text); ?>
                </span>

                <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
                    <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
                        <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                        <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                    </svg>
                </span>
            </a>

        </div>
    </div>
</section>

<?php get_footer(); ?>