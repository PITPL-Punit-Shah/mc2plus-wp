<?php
/**
 * Front Page Template
 */

get_header();

/*
|--------------------------------------------------------------------------
| Helper: Universal Arrow SVG
|--------------------------------------------------------------------------
*/
function mc2_arrow_svg() {
    ?>
    <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>
        <path d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
        <path d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z" fill="currentColor" data-astro-cid-b7tmfpbf></path>
    </svg>
    <?php
}

/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
*/

$hero_eyebrow = get_field('hero_eyebrow') ?: 'Multiply · Collaborate · Create';

$hero_title_line_1_before = get_field('hero_title_line_1_before') ?: 'Where ideas ';
$hero_title_line_1_accent = get_field('hero_title_line_1_accent') ?: 'multiply';
$hero_title_line_1_after = get_field('hero_title_line_1_after') ?: ',';

$hero_title_line_2_before = get_field('hero_title_line_2_before') ?: 'institutes ';
$hero_title_line_2_accent = get_field('hero_title_line_2_accent') ?: 'collaborate';
$hero_title_line_2_after = get_field('hero_title_line_2_after') ?: ' and';

$hero_title_line_3_before = get_field('hero_title_line_3_before') ?: 'visionaries ';
$hero_title_line_3_accent = get_field('hero_title_line_3_accent') ?: 'create';
$hero_title_line_3_after = get_field('hero_title_line_3_after') ?: ' energy ventures.';

$hero_description = get_field('hero_description') ?: "India's flagship energy innovation platform, uniting seven of the country's largest energy majors to carry ventures from the lab bench to industrial scale.";


/*
|--------------------------------------------------------------------------
| ENERGY SPONSORS
|--------------------------------------------------------------------------
*/

$sponsor_heading = get_field('sponsor_heading') ?: "Built together by India's energy backbone:";

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

$sponsors = get_field('sponsors');

if (empty($sponsors)) {
    $sponsors = $default_sponsors;
}


/*
|--------------------------------------------------------------------------
| INNOVATION PARTNERS
|--------------------------------------------------------------------------
*/

$partners_heading = get_field('partners_heading') ?: "Built on Partnerships Across India&rsquo;s Innovation Ecosystem";

$default_partners = array(
    array(
        'logo' => get_template_directory_uri() . '/assets/images/venture-center-logo.png',
        'alt' => 'Venture Center',
        'width' => '381',
        'height' => '129',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/c-camp.png',
        'alt' => 'Centre for Cellular and Molecular Platforms',
        'width' => '294',
        'height' => '129',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/iit-kanpur.png',
        'alt' => 'Indian Institute of Technology Kanpur',
        'width' => '129',
        'height' => '129',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/iit-madras.png',
        'alt' => 'Indian Institute of Technology Madras',
        'width' => '129',
        'height' => '129',
    ),
    array(
        'logo' => get_template_directory_uri() . '/assets/images/iit-bombay.png',
        'alt' => 'Indian Institute of Technology Bombay',
        'width' => '135',
        'height' => '129',
    ),
);

$partners = get_field('partners');

if (empty($partners)) {
    $partners = $default_partners;
}


/*
|--------------------------------------------------------------------------
| WHAT WE PROVIDE
|--------------------------------------------------------------------------
*/

$pillar_eyebrow = get_field('pillar_eyebrow') ?: 'WHAT WE PROVIDE';

$pillar_title_line_1 = get_field('pillar_title_line_1') ?: 'Four pillars. One mission: from idea ';
$pillar_title_line_2 = get_field('pillar_title_line_2') ?: 'to industrial deployment.';

$default_pillars = array(
    array(
        'number' => 'O1',
        'title' => 'Infrastructure',
        'body' => "Shared access to world-class R&D labs, testing rigs, fabrication workshops and technical facilities across India's energy majors and research institutions.",
        'image' => get_template_directory_uri() . '/assets/images/icon01.png',
        'alt' => '',
    ),
    array(
        'number' => 'O2',
        'title' => 'Capital',
        'body' => 'Structured access to seed funding for early validation and scale-up capital for ventures demonstrating commercial traction.',
        'image' => get_template_directory_uri() . '/assets/images/icon02.png',
        'alt' => '',
    ),
    array(
        'number' => 'O3',
        'title' => 'Mentorship',
        'body' => 'Deep mentorship and research partnerships with premier institutions and enterprises, shortening the path from lab to deployment.',
        'image' => get_template_directory_uri() . '/assets/images/icon03.png',
        'alt' => '',
    ),
    array(
        'number' => 'O4',
        'title' => 'Market Access',
        'body' => "Structured pathways to field pilots, procurement and first reference customers across the energy majors' operating sites.",
        'image' => get_template_directory_uri() . '/assets/images/icon04.png',
        'alt' => '',
    ),
);

