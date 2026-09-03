<?php
/**
 * Template Name: Initiatives Page
 */

get_header();

/*
 * ============================================================
 * HERO SECTION
 * ============================================================
 */

$hero_eyebrow = get_field('hero_eyebrow') ?: 'INITIATIVES';

$hero_title_line_1 = get_field('hero_title_line_1') ?: 'Built for ';
$hero_title_line_1_accent = get_field('hero_title_line_1_accent') ?: 'every builder';

$hero_title_line_2 = get_field('hero_title_line_2') ?: 'in India&rsquo;s energy story.';

$hero_description = get_field('hero_description') ?: 'Whether you are an early-stage aspiring entrepreneur, a researcher with a lab&#8209;stage IP, or an institution ready to co-build the next decade of energy technology, MC&sup2;+ is for you.';

$hero_notice_text = get_field('hero_notice_text') ?: 'Capital, infrastructure and mentorship support every stage, from lab access to pilot sites across the seven energy majors.';

$hero_notice_link_text = get_field('hero_notice_link_text') ?: 'See the full support stack';
$hero_notice_link_url = get_field('hero_notice_link_url') ?: 'support.html';


/*
 * ============================================================
 * HOW IT WORKS
 * ============================================================
 */

$how_eyebrow = get_field('how_eyebrow') ?: 'HOW IT WORKS';

$how_title = get_field('how_title') ?: 'From idea, to deployment.';

$how_subtitle = get_field('how_subtitle') ?: 'Come in through a Grand Challenge, as a Fellow, or as an existing venture. Every builder moves through the same four steps.';

$default_steps = array(
    array(
        'step_number' => 'O1',
        'title' => 'Apply',
        'body' => 'Tell us what you are building. One application, whichever track fits, through a Grand Challenge, the Fellows programme or the Accelerator.',
    ),
    array(
        'step_number' => 'O2',
        'title' => 'Get matched with energy majors',
        'body' => 'We match you to the energy majors who own the problem and the assets, your sponsors, mentors and first reference customers.',
    ),
    array(
        'step_number' => 'O3',
        'title' => 'Build, test, iterate',
        'body' => 'Prototype and validate on real infrastructure, with labs, pilot sites and hands-on mentorship to reach a field-ready product.',
    ),
    array(
        'step_number' => 'O4',
        'title' => 'Scale with capital',
        'body' => 'Turn a successful pilot into procurement, and raise growth-stage capital through the affiliated India Energy Fund to scale.',
    ),
);

$how_steps = get_field('how_steps');

if (empty($how_steps)) {
    $how_steps = $default_steps;
}


/*
 * ============================================================
 * PROGRAMS
 * ============================================================
 */

