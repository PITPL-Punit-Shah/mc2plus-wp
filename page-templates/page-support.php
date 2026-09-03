<?php
/**
 * Template Name: Support Page
 */

get_header();

/*
 * ============================================================
 * HERO SECTION
 * ============================================================
 */

$hero_eyebrow = get_field('hero_eyebrow') ?: 'SUPPORT';
$hero_line_1 = get_field('hero_line_1') ?: 'Everything an';
$hero_line_2 = get_field('hero_line_2') ?: 'energy venture needs,';
$hero_line_3 = get_field('hero_line_3') ?: 'under one roof';
$hero_description = get_field('hero_description') ?: 'Capital is rarely the whole problem. MC<sup>2</sup>+ pairs funding with the expertise, infrastructure and market access that energy hardware actually needs to reach industrial scale.';

/*
 * ============================================================
 * SUPPORT STACK SECTION
 * ============================================================
 */

$default_support_cards = array(
    array(
        'card_number' => '01',
        'card_eyebrow' => 'WHAT WE FUND',
        'title' => 'Capital',
        'subtitle' => 'Grants, seed and scale-up',
        'intro' => 'Structured access to seed funding for early validation and scale-up capital for ventures demonstrating commercial traction in the energy and industrial sector.',
        'image' => get_template_directory_uri() . '/assets/capital-art.BxeTKOop_Zd3Ll9.webp',
        'image_srcset' => get_template_directory_uri() . '/assets/capital-art.BxeTKOop_Zd3Ll9.webp 469w',
        'image_width' => '469',
        'image_height' => '333',
        'image_sizes' => '469px',
        'image_alt' => '',
        'class' => 'capital',
        'list' => array(
            'Seed grants for proof-of-concept and prototype stages',
            'Scale-up equity for ventures with demonstrated traction',
            'Warm introductions to co-investors and strategic partners',
            'Non-dilutive grants for specific technology challenges'
        )
    ),
    array(
        'card_number' => '02',
        'card_eyebrow' => 'WHO YOU WORK WITH',
        'title' => 'Expertise',
        'subtitle' => 'Mentorship and research partnerships',
        'intro' => 'Deep mentorship and research partnerships with premier Indian and global institutions, bringing domain knowledge that shortens the path from lab to commercial deployment.',
        'image' => get_template_directory_uri() . '/assets/expertise-art.C5dmt5Bh_10c67K.webp',
        'image_srcset' => get_template_directory_uri() . '/assets/expertise-art.C5dmt5Bh_10c67K.webp 253w',
        'image_width' => '253',
        'image_height' => '307',
        'image_sizes' => '253px',
        'image_alt' => '',
        'class' => 'expertise',
        'list' => array(
            'Partnerships with IITs, IIMs, CSIR labs and global universities',
            'Mentors from senior technical and commercial teams',
            'Access to global energy-transition research networks',
            'Regulatory guidance and policy navigation support'
        )
    ),
    array(
        'card_number' => '03',
        'card_eyebrow' => 'WHERE YOU BUILD',
        'title' => 'Infrastructure',
        'subtitle' => 'Labs, rigs and workspace',
        'intro' => 'Shared access to world-class R&amp;D laboratories, testing rigs, fabrication workshops and technical facilities across energy-major sites spanning multiple cities nationwide.',
        'image' => get_template_directory_uri() . '/assets/infrastructure-art.CwGHuOpQ_Z2vmRAu.webp',
        'image_srcset' => get_template_directory_uri() . '/assets/infrastructure-art.CwGHuOpQ_Z2vmRAu.webp 247w',
        'image_width' => '247',
        'image_height' => '266',
        'image_sizes' => '247px',
        'image_alt' => '',
        'class' => 'infrastructure',
        'list' => array(
            'Lab and testing facility access at energy-major R&amp;D centres',
            'Shared incubation workspace across multiple cities',
            'Technical equipment and safety-certified environments',
            'Storage, fabrication and prototyping infrastructure'
        )
    ),
    array(
        'card_number' => '04',
        'card_eyebrow' => 'HOW YOU PILOT',
        'title' => 'Piloting Opportunities',
        'subtitle' => 'Field pilots and procurement',
        'intro' => 'Real-world deployment access at operating energy-major sites including refineries, pipelines and terminals to test, iterate and validate technology at industrial scale.',
        'image' => get_template_directory_uri() . '/assets/piloting-art.B__l25Se_Z2pBCgK.webp',
        'image_srcset' => get_template_directory_uri() . '/assets/piloting-art.B__l25Se_Z2pBCgK.webp 443w',
        'image_width' => '443',
        'image_height' => '366',
        'image_sizes' => '443px',
        'image_alt' => '',
        'class' => 'piloting',
        'list' => array(
            'First-of-a-kind field pilots at refineries, terminals and gas grids',
            'Structured problem statements from energy-major technology teams',
            'Fast-tracked procurement pathways for successful pilots',
            'Access to operating assets across multiple geographies'
        )
    )
);