$pillars = get_field('pillars');

if (empty($pillars)) {
    $pillars = $default_pillars;
}

$pillar_cta_text = get_field('pillar_cta_text') ?: 'See the full support stack';
$pillar_cta_url = get_field('pillar_cta_url') ?: 'support.html';


/*
|--------------------------------------------------------------------------
| WHO IT'S FOR
|--------------------------------------------------------------------------
*/

$audience_eyebrow = get_field('audience_eyebrow') ?: 'WHO IT’S FOR';

$audience_title_line_1 = get_field('audience_title_line_1') ?: 'Built for every builder';
$audience_title_line_2 = get_field('audience_title_line_2') ?: 'in India’s energy&nbsp;story.';

$audience_intro = get_field('audience_intro') ?: 'Whether you are an early-stage aspiring entrepreneur, a researcher with a lab&#8209;stage IP, or an institution ready to co-build the next decade of energy technology – MC²+ is for you.';

$audience_cta_text = get_field('audience_cta_text') ?: 'Explore the initiatives';
$audience_cta_url = get_field('audience_cta_url') ?: 'initiatives.html';

$default_audiences = array(
    array(
        'number' => '01',
        'title' => 'Startups & Founders',
        'body' => 'Validate, pilot and scale your energy technology with India’s largest energy majors behind you.',
        'title_break' => true,
    ),
    array(
        'number' => '02',
        'title' => 'Researchers & Scientists',
        'body' => 'Turn lab&#8209;stage IP into venture-ready technology through the MC²+ Fellows Entrepreneur-in-Residence track.',
        'title_break' => false,
    ),
    array(
        'number' => '03',
        'title' => 'Academic & R&D Institutions',
        'body' => 'Bring your labs, faculty and pipeline of innovators into a national energy-innovation platform.',
        'title_break' => true,
    ),
    array(
        'number' => '04',
        'title' => 'Corporates & Investors',
        'body' => 'Co-invest, co-pilot, or plug into a sourcing pipeline built on real industrial validation.',
        'title_break' => false,
    ),
);

$audiences = get_field('audiences');

if (empty($audiences)) {
    $audiences = $default_audiences;
}


/*
|--------------------------------------------------------------------------
| CTA BAND
|--------------------------------------------------------------------------
*/

$cta_title_line_1 = get_field('cta_title_line_1') ?: 'Building in energy?';
$cta_title_line_2 = get_field('cta_title_line_2') ?: 'Translate it with MC²+';

$cta_body = get_field('cta_body') ?: 'The first MC²+ cohort launches soon. Bring a defensible technology and a real problem worth an industrial pilot.';

$cta_button_text = get_field('cta_button_text') ?: 'Get in touch';
$cta_button_url = get_field('cta_button_url') ?: 'https://app.mc2plus.in/ext/form/24027/1/apply';
$cta_button_target = get_field('cta_button_target') ?: '_blank';
$cta_button_rel = get_field('cta_button_rel') ?: 'noopener noreferrer';


/*
|--------------------------------------------------------------------------
| CHALLENGE MODAL
|--------------------------------------------------------------------------
*/

$modal_enabled = get_field('modal_enabled');

if ($modal_enabled === null) {
    $modal_enabled = true;
}

$modal_title = get_field('modal_title') ?: 'MC²+ Ignite — applications open';

$modal_poster_url = get_field('modal_poster_url') ?: '_astro/accelerator-program-poster.BDqSRrjw_Z1pynJ0.webp';

$modal_poster_srcset = get_field('modal_poster_srcset') ?: '_astro/accelerator-program-poster.BDqSRrjw_1s5EVK.webp 540w, _astro/accelerator-program-poster.BDqSRrjw_1jyX5k.webp 720w, _astro/accelerator-program-poster.BDqSRrjw_Z4I2Of.webp 1080w, _astro/accelerator-program-poster.BDqSRrjw_1cvAfW.webp 1440w';

$modal_poster_alt = get_field('modal_poster_alt') ?: 'Apply to MC²+ Ignite';

$modal_application_url = get_field('modal_application_url') ?: 'https://app.mc2plus.in/ext/form/24027/1/apply';