$default_programs = array(
    array(
        'number' => 'O1',
        'label_lines' => array(
            array('text' => 'FOR RESEARCHERS'),
            array('text' => 'SOLVING INDUSTRY PROBLEMS'),
        ),
        'title_lines' => array(
            array('text' => 'Grand Challenges'),
        ),
        'subtitle' => 'ENERGY-MAJOR-DEFINED PROBLEM BRIEFS',
        'body' => 'Real problems, posted by the people who own the assets. Energy majors publish challenge briefs tied to live operational needs, and researchers solving a specific, industry-relevant problem respond. Winners earn pilots, awards and a fast track into the Accelerator.',
        'chips' => array(
            array(
                'text' => 'Themed briefs',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Cash awards + pilots',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Operating-site access',
                'is_download' => false,
                'url' => '',
            ),
        ),
        'status_type' => 'none',
        'status_text' => '',
        'status_url' => '',
        'status_button_text' => '',
        'status_target' => '_self',
        'status_rel' => '',
    ),
    array(
        'number' => 'O2',
        'label_lines' => array(
            array('text' => 'FOR FOUNDERS'),
            array('text' => 'BUILDING FROM SCRATCH'),
        ),
        'title_lines' => array(
            array('text' => 'Entrepreneur-'),
            array('text' => 'in-Residence'),
        ),
        'subtitle' => 'The MC²+ Fellows track',
        'body' => 'For builders who want to start from zero. Fellows embed in energy major and academic labs to shape a venture around a real problem or a piece of IP, with a stipend and seed funding while they find product-market fit.',
        'chips' => array(
            array(
                'text' => 'Around 20 fellows a year',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Stipend + seed',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Lab residency',
                'is_download' => false,
                'url' => '',
            ),
        ),
        'status_type' => 'text',
        'status_text' => 'Coming soon',
        'status_url' => '',
        'status_button_text' => '',
        'status_target' => '_self',
        'status_rel' => '',
    ),
    array(
        'number' => 'O3',
        'label_lines' => array(
            array('text' => 'EXISTING VENTURES'),
            array('text' => 'READY TO SCALE'),
        ),
        'title_lines' => array(
            array('text' => 'Accelerator'),
        ),
        'subtitle' => 'The flagship six-month cohort',
        'body' => 'For ventures that already exist and are ready to scale. A six-month, TRL-gated cohort maps each startup to a named energy major challenge brief, with seed and scale-up capital and pilot access, ending in a Demo Day in front of real buyers.',
        'chips' => array(
            array(
                'text' => 'Pilot + capital',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Download Brochure',
                'is_download' => true,
                'url' => 'initiatives/MC2-Ignite-Call-for-Applications.pdf',
            ),
        ),
        'status_type' => 'button',
        'status_text' => '',
        'status_url' => 'https://app.mc2plus.in/ext/form/24027/1/apply',
        'status_button_text' => 'Apply Now',
        'status_target' => '_blank',
        'status_rel' => 'noopener noreferrer',
    ),
    array(
        'number' => 'O4',
        'label_lines' => array(
            array('text' => 'REGULATORY SANDBOX'),
            array('text' => 'OIL & GAS'),
        ),
        'title_lines' => array(
            array('text' => 'Regulatory Sandbox'),
        ),
        'subtitle' => 'A live, controlled space to test regulatory relief',
        'body' => 'A joint initiative of CHT (MoPNG) and MC²+, offering innovators a formal, time-bound framework to trial products, technologies and business models under temporary, targeted regulatory relaxations — with safety, environmental and consumer protections fully in force throughout.',
        'chips' => array(
            array(
                'text' => 'Time-bound trial',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Targeted relief',
                'is_download' => false,
                'url' => '',
            ),
            array(
                'text' => 'Revocable waivers',
                'is_download' => false,
                'url' => '',
            ),
        ),
        'status_type' => 'button',
        'status_text' => '',
        'status_url' => 'https://app.mc2plus.in/ext/survey/17999/apply',
        'status_button_text' => 'Apply',
        'status_target' => '_blank',
        'status_rel' => 'noopener noreferrer',
    ),
);

$programs = get_field('programs');

if (empty($programs)) {
    $programs = $default_programs;
}


/*
 * ============================================================
 * CTA BAND
 * ============================================================
 */

$cta_title = get_field('cta_title') ?: 'Found your entry point?';

$cta_body = get_field('cta_body') ?: 'The first MC&sup2;+ cohort launches soon.<br>Tell us what you&rsquo;re building in the meantime.';

$cta_button_text = get_field('cta_button_text') ?: 'Register your interest';

$cta_button_url = get_field('cta_button_url') ?: 'https://app.mc2plus.in/ext/form/24027/1/apply';

$cta_button_target = get_field('cta_button_target') ?: '_blank';

$cta_button_rel = get_field('cta_button_rel') ?: 'noopener noreferrer';