$support_cards = get_field('support_cards');

if (!$support_cards || !is_array($support_cards)) {
    $support_cards = $default_support_cards;
}

/*
 * ============================================================
 * CTA SECTION
 * ============================================================
 */

$cta_title = get_field('cta_title') ?: 'Build with all of this behind you.';
$cta_description = get_field('cta_description') ?: 'The first MC<sup>2</sup>+ cohort launches soon. Bring the technology and put this support stack to work.';
$cta_button_1_text = get_field('cta_button_1_text') ?: 'Get in touch';
$cta_button_1_url = get_field('cta_button_1_url') ?: 'contact.html';
$cta_button_2_text = get_field('cta_button_2_text') ?: 'Explore initiatives';
$cta_button_2_url = get_field('cta_button_2_url') ?: 'initiatives.html';

?>

<main id="main">

  <!-- Hero Section -->
  <section class="support-hero position-relative overflow-hidden" data-astro-cid-lsdb3m2o>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/hero-orbit.FhPBKuLH_2stD2e.webp'); ?>" alt="" loading="eager" data-astro-cid-lsdb3m2o="true" class="orbit top-2">
    <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-lsdb3m2o>
      <p class="eyebrow" data-astro-cid-lsdb3m2o><?php echo esc_html($hero_eyebrow); ?></p>
      <div class="rule mx-auto" aria-hidden="true" data-astro-cid-lsdb3m2o></div>

      <h1 data-astro-cid-lsdb3m2o>

        <span class="reveal-line" data-astro-cid-lsdb3m2o>
          <span class="reveal-line-box" data-astro-cid-lsdb3m2o>
            <span class="reveal-line-text" data-astro-cid-lsdb3m2o>
              <?php echo esc_html($hero_line_1); ?>
            </span>

            <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
              data-astro-cid-lsdb3m2o="true">
              <path
                d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                fill="#1E1E3C" />
            </svg>
          </span>
        </span>

        <span class="reveal-line" data-astro-cid-lsdb3m2o>
          <span class="reveal-line-box" data-astro-cid-lsdb3m2o>
            <span class="reveal-line-text" data-astro-cid-lsdb3m2o>
              <?php echo esc_html($hero_line_2); ?>
            </span>

            <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
              data-astro-cid-lsdb3m2o="true">
              <path
                d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                fill="#1E1E3C" />
            </svg>
          </span>
        </span>

        <span class="reveal-line" data-astro-cid-lsdb3m2o>
          <span class="reveal-line-box" data-astro-cid-lsdb3m2o>
            <span class="reveal-line-text" data-astro-cid-lsdb3m2o>
              <span class="accent" data-astro-cid-lsdb3m2o>
                <?php echo esc_html($hero_line_3); ?>
              </span>
              <span class="period" data-astro-cid-lsdb3m2o>.</span>
            </span>

            <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
              data-astro-cid-lsdb3m2o="true">
              <path
                d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                fill="#1E1E3C" />
            </svg>
          </span>
        </span>

      </h1>

      <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-lsdb3m2o>
        <?php echo wp_kses_post($hero_description); ?>
      </p>

      <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section"
        data-astro-cid-lsdb3m2o>
        <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-lsdb3m2o="true">
          <path id="Vector"
            d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z"
            fill="#1E1E3C" />
        </svg>
      </button>
    </div>
  </section>

  <!-- Support Stack Section -->
  <section class="support-stack" aria-labelledby="support-stack-title" data-astro-cid-s7hrygr2>
    <h2 id="support-stack-title" class="sr-only" data-astro-cid-s7hrygr2>
      The MC²+ support stack
    </h2>

    <div class="stage" data-support-stage data-astro-cid-s7hrygr2>
      <div class="stage-artboard" data-support-artboard data-astro-cid-s7hrygr2>

        <!-- Vector Lines -->
        <svg viewBox="0 0 1021.83 1012.49" fill="none" class="lines lines-capital" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M899.79 1012.49C899.21 695.26 899.21 317.22 899.79 0C900.37 317.23 900.37 695.27 899.79 1012.49Z"
            fill="#F37D2C" />
          <path
            d="M163.86 930.67C163.25 681.66 163.24 402.33 163.86 153.32C164.48 402.33 164.47 681.66 163.86 930.67Z"
            fill="#F37D2C" />
          <path
            d="M1021.83 853.06C701.67 853.64 320.14 853.64 0 853.06C320.16 852.48 701.69 852.48 1021.83 853.06Z"
            fill="#F37D2C" />
          <path
            d="M967.13 74.8599C810.21 75.4699 634.19 75.4799 477.28 74.8599C634.2 74.2399 810.22 74.2499 967.13 74.8599Z"
            fill="#F37D2C" />
          <path
            d="M967.13 277.98C677.3 278.59 352.17 278.6 62.34 277.98C352.17 277.36 677.3 277.37 967.13 277.98Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 1021.83 1012.49" fill="none" class="lines lines-expertise" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path d="M899.8 1012.49C899.22 695.26 899.22 317.22 899.8 0C900.38 317.23 900.38 695.27 899.8 1012.49Z"
            fill="#F37D2C" />
          <path
            d="M163.87 930.67C163.26 681.66 163.25 402.33 163.87 153.32C164.49 402.33 164.48 681.66 163.87 930.67Z"
            fill="#F37D2C" />
          <path
            d="M1021.83 853.06C701.67 853.64 320.14 853.64 0 853.06C320.16 852.48 701.69 852.48 1021.83 853.06Z"
            fill="#F37D2C" />
          <path
            d="M967.13 74.8601C790.99 75.4701 593.41 75.4801 417.28 74.8601C593.42 74.2401 791 74.2501 967.13 74.8601Z"
            fill="#F37D2C" />
          <path
            d="M967.13 277.98C677.3 278.59 352.17 278.6 62.34 277.98C352.17 277.36 677.3 277.37 967.13 277.98Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 1021.83 1012.49" fill="none" class="lines lines-infrastructure" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M899.79 1012.49C899.21 695.26 899.21 317.22 899.79 0C900.37 317.23 900.37 695.27 899.79 1012.49Z"
            fill="#F37D2C" />
          <path
            d="M163.86 930.67C163.25 634.21 163.24 301.65 163.86 5.18994C164.48 301.65 164.47 634.21 163.86 930.67Z"
            fill="#F37D2C" />
          <path
            d="M1021.83 853.05C701.67 853.63 320.14 853.63 0 853.05C320.16 852.47 701.69 852.47 1021.83 853.05Z"
            fill="#F37D2C" />
          <path
            d="M554.89 74.8599C397.97 75.4699 221.95 75.4799 65.04 74.8599C221.96 74.2399 397.98 74.2499 554.89 74.8599Z"
            fill="#F37D2C" />
          <path
            d="M967.13 277.98C677.3 278.59 352.17 278.6 62.34 277.98C352.17 277.36 677.3 277.37 967.13 277.98Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 1021.83 962.49" fill="none" class="lines lines-piloting" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M899.8 962.49C899.28 657.09 899.13 304.77 899.8 0C900.47 304.58 900.32 657.3 899.8 962.49Z"
            fill="#F37D2C" />
          <path
            d="M163.87 950.67C163.26 695.25 163.25 408.74 163.87 153.32C164.49 408.74 164.48 695.25 163.87 950.67Z"
            fill="#F37D2C" />
          <path
            d="M1021.83 853.06C701.67 853.64 320.14 853.64 0 853.06C320.16 852.48 701.69 852.48 1021.83 853.06Z"
            fill="#F37D2C" />
          <path
            d="M967.13 74.8602C790.99 75.4702 593.41 75.4802 417.28 74.8602C593.42 74.2402 791 74.2502 967.13 74.8602Z"
            fill="#F37D2C" />
          <path
            d="M967.13 277.98C677.3 278.59 352.17 278.6 62.34 277.98C352.17 277.36 677.3 277.37 967.13 277.98Z"
            fill="#F37D2C" />
        </svg>

        <!-- Dividers -->
        <svg viewBox="0 0 904.79 1.24" fill="none" class="divider divider-capital" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M904.79 0.62C614.96 1.23 289.83 1.24 0 0.62C289.83 0 614.96 0.01 904.79 0.62Z" fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 904.79 1.24" fill="none" class="divider divider-expertise" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M904.79 0.62C614.96 1.23 289.83 1.24 0 0.62C289.83 0 614.96 0.01 904.79 0.62Z" fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 904.79 1.24" fill="none" class="divider divider-infrastructure" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M904.79 0.62C614.96 1.23 289.83 1.24 0 0.62C289.83 0 614.96 0.01 904.79 0.62Z" fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 904.79 1.24" fill="none" class="divider divider-piloting" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M904.79 0.62C614.96 1.23 289.83 1.24 0 0.62C289.83 0 614.96 0.01 904.79 0.62Z" fill="#F37D2C" />
        </svg>

        <!-- Sparks -->
        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-sm spark-capital-open" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 38.64L32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-capital-left" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 38.64L32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-capital-mid" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 38.64L32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-sm spark-expertise-open" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 38.64L32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-expertise-mid" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-expertise-right" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 38.64L32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-sm spark-infrastructure-open" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 38.64L32.54 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-infrastructure-left" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-infrastructure-mid" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-sm spark-piloting-open" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-piloting-mid" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 15.54L30.39 0L32.54 15.54C33.45 22.14 38.64 27.33 45.24 28.24L60.78 30.39L45.24 32.54C38.64 33.45 33.45 38.64 33.45 45.24L30.39 60.78L28.24 45.24C27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <svg viewBox="0 0 60.78 60.78" fill="none" class="spark spark-lg spark-piloting-right" aria-hidden="true"
          data-astro-cid-s7hrygr2="true">
          <path
            d="M15.54 32.54L0 30.39L15.54 28.24C22.14 27.33 27.33 22.14 28.24 27.33 38.64 22.14 33.45 15.54 32.54Z"
            fill="#F37D2C" />
        </svg>

        <!-- Art Images -->
        <?php foreach ($support_cards as $card) : ?>
          <?php
              $card_class = !empty($card['class']) ? $card['class'] : '';
              $image = !empty($card['image']) ? $card['image'] : '';
              $image_srcset = !empty($card['image_srcset']) ? $card['image_srcset'] : '';
              $image_width = !empty($card['image_width']) ? $card['image_width'] : '';
              $image_height = !empty($card['image_height']) ? $card['image_height'] : '';
              $image_sizes = !empty($card['image_sizes']) ? $card['image_sizes'] : '';
              $image_alt = !empty($card['image_alt']) ? $card['image_alt'] : '';

              if (is_array($image)) {
                  $image_url = !empty($image['url']) ? $image['url'] : '';
                  $image_alt = !empty($image['alt']) ? $image['alt'] : $image_alt;
                  $image_width = !empty($image['width']) ? $image['width'] : $image_width;
                  $image_height = !empty($image['height']) ? $image['height'] : $image_height;
              } else {
                  $image_url = $image;
              }
          ?>

          <?php if ($image_url) : ?>
            <img
                src="<?php echo esc_url($image_url); ?>"
              <?php if ($image_srcset) : ?>srcset="<?php echo esc_attr($image_srcset); ?>"<?php endif; ?>
              alt="<?php echo esc_attr($image_alt); ?>"
              <?php if ($image_sizes) : ?>sizes="<?php echo esc_attr($image_sizes); ?>"<?php endif; ?>
              data-astro-cid-s7hrygr2="true"
              loading="lazy"
              decoding="async"
              <?php if ($image_width) : ?>width="<?php echo esc_attr($image_width); ?>"<?php endif; ?>
              <?php if ($image_height) : ?>height="<?php echo esc_attr($image_height); ?>"<?php endif; ?>
              class="art art-<?php echo esc_attr($card_class); ?>">
          <?php endif; ?>
        <?php endforeach; ?>

        <!-- Support Cards -->
        <?php foreach ($support_cards as $card) : ?>
          <?php
          $card_number = !empty($card['card_number']) ? $card['card_number'] : '';
          $card_eyebrow = !empty($card['card_eyebrow']) ? $card['card_eyebrow'] : '';
          $card_title = !empty($card['title']) ? $card['title'] : '';
          $card_subtitle = !empty($card['subtitle']) ? $card['subtitle'] : '';
          $card_intro = !empty($card['intro']) ? $card['intro'] : '';
          $card_class = !empty($card['class']) ? $card['class'] : '';
          $card_list = !empty($card['list']) && is_array($card['list']) ? $card['list'] : array();
          ?>

          <article class="support-card support-card-<?php echo esc_attr($card_class); ?>" data-astro-cid-s7hrygr2>
            <p class="card-eyebrow" data-astro-cid-s7hrygr2>
              <?php echo esc_html($card_number); ?> | <?php echo esc_html($card_eyebrow); ?>
            </p>

            <h3 data-astro-cid-s7hrygr2>
              <?php echo esc_html($card_title); ?>
            </h3>

            <p class="subtitle" data-astro-cid-s7hrygr2>
              <?php echo esc_html($card_subtitle); ?>
            </p>

            <p class="intro" data-astro-cid-s7hrygr2>
              <?php echo wp_kses_post($card_intro); ?>
            </p>

            <ul class="list-unstyled" data-astro-cid-s7hrygr2>
                <?php foreach ($card_list as $list_item) : ?>
                    <?php
                    if (is_array($list_item)) {
                        $list_item = $list_item['text'] ?? $list_item['item'] ?? $list_item['content'] ?? '';
                    }
                    ?>
                    <?php if ($list_item !== '') : ?>
                        <li data-astro-cid-s7hrygr2>
                            <?php echo wp_kses_post($list_item); ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
          </article>

        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <script>
    (() => {
      const stage = document.querySelector("[data-support-stage]");
      if (!stage) return;

      const baseWidth = 1757.92;
      const baseHeight = 2688;
      const desktopQuery = window.matchMedia("(min-width: 1200px)");

      const syncStage = () => {
        window.requestAnimationFrame(() => {
          if (!desktopQuery.matches) {
            stage.style.removeProperty("--support-stage-scale");
            stage.style.removeProperty("--support-stage-height");
            return;
          }

          const scale = Math.min(1, stage.getBoundingClientRect().width / baseWidth);
          stage.style.setProperty("--support-stage-scale", String(scale));
          stage.style.setProperty("--support-stage-height", `${baseHeight * scale}px`);
        });
      };

      syncStage();
      window.addEventListener("resize", syncStage, { passive: true });
    })();
  </script>

  <!-- Support CTA Section -->
  <section class="support-cta" data-astro-cid-t6xcruc4>
    <div class="container reveal text-center" data-astro-cid-t6xcruc4>

      <h2 data-astro-cid-t6xcruc4>
        <span class="reveal-line" data-astro-cid-t6xcruc4>
          <span class="reveal-line-box" data-astro-cid-t6xcruc4>
            <span class="reveal-line-text" data-astro-cid-t6xcruc4>
              <?php echo esc_html($cta_title); ?>
            </span>

            <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
              data-astro-cid-t6xcruc4="true">
              <path
                d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                fill="#1E1E3C" />
            </svg>
          </span>
        </span>
      </h2>

      <p class="lede reveal-rise reveal-rise--after-1-line" data-astro-cid-t6xcruc4>
        <?php echo wp_kses_post($cta_description); ?>
      </p>

      <div class="ctas d-flex justify-content-center align-items-center flex-wrap" data-astro-cid-t6xcruc4>

        <a href="<?php echo esc_url($cta_button_1_url); ?>" data-astro-cid-b7tmfpbf="true" class="pill filled">
          <span class="pill-label" data-astro-cid-b7tmfpbf>
            <?php echo esc_html($cta_button_1_text); ?>
          </span>

          <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
            <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
              <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
              <path
                d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z"
                fill="currentColor" data-astro-cid-b7tmfpbf></path>
            </svg>
          </span>
        </a>

        <a href="<?php echo esc_url($cta_button_2_url); ?>" data-astro-cid-b7tmfpbf="true" class="pill filled">
          <span class="pill-label" data-astro-cid-b7tmfpbf>
            <?php echo esc_html($cta_button_2_text); ?>
          </span>

          <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
            <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
              <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
              <path
                d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z"
                fill="currentColor" data-astro-cid-b7tmfpbf></path>
            </svg>
          </span>
        </a>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>