$modal_accessibility_text = get_field('modal_accessibility_text') ?: "MC²+ Ignite — India's flagship energy innovation accelerator. Up to 50 lakh convertible funding plus up to 1.5 crore milestone-based funding for selected start-ups, supporting up to 30 high-potential early-stage start-ups across seven themes: AI-driven subsurface intelligence; next-gen drilling and well completion technologies; refinery process intensification and analysis; digital asset management; bioenergy with a focus on CBG; hydrogen and mobility; and other innovation in the energy sector. From start-up selection to pilot and procurement: mentoring support throughout the innovation journey, a pilot opportunity to test solutions in real operating environments, a pathway to procurement with an oil and gas PSU, and access to PSU, experts and ecosystem partners. Implementation partner: IIT Madras. Incubation partners: IIT Kanpur, Venture Center, C-CAMP and IIMA Ventures. Launching on 5 August 2026 — applications open, last date 31 August 2026.";

$modal_apply_text = get_field('modal_apply_text') ?: 'Apply now';

?>

<!-- ============================================================
     HERO SECTION
============================================================ -->

<section class="hero" data-astro-cid-i3irphx7>
  <div class="orbit" aria-hidden="true" data-astro-cid-i3irphx7>
    <svg width="1920" height="1153" viewBox="0 0 1920 1153" fill="none" class="curves" data-astro-cid-i3irphx7="true">
      <g id="Desktop">
        <g id="home test 1">
          <g id="Group" opacity="0.6">
            <g id="Group_2">
              <path id="Vector" d="M1587.79 -207.52C1692.35 312.26 1355.75 818.39 835.97 922.95C316.18 1027.51 -189.95 690.91 -294.51 171.13" stroke="#F37D2C" stroke-miterlimit="10" />
              <path id="Vector_2" d="M176.57 730.63C228.37 730.63 270.51 772.77 270.51 824.57C270.51 876.37 228.37 918.51 176.57 918.51C124.77 918.51 82.63 876.37 82.63 824.57C82.63 772.77 124.77 730.63 176.57 730.63ZM176.57 729.63C124.13 729.63 81.63 772.14 81.63 824.57C81.63 877 124.14 919.51 176.57 919.51C229 919.51 271.51 877 271.51 824.57C271.51 772.14 229 729.63 176.57 729.63Z" fill="#F37D2C" />
              <path id="Vector_3" d="M1602.76 -30.02C1649.28 -30.02 1693.02 -11.9 1725.92 20.99C1758.82 53.89 1776.93 97.62 1776.93 144.15C1776.93 190.68 1758.81 234.41 1725.92 267.31C1693.02 300.21 1649.28 318.32 1602.76 318.32C1556.24 318.32 1512.5 300.2 1479.6 267.31C1446.7 234.41 1428.59 190.67 1428.59 144.15C1428.59 97.63 1446.71 53.89 1479.6 20.99C1512.5 -11.91 1556.24 -30.02 1602.76 -30.02ZM1602.76 -31.02C1506.02 -31.02 1427.59 47.41 1427.59 144.15C1427.59 240.89 1506.02 319.32 1602.76 319.32C1699.5 319.32 1777.93 240.89 1777.93 144.15C1777.93 47.41 1699.5 -31.02 1602.76 -31.02Z" fill="#F37D2C" />
            </g>
          </g>
        </g>
      </g>
    </svg>

    <svg width="31" height="28" viewBox="0 0 31 28" fill="none" class="spark spark-a" data-astro-cid-i3irphx7="true">
      <path d="M0.0100021 2.51001L8.64 11.43C10.12 12.96 10.61 15.2 9.91 17.21L6.15 27.92L12.49 21.9C15.25 19.28 19.33 18.6 22.79 20.18L30.62 23.76L22.2 15.55C20.44 13.83 20 11.17 21.11 8.97003L25.66 0L19.1 5.53003C16.31 7.88003 12.4 8.39002 9.09 6.83002L0 2.52002L0.0100021 2.51001Z" fill="#F37D2C" />
    </svg>

    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" class="spark spark-b" data-astro-cid-i3irphx7="true">
      <path d="M21.54 0L17.24 7.71002C16.05 9.84002 13.6 10.93 11.22 10.39L0 7.81L7.63 12.66C10.61 14.55 12.01 18.17 11.07 21.57L9.00002 29.09L14.29 21C15.55 19.07 17.88 18.14 20.12 18.66L29.95 20.93L23.33 16.56C20.59 14.76 19.23 11.47 19.88 8.26001L21.55 0.0100098L21.54 0Z" fill="#F37D2C" />
    </svg>

    <svg width="43" height="40" viewBox="0 0 43 40" fill="none" class="spark spark-c" data-astro-cid-i3irphx7="true">
      <path d="M28.98 0.00997925L24.25 8.50998C22.12 12.33 17.7601 14.34 13.4701 13.46L0 10.7L11.92 17.86C15.48 20 17.3401 24.11 16.5901 28.19L14.5 39.59L21.0601 28.63C23.0401 25.32 26.7501 23.44 30.5901 23.79L42.87 24.92L33.3101 20.1C29.6001 18.23 27.45 14.26 27.89 10.14L28.99 0L28.98 0.00997925Z" fill="#F37D2C" />
    </svg>
  </div>

  <div class="hero-inner reveal" data-astro-cid-i3irphx7>
    <p class="eyebrow" data-astro-cid-i3irphx7>
      <?php echo esc_html($hero_eyebrow); ?>
    </p>

    <div class="underline" aria-hidden="true" data-astro-cid-i3irphx7></div>

    <h1 data-astro-cid-i3irphx7>

      <span class="line reveal-line" data-astro-cid-i3irphx7>
        <span class="reveal-line-box" data-astro-cid-i3irphx7>
          <span class="reveal-line-text" data-astro-cid-i3irphx7>
            <?php echo esc_html($hero_title_line_1_before); ?>
            <span class="accent" data-astro-cid-i3irphx7><?php echo esc_html($hero_title_line_1_accent); ?></span><?php echo esc_html($hero_title_line_1_after); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-i3irphx7="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>
        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-i3irphx7>
        <span class="reveal-line-box" data-astro-cid-i3irphx7>
          <span class="reveal-line-text" data-astro-cid-i3irphx7>
            <?php echo esc_html($hero_title_line_2_before); ?>
            <span class="accent" data-astro-cid-i3irphx7><?php echo esc_html($hero_title_line_2_accent); ?></span><?php echo esc_html($hero_title_line_2_after); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-i3irphx7="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>
        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-i3irphx7>
        <span class="reveal-line-box" data-astro-cid-i3irphx7>
          <span class="reveal-line-text" data-astro-cid-i3irphx7>
            <?php echo esc_html($hero_title_line_3_before); ?>
            <span class="accent" data-astro-cid-i3irphx7><?php echo esc_html($hero_title_line_3_accent); ?></span><?php echo esc_html($hero_title_line_3_after); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-i3irphx7="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>
        </span>
      </span>

    </h1>

    <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-i3irphx7>
      <?php echo wp_kses_post($hero_description); ?>
    </p>

    <button type="button" class="scroll" aria-label="Scroll to next section" data-astro-cid-i3irphx7>
      <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-i3irphx7="true">
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
  </div>