?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" data-astro-cid-ndf65epe>
  <div class="orbit position-absolute top-0 start-0 w-100" aria-hidden="true" data-astro-cid-ndf65epe>
    <svg width="1920" height="1107" viewBox="0 0 1920 1107" fill="none" class="curves" data-astro-cid-ndf65epe="true">
      <path d="M-70.0898 232.67C-3.71984 758.69 476.51 1131.32 1002.53 1064.95C1528.55 998.58 1901.18 518.35 1834.81 -7.67" stroke="#F37D2C" stroke-miterlimit="10" />
      <path d="M1446.48 40.64C1446.48 382.82 1723.87 660.22 2066.06 660.22" stroke="#F37D2C" stroke-miterlimit="10" />
      <path d="M-27.3198 1105.63C142.72 1105.63 280.56 967.79 280.56 797.75C280.56 627.71 142.72 489.87 -27.3198 489.87" stroke="#F37D2C" stroke-miterlimit="10" />
    </svg>

    <svg width="102" height="90" viewBox="0 0 102 90" fill="none" class="spark spark-a" data-astro-cid-ndf65epe="true">
      <path d="M83.11 0.0100098L68.36 21.22C63.19 28.65 53.2401 30.97 45.3101 26.59L0 1.52002L36.62 34.27C45.38 42.1 48.4801 54.49 44.4401 65.52L35.62 89.62L54.2001 65.45C58.9601 59.26 67.23 56.93 74.52 59.72L101.17 69.93L84.75 57C75.42 49.65 71.5701 37.32 75.0901 25.97L83.13 0L83.11 0.0100098Z" fill="#F37D2C" />
    </svg>

    <svg width="74" height="105" viewBox="0 0 74 105" fill="none" class="spark spark-b" data-astro-cid-ndf65epe="true">
      <path d="M45.6 0L39.99 31.24C38.62 38.88 29.94 42.68 23.4 38.52L0 23.63L19.4 45.05C27.53 54.03 31.47 66.03 30.23 78.08L27.57 104.07L38.32 78.43C40.85 72.4 48.08 69.93 53.77 73.16L73.75 84.51L58.15 67.71C50.36 59.32 46.24 48.16 46.78 36.72C47.35 24.65 47.54 9.18 45.6 0Z" fill="#F37D2C" />
    </svg>
  </div>

  <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-ndf65epe>
    <p class="eyebrow" data-astro-cid-ndf65epe><?php echo esc_html($hero_eyebrow); ?></p>

    <div class="underline mx-auto" aria-hidden="true" data-astro-cid-ndf65epe></div>

    <h1 data-astro-cid-ndf65epe>
      <span class="line reveal-line" data-astro-cid-ndf65epe>
        <span class="reveal-line-box" data-astro-cid-ndf65epe>
          <span class="reveal-line-text" data-astro-cid-ndf65epe>
            <?php echo wp_kses_post($hero_title_line_1); ?>
            <span class="accent" data-astro-cid-ndf65epe><?php echo wp_kses_post($hero_title_line_1_accent); ?></span>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-ndf65epe="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>
        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-ndf65epe>
        <span class="reveal-line-box" data-astro-cid-ndf65epe>
          <span class="reveal-line-text" data-astro-cid-ndf65epe><?php echo wp_kses_post($hero_title_line_2); ?></span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-ndf65epe="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>
        </span>
      </span>
    </h1>

    <p class="lede reveal-rise reveal-rise--after-2-lines" data-astro-cid-ndf65epe>
      <?php echo wp_kses_post($hero_description); ?>
    </p>

    <div class="notice reveal-rise d-flex align-items-center" data-astro-cid-ndf65epe>
      <svg width="109" height="109" viewBox="0 0 109 109" fill="none" class="notice-icon flex-shrink-0" aria-hidden="true" data-astro-cid-ndf65epe="true">
        <path d="M54.42 106.85C25.51 106.85 2 83.33 2 54.43C2 25.53 25.52 2.01001 54.42 2.01001C83.32 2.01001 106.84 25.53 106.84 54.43C106.84 83.33 83.32 106.85 54.42 106.85Z" fill="#F37D2C" />
        <path d="M54.42 4C82.22 4 104.84 26.62 104.84 54.42C104.84 82.22 82.22 104.84 54.42 104.84C26.62 104.84 4 82.22 4 54.42C4 26.62 26.62 4 54.42 4ZM54.42 0C24.36 0 0 24.37 0 54.42C0 84.47 24.37 108.84 54.42 108.84C84.47 108.84 108.84 84.47 108.84 54.42C108.84 24.37 84.47 0 54.42 0Z" fill="#1E1E3C" />

        <g transform="translate(25.55 35.5)">
          <path d="M11.8498 26.71L0.819824 37.85H56.9098L46.6898 26.71" fill="#F37D2C" />
          <path d="M11.85 26.71C8.72998 30.09 4.19999 34.81 1.04999 38.08L0.809998 37.51C5.48 37.45 10.16 37.4 14.83 37.4C27.87 37.33 43.93 37.34 56.9 37.5L56.64 38.08C53.28 34.32 49.95 30.54 46.68 26.71C50.4 30.49 54.06 34.32 57.69 38.18L56.9 38.19C43.96 38.35 27.85 38.35 14.83 38.29C9.88999 38.29 4.94 38.23 0 38.17C3.44 34.74 8.28998 30.12 11.85 26.71Z" fill="#1E1E3C" />

          <path d="M11.8498 13.36L0.819824 24.49H56.9098L46.6898 13.36" fill="#F37D2C" />
          <path d="M11.85 13.36C8.72998 16.74 4.19999 21.46 1.04999 24.73L0.809998 24.16C5.48 24.1 10.16 24.05 14.83 24.05C27.87 23.98 43.93 23.99 56.9 24.15L56.64 24.73C53.28 20.97 49.95 17.19 46.68 13.36C50.4 17.14 54.06 20.97 57.69 24.83L56.9 24.84C43.96 25 27.85 25 14.83 24.94C9.88999 24.94 4.94 24.88 0 24.82C3.44 21.39 8.28998 16.77 11.85 13.36Z" fill="#1E1E3C" />

          <path d="M11.8498 0L0.819824 11.14H56.9098L46.6898 0" fill="#F37D2C" />
          <path d="M11.85 0C8.72998 3.38 4.19999 8.09999 1.04999 11.37L0.809998 10.8C5.48 10.74 10.16 10.69 14.83 10.69C27.87 10.62 43.93 10.63 56.9 10.79L56.64 11.37C53.28 7.60999 49.95 3.83 46.68 0C50.4 3.78 54.06 7.60997 57.69 11.47L56.9 11.48C43.96 11.64 27.85 11.64 14.83 11.58C9.88999 11.58 4.94 11.52 0 11.46C3.44 8.02996 8.28998 3.41 11.85 0Z" fill="#1E1E3C" />
        </g>
      </svg>

      <p class="notice-text" data-astro-cid-ndf65epe>
        <?php echo wp_kses_post($hero_notice_text); ?>

        <a href="<?php echo esc_url($hero_notice_link_url); ?>" class="notice-link" data-astro-cid-ndf65epe>
          <?php echo esc_html($hero_notice_link_text); ?>
          <span aria-hidden="true" data-astro-cid-ndf65epe>&rarr;</span>
        </a>
      </p>
    </div>
  </div>

  <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section" data-astro-cid-ndf65epe>
    <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-ndf65epe="true">
      <g id="Desktop" clip-path="url(#clip0_0_1)">
        <g id="home test 1">
          <g id="Group">
            <path id="Vector" d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z" fill="#1E1E3C" />
          </g>
        </g>
      </g>
      <defs>
        <clipPath id="clip0_0_1">
          <rect width="1920" height="4496" fill="white" transform="translate(-942.22 -963.55)" />
        </clipPath>
      </defs>
    </svg>
  </button>