</section>

<!-- ============================================================
     ENERGY SPONSORS
============================================================ -->

<section class="sponsor-strip" data-astro-cid-wpfdya5e>
  <div class="container" data-astro-cid-wpfdya5e>

    <h2 data-astro-cid-wpfdya5e>
      <?php echo wp_kses_post($sponsor_heading); ?>
    </h2>

    <div class="logos-viewport" data-astro-cid-wpfdya5e>
      <ul class="logos" data-astro-cid-wpfdya5e>

        <?php foreach ($sponsors as $sponsor) : ?>
          <li data-astro-cid-wpfdya5e>
            <figure class="logo" data-astro-cid-wpfdya5e>
              <span class="logo-frame" data-astro-cid-wpfdya5e>
                <img
                  src="<?php echo esc_url($sponsor['logo'] ?? ''); ?>"
                  alt="<?php echo esc_attr($sponsor['alt'] ?? ''); ?>"
                  width="<?php echo esc_attr($sponsor['width'] ?? ''); ?>"
                  height="<?php echo esc_attr($sponsor['height'] ?? ''); ?>"
                  data-astro-cid-wpfdya5e
                >
              </span>
            </figure>
          </li>
        <?php endforeach; ?>

        <?php foreach ($sponsors as $sponsor) : ?>
          <li aria-hidden="true" data-astro-cid-wpfdya5e>
            <figure class="logo" data-astro-cid-wpfdya5e>
              <span class="logo-frame" data-astro-cid-wpfdya5e>
                <img
                  src="<?php echo esc_url($sponsor['logo'] ?? ''); ?>"
                  alt="<?php echo esc_attr($sponsor['alt'] ?? ''); ?>"
                  width="<?php echo esc_attr($sponsor['width'] ?? ''); ?>"
                  height="<?php echo esc_attr($sponsor['height'] ?? ''); ?>"
                  data-astro-cid-wpfdya5e
                >
              </span>
            </figure>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>

    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="divider" aria-hidden="true" data-astro-cid-wpfdya5e="true">
      <g id="Desktop" clip-path="url(#clip0_0_1)">
        <g id="home test 1">
          <path id="Vector" d="M36.87 23.02L49.54 24.77L36.87 26.52C31.49 27.26 27.26 31.49 26.52 36.87L24.77 49.54L23.02 36.87C22.28 31.49 18.05 27.26 12.67 26.52L0 24.77L12.67 23.02C18.05 22.28 22.28 18.05 23.02 12.67L24.77 0L26.52 12.67C27.26 18.05 31.49 22.28 36.87 23.02Z" fill="#F37D2C" />
        </g>
      </g>
      <defs>
        <clipPath id="clip0_0_1">
          <rect width="1920" height="4496" fill="white" transform="translate(-935.23 -1454.25)" />
        </clipPath>
      </defs>
    </svg>

  </div>
</section>

<!-- ============================================================
     INNOVATION PARTNERS
============================================================ -->

<section class="partners-strip" data-astro-cid-patvwp53>
  <div class="container" data-astro-cid-patvwp53>

    <h2 data-astro-cid-patvwp53>
      <?php echo wp_kses_post($partners_heading); ?>
    </h2>

    <div class="logos-viewport" data-astro-cid-patvwp53>
      <ul class="logos" data-astro-cid-patvwp53>

        <?php foreach ($partners as $partner) : ?>
          <li data-astro-cid-patvwp53>
            <figure class="logo" data-astro-cid-patvwp53>
              <span class="logo-frame" data-astro-cid-patvwp53>
                <img
                  src="<?php echo esc_url($partner['logo'] ?? ''); ?>"
                  alt="<?php echo esc_attr($partner['alt'] ?? ''); ?>"
                  width="<?php echo esc_attr($partner['width'] ?? ''); ?>"
                  height="<?php echo esc_attr($partner['height'] ?? ''); ?>"
                  data-astro-cid-patvwp53
                >
              </span>
            </figure>
          </li>
        <?php endforeach; ?>

        <?php foreach ($partners as $partner) : ?>
          <li aria-hidden="true" data-astro-cid-patvwp53>
            <figure class="logo" data-astro-cid-patvwp53>
              <span class="logo-frame" data-astro-cid-patvwp53>
                <img
                  src="<?php echo esc_url($partner['logo'] ?? ''); ?>"
                  alt="<?php echo esc_attr($partner['alt'] ?? ''); ?>"
                  width="<?php echo esc_attr($partner['width'] ?? ''); ?>"
                  height="<?php echo esc_attr($partner['height'] ?? ''); ?>"
                  data-astro-cid-patvwp53
                >
              </span>
            </figure>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>

  </div>
</section>

<!-- ============================================================
     WHAT WE PROVIDE
============================================================ -->

<section class="pillars" data-astro-cid-fty226ve>

  <div class="container heading reveal" data-astro-cid-fty226ve>

    <p class="eyebrow" data-astro-cid-fty226ve>
      <?php echo esc_html($pillar_eyebrow); ?>
    </p>

    <h2 data-astro-cid-fty226ve>

      <span class="line reveal-line" data-astro-cid-fty226ve>
        <span class="reveal-line-box" data-astro-cid-fty226ve>

          <span class="reveal-line-text" data-astro-cid-fty226ve>
            <?php echo esc_html($pillar_title_line_1); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-fty226ve="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>

        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-fty226ve>
        <span class="reveal-line-box" data-astro-cid-fty226ve>

          <span class="reveal-line-text" data-astro-cid-fty226ve>
            <?php echo esc_html($pillar_title_line_2); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-fty226ve="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>

        </span>
      </span>

    </h2>
  </div>

  <div class="container" data-astro-cid-fty226ve>

    <div class="pillars-row" data-astro-cid-fty226ve>

      <?php foreach ($pillars as $index => $pillar) : ?>

        <?php
        $pillar_number = !empty($pillar['number']) ? $pillar['number'] : 'O' . ($index + 1);
        $pillar_title = $pillar['title'] ?? '';
        $pillar_body = $pillar['body'] ?? '';
        $pillar_image = $pillar['image'] ?? '';
        $pillar_alt = $pillar['alt'] ?? '';
        $pillar_class = 'card--o' . ($index + 1);
        ?>

        <article class="card <?php echo esc_attr($pillar_class); ?>" data-astro-cid-fty226ve>

          <div class="card-head" data-astro-cid-fty226ve>

            <h3 class="card-title" data-astro-cid-fty226ve>
              <?php echo esc_html($pillar_number); ?> <?php echo esc_html($pillar_title); ?>
            </h3>

            <div class="card-rule" aria-hidden="true" data-astro-cid-fty226ve></div>

            <svg class="pillar-notch" viewBox="0 0 51.11 72.18" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
              <path d="M50.68 0.01V72.14L48.25 48.77C47.49 41.45 41.54 35.76 34.19 35.33L0.02 33.33L34.74 31.11C42.02 30.64 47.91 25.02 48.71 17.77L50.67 0.02L50.68 0.01Z" fill="currentColor" />
              <path d="M50.68 0.01C50.67 23.96 51.1 48.1 51.11 72.14L50.24 72.18C49.81 68.4 48.09 51.1 47.61 47.71C46.52 41.37 40.85 36.24 34.43 35.84C31.29 35.64 22.92 35.13 19.68 34.94L0 33.75V32.88C8.54 32.37 23.77 31.42 32.15 30.95C40.02 31.24 47.26 26.35 48.47 18.27C49.24 12.13 50.01 6.02 50.67 0L50.68 0.01ZM50.68 0.01C49.98 6.18 49.47 12.28 48.79 18.33C48.03 24.56 42.98 29.95 36.8 31.11C34.12 31.59 30.32 31.66 27.6 31.9L18.42 32.53L0.05 33.76V32.89L19.74 34.01L29.58 34.57L34.51 34.86C39.61 35.18 44.39 38.31 46.84 42.78C48.57 45.67 48.8 49.21 49.1 52.48L51.11 72.1L50.24 72.14C50.26 48.09 50.69 24.14 50.67 0.01H50.68Z" fill="var(--color-ink-alt)" />
            </svg>

          </div>

          <div class="card-content" data-astro-cid-fty226ve>

            <p class="card-body" data-astro-cid-fty226ve>
              <?php echo wp_kses_post($pillar_body); ?>
            </p>

            <?php if ($pillar_image) : ?>
              <img
                src="<?php echo esc_url($pillar_image); ?>"
                alt="<?php echo esc_attr($pillar_alt); ?>"
                class="card-illus"
                data-astro-cid-fty226ve
              >
            <?php endif; ?>

          </div>

        </article>

      <?php endforeach; ?>

    </div>

    <div class="cta" data-astro-cid-fty226ve>
      <a href="<?php echo esc_url($pillar_cta_url); ?>" data-astro-cid-b7tmfpbf="true" class="pill filled">

        <span class="pill-label" data-astro-cid-b7tmfpbf>
          <?php echo esc_html($pillar_cta_text); ?>
        </span>

        <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
          <?php mc2_arrow_svg(); ?>
        </span>

      </a>
    </div>

  </div>