</section>

<!-- How It Works Section -->
<section class="how-it-works" data-astro-cid-rm35jcdx>
  <div class="container heading reveal text-center mx-auto" data-astro-cid-rm35jcdx>
    <div class="section-heading" data-astro-cid-ypavld2q>
      <p class="eyebrow" data-astro-cid-ypavld2q><?php echo esc_html($how_eyebrow); ?></p>

      <h2 data-astro-cid-ypavld2q>
        <span class="reveal-line" data-astro-cid-rm35jcdx>
          <span class="reveal-line-box" data-astro-cid-rm35jcdx>
            <span class="reveal-line-text" data-astro-cid-rm35jcdx>
              <?php echo wp_kses_post($how_title); ?>
            </span>

            <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-rm35jcdx="true">
              <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
            </svg>
          </span>
        </span>
      </h2>
    </div>

    <p class="sub reveal-rise reveal-rise--after-1-line" data-astro-cid-rm35jcdx>
      <?php echo wp_kses_post($how_subtitle); ?>
    </p>
  </div>

  <div class="container" data-astro-cid-rm35jcdx>
    <div class="steps-row" data-astro-cid-rm35jcdx>

      <?php foreach ($how_steps as $index => $step) : ?>

        <?php
        $step_number = !empty($step['step_number']) ? $step['step_number'] : sprintf('O%02d', $index + 1);
        $step_title = !empty($step['title']) ? $step['title'] : '';
        $step_body = !empty($step['body']) ? $step['body'] : '';
        $step_class = 'step--o' . ($index + 1);
        ?>

        <article class="step <?php echo esc_attr($step_class); ?>" data-astro-cid-rm35jcdx>
          <div class="step-head" data-astro-cid-rm35jcdx>
            <p class="step-label" data-astro-cid-rm35jcdx>STEP</p>
            <p class="step-number" data-astro-cid-rm35jcdx><?php echo esc_html($step_number); ?></p>
            <div class="step-rule" aria-hidden="true" data-astro-cid-rm35jcdx></div>

            <svg class="step-notch" viewBox="0 0 42 73" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
              <path d="M41.6 0V72.13L39.17 48.76C38.41 41.44 32.46 35.7499 25.11 35.3199L0 33.3199L25.67 31.1C32.95 30.63 38.84 25.01 39.64 17.76L41.6 0.0100098V0Z" fill="#000" />
            </svg>

            <?php if ($index < 3) : ?>
              <svg class="step-vtab" viewBox="0 0 21.11 40.22" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1L20.11 20.11L0 39.22Z" fill="currentColor" />
                <path d="M1 1L20.11 20.11L1 39.22" fill="none" stroke="var(--color-ink-alt)" stroke-width="2" />
              </svg>
            <?php endif; ?>
          </div>

          <div class="step-foot" data-astro-cid-rm35jcdx>
            <h3 class="step-title" data-astro-cid-rm35jcdx><?php echo esc_html($step_title); ?></h3>
            <p class="step-body" data-astro-cid-rm35jcdx><?php echo wp_kses_post($step_body); ?></p>
          </div>
        </article>

      <?php endforeach; ?>

    </div>
  </div>

  <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section" data-astro-cid-rm35jcdx>
    <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-rm35jcdx="true">
      <g id="Desktop" clip-path="url(#clip0_0_1)">
        <g id="home test 1">
          <g id="Group">
            <path id="Vector" d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z" fill="#1E1E3C" />
          </g>
        </g>
      </g>
      <defs>
        <clipPath id="clip0_0_1">
          <rect width="1920" height="4496" fill="white" transform="translate(-942.22 -963.55)" />
        </clipPath>
      </defs>
    </svg>
  </button>