</section>

<script type="module">
  var e = document.querySelector(`.pillars-row`),
    t = document.querySelectorAll(`.pillars-row .card`),
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
</script>

<!-- ============================================================
     WHO IT'S FOR
============================================================ -->

<section class="audiences" data-astro-cid-7ontpz5q>

  <div class="container heading reveal" data-astro-cid-7ontpz5q>

    <p class="eyebrow" data-astro-cid-7ontpz5q>
      <?php echo esc_html($audience_eyebrow); ?>
    </p>

    <h2 data-astro-cid-7ontpz5q>

      <span class="line reveal-line" data-astro-cid-7ontpz5q>
        <span class="reveal-line-box" data-astro-cid-7ontpz5q>

          <span class="reveal-line-text" data-astro-cid-7ontpz5q>
            <?php echo esc_html($audience_title_line_1); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-7ontpz5q="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>

        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-7ontpz5q>
        <span class="reveal-line-box" data-astro-cid-7ontpz5q>

          <span class="reveal-line-text" data-astro-cid-7ontpz5q>
            <?php echo wp_kses_post($audience_title_line_2); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true" data-astro-cid-7ontpz5q="true">
            <path d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z" fill="#1E1E3C" />
          </svg>

        </span>
      </span>

    </h2>

    <p class="intro" data-astro-cid-7ontpz5q>
      <?php echo wp_kses_post($audience_intro); ?>
    </p>

    <div class="cta" data-astro-cid-7ontpz5q>
      <a href="<?php echo esc_url($audience_cta_url); ?>" data-astro-cid-b7tmfpbf="true" class="pill filled">

        <span class="pill-label" data-astro-cid-b7tmfpbf>
          <?php echo esc_html($audience_cta_text); ?>
        </span>

        <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
          <?php mc2_arrow_svg(); ?>
        </span>

      </a>
    </div>

  </div>

  <div class="container" data-astro-cid-7ontpz5q>

    <div class="columns" data-astro-cid-7ontpz5q>

      <!-- Original decorative framework retained -->
      <div class="decor" aria-hidden="true" data-astro-cid-7ontpz5q>

        <span class="rule rule--top" data-astro-cid-7ontpz5q></span>
        <span class="rule rule--bottom" data-astro-cid-7ontpz5q></span>
        <span class="vline vline--left" data-astro-cid-7ontpz5q></span>
        <span class="vline vline--right" data-astro-cid-7ontpz5q></span>

        <?php
        $decor_sparks = array(
            'dspark--sm dspark--top-d1',
            'dspark--lg dspark--top-d3',
            'dspark--lg dspark--top-right',
            'dspark--lg dspark--bot-left',
            'dspark--lg dspark--bot-d1',
            'dspark--lg dspark--bot-d2',
            'dspark--xs dspark--bot-d3',
        );

        foreach ($decor_sparks as $spark_class) :
        ?>
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="dspark <?php echo esc_attr($spark_class); ?>" data-astro-cid-7ontpz5q="true">
            <g id="Desktop" clip-path="url(#clip0_0_1)">
              <g id="home test 1">
                <path id="Vector" d="M36.87 23.02L49.54 24.77L36.87 26.52C31.49 27.26 27.26 31.49 26.52 36.87L24.77 49.54L23.02 36.87C22.28 31.49 18.05 27.26 12.67 26.52L0 24.77L12.67 23.02C18.05 22.28 22.28 18.05 23.02 12.67L24.77 0L26.52 12.67C27.26 18.05 31.49 22.28 36.87 23.02Z" fill="#F37D2C" />
              </g>
            </g>
            <defs>
              <clipPath id="clip0_0_1">
                <rect width="1920" height="4496" fill="white" transform="translate(-935.23 -1454.25)" />
              </clipPath>
            </defs>
          </svg>
        <?php endforeach; ?>

      </div>

      <?php foreach ($audiences as $index => $audience) : ?>

        <?php
        $number = $audience['number'] ?? sprintf('%02d', $index + 1);
        $title = $audience['title'] ?? '';
        $body = $audience['body'] ?? '';
        $title_break = !empty($audience['title_break']);
        ?>

        <div class="column" data-astro-cid-7ontpz5q>

          <?php if ($index > 0) : ?>
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="divider-spark divider-spark--top" aria-hidden="true" data-astro-cid-7ontpz5q="true">
              <g id="Desktop" clip-path="url(#clip0_0_1)">
                <g id="home test 1">
                  <path id="Vector" d="M36.87 23.02L49.54 24.77L36.87 26.52C31.49 27.26 27.26 31.49 26.52 36.87L24.77 49.54L23.02 36.87C22.28 31.49 18.05 27.26 12.67 26.52L0 24.77L12.67 23.02C18.05 22.28 22.28 18.05 23.02 12.67L24.77 0L26.52 12.67C27.26 18.05 31.49 22.28 36.87 23.02Z" fill="#F37D2C" />
                </g>
              </g>
              <defs>
                <clipPath id="clip0_0_1">
                  <rect width="1920" height="4496" fill="white" transform="translate(-935.23 -1454.25)" />
                </clipPath>
              </defs>
            </svg>

            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" class="divider-spark divider-spark--bottom" aria-hidden="true" data-astro-cid-7ontpz5q="true">
              <g id="Desktop" clip-path="url(#clip0_0_1)">
                <g id="home test 1">
                  <path id="Vector" d="M36.87 23.02L49.54 24.77L36.87 26.52C31.49 27.26 27.26 31.49 26.52 36.87L24.77 49.54L23.02 36.87C22.28 31.49 18.05 27.26 12.67 26.52L0 24.77L12.67 23.02C18.05 22.28 22.28 18.05 23.02 12.67L24.77 0L26.52 12.67C27.26 18.05 31.49 22.28 36.87 23.02Z" fill="#F37D2C" />
                </g>
              </g>
              <defs>
                <clipPath id="clip0_0_1">
                  <rect width="1920" height="4496" fill="white" transform="translate(-935.23 -1454.25)" />
                </clipPath>
              </defs>
            </svg>
          <?php endif; ?>

          <p class="number" data-astro-cid-7ontpz5q>
            <?php echo esc_html($number); ?>
          </p>

          <h3 class="title" data-astro-cid-7ontpz5q>
            <?php
            if ($title_break) {
                $title_parts = explode(' & ', $title, 2);

                if (count($title_parts) === 2) {
                    echo esc_html($title_parts[0]);
                    echo ' & <br class="title-break" data-astro-cid-7ontpz5q>';
                    echo esc_html($title_parts[1]);
                } else {
                    echo esc_html($title);
                }
            } else {
                echo esc_html($title);
            }
            ?>
          </h3>

          <p class="body" data-astro-cid-7ontpz5q>
            <?php echo wp_kses_post($body); ?>
          </p>

        </div>

      <?php endforeach; ?>

      <span class="columns-rail" aria-hidden="true" data-astro-cid-7ontpz5q></span>

    </div>

  </div>

</section>

<!-- ============================================================
     CTA BAND
============================================================ -->

<section class="cta-band" data-astro-cid-vc7f7hly>

  <div class="container heading" data-astro-cid-vc7f7hly>

    <h2 data-astro-cid-vc7f7hly>
      <span class="line" data-astro-cid-vc7f7hly>
        <?php echo esc_html($cta_title_line_1); ?>
      </span>

      <span class="line" data-astro-cid-vc7f7hly>
        <?php echo esc_html($cta_title_line_2); ?>
      </span>
    </h2>

    <p class="body" data-astro-cid-vc7f7hly>
      <?php echo wp_kses_post($cta_body); ?>
    </p>

    <div class="cta" data-astro-cid-vc7f7hly>

      <a
        href="<?php echo esc_url($cta_button_url); ?>"
        target="<?php echo esc_attr($cta_button_target); ?>"
        rel="<?php echo esc_attr($cta_button_rel); ?>"
        data-astro-cid-b7tmfpbf="true"
        class="pill filled"
      >
        <span class="pill-label" data-astro-cid-b7tmfpbf>
          <?php echo esc_html($cta_button_text); ?>
        </span>

        <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
          <?php mc2_arrow_svg(); ?>
        </span>
      </a>

    </div>

  </div>

</section>