</section>

<script type="module">
  var e = document.querySelector(`.steps-row`),
    t = document.querySelectorAll(`.steps-row .step`),
    n = e => {
      t.forEach(t => t.classList.toggle(`is-active`, t === e))
    };

  e && (
    t.forEach(e => {
      e.addEventListener(`mouseenter`, () => n(e))
    }),
    e.addEventListener(`mouseleave`, () => {
      n(null)
    })
  );

  var r = () => window.matchMedia(`(max-width: 1023.98px)`).matches,
    i = null,
    a = () => {
      i || (
        i = new IntersectionObserver(
          e => {
            for (let t of e) {
              t.target.classList.toggle(`is-active`, t.isIntersecting)
            }
          },
          {
            rootMargin: `-45% 0px -45% 0px`,
            threshold: 0
          }
        ),
        t.forEach(e => i.observe(e))
      )
    },
    o = () => {
      i?.disconnect(),
      i = null,
      t.forEach(e => e.classList.remove(`is-active`))
    },
    s = () => {
      r() ? a() : o()
    };

  s();
  window.addEventListener(`resize`, s);
</script>

<!-- Programs Section -->
<section class="programs" aria-label="Programs" data-astro-cid-cq4xpgwh>
  <div class="container" data-astro-cid-cq4xpgwh>
    <div class="programs-row" data-astro-cid-cq4xpgwh>

      <?php foreach ($programs as $index => $program) : ?>

        <?php
        $program_number = !empty($program['number']) ? $program['number'] : sprintf('O%02d', $index + 1);

        $card_class = 'card--o' . ($index + 1);

        $label_lines = !empty($program['label_lines']) && is_array($program['label_lines'])
          ? $program['label_lines']
          : array();

        $title_lines = !empty($program['title_lines']) && is_array($program['title_lines'])
          ? $program['title_lines']
          : array();

        $chips = !empty($program['chips']) && is_array($program['chips'])
          ? $program['chips']
          : array();

        $status_type = !empty($program['status_type']) ? $program['status_type'] : 'none';

        $status_url = !empty($program['status_url']) ? $program['status_url'] : '';
        $status_button_text = !empty($program['status_button_text']) ? $program['status_button_text'] : '';
        $status_target = !empty($program['status_target']) ? $program['status_target'] : '_self';
        $status_rel = !empty($program['status_rel']) ? $program['status_rel'] : '';
        ?>

        <article class="card <?php echo esc_attr($card_class); ?><?php echo $index === 0 ? ' is-active' : ''; ?>" data-astro-cid-cq4xpgwh>

          <div class="card-head" data-astro-cid-cq4xpgwh>
            <p class="card-num" data-astro-cid-cq4xpgwh><?php echo esc_html($program_number); ?></p>

            <p class="card-label" data-astro-cid-cq4xpgwh>
              <?php foreach ($label_lines as $label_line) : ?>
                <?php if (!empty($label_line['text'])) : ?>
                  <span class="line" data-astro-cid-cq4xpgwh><?php echo esc_html($label_line['text']); ?></span>
                <?php endif; ?>
              <?php endforeach; ?>
            </p>
          </div>

          <h3 class="card-title<?php echo count($title_lines) > 1 ? ' card-title--split' : ''; ?>" data-astro-cid-cq4xpgwh>
            <?php foreach ($title_lines as $title_line) : ?>
              <?php if (!empty($title_line['text'])) : ?>
                <span class="line" data-astro-cid-cq4xpgwh><?php echo wp_kses_post($title_line['text']); ?></span>
              <?php endif; ?>
            <?php endforeach; ?>
          </h3>

          <p class="card-subtitle" data-astro-cid-cq4xpgwh>
            <?php echo wp_kses_post($program['subtitle'] ?? ''); ?>
          </p>

          <p class="card-body" data-astro-cid-cq4xpgwh>
            <?php echo wp_kses_post($program['body'] ?? ''); ?>
          </p>

          <div class="card-footer" data-astro-cid-cq4xpgwh>

            <div class="chips" data-astro-cid-cq4xpgwh>

              <?php foreach ($chips as $chip) : ?>

                <?php
                $chip_text = $chip['text'] ?? '';
                $chip_is_download = !empty($chip['is_download']);
                $chip_url = $chip['url'] ?? '';
                ?>

                <?php if ($chip_is_download) : ?>

                  <a href="<?php echo esc_url($chip_url); ?>" target="_blank" class="chip chip--download" data-astro-cid-cq4xpgwh>
                    <?php echo esc_html($chip_text); ?>

                    <svg class="chip-download-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-astro-cid-cq4xpgwh>
                      <path d="M8 1.5V10.5M8 10.5L4.5 7M8 10.5L11.5 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-cq4xpgwh></path>
                      <path d="M2 12.5V13.25C2 13.9404 2.55964 14.5 3.25 14.5H12.75C13.4404 14.5 14 13.9404 14 13.25V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-cq4xpgwh></path>
                    </svg>
                  </a>

                <?php else : ?>

                  <span class="chip" data-astro-cid-cq4xpgwh><?php echo esc_html($chip_text); ?></span>

                <?php endif; ?>

              <?php endforeach; ?>

            </div>

            <?php if ($status_type === 'text') : ?>

              <p class="card-status" data-astro-cid-cq4xpgwh>
                <span class="status-dot" aria-hidden="true" data-astro-cid-cq4xpgwh></span>
                <?php echo esc_html($program['status_text'] ?? ''); ?>
              </p>

            <?php elseif ($status_type === 'button' && $status_url) : ?>

              <p class="card-status" data-astro-cid-cq4xpgwh>
                <a href="<?php echo esc_url($status_url); ?>" target="<?php echo esc_attr($status_target); ?>"<?php echo $status_rel ? ' rel="' . esc_attr($status_rel) . '"' : ''; ?> data-astro-cid-b7tmfpbf="true" class="pill filled">
                  <span class="pill-label" data-astro-cid-b7tmfpbf><?php echo esc_html($status_button_text); ?></span>

                  <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
                    <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
                      <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                      <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
                    </svg>
                  </span>
                </a>
              </p>

            <?php endif; ?>

          </div>

          <svg class="card-flag" viewBox="0 0 115.62 90.07" preserveAspectRatio="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1 L20.07 88.07 H114.62" stroke="currentColor" stroke-width="2" fill="none" vector-effect="non-scaling-stroke" />
          </svg>

        </article>

      <?php endforeach; ?>

      <svg width="164" height="55" viewBox="0 0 164 55" fill="none" class="o1-spark" aria-hidden="true" data-astro-cid-cq4xpgwh="true">
        <path d="M0 26.6302C52.28 26.3502 110.93 26.7701 163.2 27.8001C110.92 28.0801 52.27 27.6602 0 26.6302Z" fill="#F37D2C" />
        <path d="M81.79 25.29L95.71 27.21L81.79 29.1301C75.88 29.9501 71.23 34.59 70.42 40.5L68.5 54.4202L66.58 40.5C65.76 34.59 61.12 29.9401 55.21 29.1301L41.29 27.21L55.21 25.29C61.12 24.47 65.77 19.8302 66.58 13.9202L68.5 0L70.42 13.9202C71.24 19.8302 75.88 24.48 81.79 25.29Z" fill="#F37D2C" />
      </svg>

    </div>
  </div>