<?php if ($modal_enabled) : ?>

<!-- ============================================================
     CHALLENGE MODAL
============================================================ -->

<dialog id="challenge-modal" aria-labelledby="challenge-modal-title" data-astro-cid-jvd7cy5u>

  <div class="panel" tabindex="-1" autofocus data-astro-cid-jvd7cy5u>

    <h2 id="challenge-modal-title" class="sr-only" data-astro-cid-jvd7cy5u>
      <?php echo esc_html($modal_title); ?>
    </h2>

    <div class="poster-wrap" data-astro-cid-jvd7cy5u>

      <button class="close" type="button" aria-label="Close" data-astro-cid-jvd7cy5u>
        <svg viewBox="0 0 24 24" aria-hidden="true" data-astro-cid-jvd7cy5u>
          <path d="M5 5 L19 19 M19 5 L5 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" data-astro-cid-jvd7cy5u></path>
        </svg>
      </button>

      <a
        class="poster"
        href="<?php echo esc_url($modal_application_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        data-astro-cid-jvd7cy5u
      >
        <img
          src="<?php echo esc_url($modal_poster_url); ?>"
          srcset="<?php echo esc_attr($modal_poster_srcset); ?>"
          alt="<?php echo esc_attr($modal_poster_alt); ?>"
          sizes="(max-width: 640px) 92vw, 640px"
          loading="lazy"
          decoding="async"
          data-astro-cid-jvd7cy5u="true"
          width="2481"
          height="3508"
          class="poster-img"
        >
      </a>

    </div>

    <p class="sr-only" data-astro-cid-jvd7cy5u>
      <?php echo wp_kses_post($modal_accessibility_text); ?>
    </p>

    <div class="cta-row" data-astro-cid-jvd7cy5u>

      <div class="cta" data-astro-cid-jvd7cy5u>

        <a
          href="<?php echo esc_url($modal_application_url); ?>"
          target="_blank"
          rel="noopener noreferrer"
          data-astro-cid-b7tmfpbf="true"
          class="pill filled"
        >
          <span class="pill-label" data-astro-cid-b7tmfpbf>
            <?php echo esc_html($modal_apply_text); ?>
          </span>

          <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>
            <?php mc2_arrow_svg(); ?>
          </span>
        </a>

      </div>

    </div>

  </div>

</dialog>

<script type="module">
  var e = document.getElementById(`challenge-modal`);

  if (e) {
    let t = Date.parse(`2026-09-01T00:00:00+05:30`),
      n = `mc2:program-popup-seen`,
      r = () => {
        try {
          return sessionStorage.getItem(n) !== null
        } catch {
          return !1
        }
      },
      i = () => {
        try {
          sessionStorage.setItem(n, `1`)
        } catch {}
      };

    if (Date.now() < t && !r()) {
      let t = e.querySelector(`.poster-img`);

      t && (t.loading = `eager`);

      e.addEventListener(`close`, () => {
        document.documentElement.style.overflow = ``
      });

      e.addEventListener(`click`, t => {
        t.target === e && e.close()
      });

      e.querySelector(`.close`)?.addEventListener(`click`, () => e.close());

      for (let t of e.querySelectorAll(`a[target="_blank"]`)) {
        t.addEventListener(`click`, () => e.close())
      }

      window.setTimeout(() => {
        e.isConnected &&
        !e.open &&
        (e.showModal(), i(), document.documentElement.style.overflow = `hidden`)
      }, 800)
    }
  }
</script>

<?php endif; ?>

<?php get_footer(); ?>