</section>

<script type="module">
  var e = document.querySelector(`.programs-row`),
    t = document.querySelectorAll(`.programs-row .card`),
    n = Array.from(t),
    r = () => window.matchMedia(`(min-width: 1024px)`).matches,
    i = 28.345,
    a = 7.502,
    o = 64.62,
    s = t => {
      if (n.forEach(e => e.classList.toggle(`is-active`, e === t)), e) {
        let r = n.indexOf(t) * (i - a),
          s = e.getBoundingClientRect().width;

        e.style.setProperty(`--spark-left`, `${r / 100 * s}px`);
        e.style.setProperty(`--spark-top`, `${t.offsetTop + o}px`);
      }
    };

  e && (
    n.forEach(e => {
      e.addEventListener(`mouseenter`, () => {
        r() && s(e)
      })
    }),
    e.addEventListener(`mouseleave`, () => {
      s(document.querySelector(`.card--o1`))
    })
  );

  var c = () => window.matchMedia(`(max-width: 1023.98px)`).matches,
    l = null,
    u = () => {
      l || (
        l = new IntersectionObserver(
          e => {
            for (let t of e) {
              t.isIntersecting && s(t.target)
            }
          },
          {
            rootMargin: `-45% 0px -45% 0px`,
            threshold: 0
          }
        ),
        n.forEach(e => l.observe(e))
      )
    },
    d = () => {
      l?.disconnect(),
      l = null,
      s(n[0])
    },
    f = () => {
      c() ? u() : d()
    };

  f();
  window.addEventListener(`resize`, f);
</script>

<!-- CTA Band Section -->
<section class="cta-band" data-astro-cid-nadlhie7>
  <div class="container heading text-center" data-astro-cid-nadlhie7>

    <h2 data-astro-cid-nadlhie7>
      <?php echo esc_html($cta_title); ?>
    </h2>

    <p class="body" data-astro-cid-nadlhie7>
      <?php echo wp_kses_post($cta_body); ?>
    </p>

    <div class="cta d-flex justify-content-center align-items-center" data-astro-cid-nadlhie7>
      <a href="<?php echo esc_url($cta_button_url); ?>" target="<?php echo esc_attr($cta_button_target); ?>" rel="<?php echo esc_attr($cta_button_rel); ?>" data-astro-cid-b7tmfpbf="true" class="pill filled">
        <span class="pill-label" data-astro-cid-b7tmfpbf><?php echo esc_html($cta_button_text); ?></span>

        <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
          <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
            <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
            <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 4.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
          </svg>
        </span>
      </a>
    </div>

  </div>
</section>

<?php get_footer(); ?>