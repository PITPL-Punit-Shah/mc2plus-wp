<?php
/**
 * Template Name: Career Page
 */

get_header();

/*
 * ============================================================
 * HERO SECTION
 * ============================================================
 */

$hero_eyebrow = get_field('hero_eyebrow') ?: 'CAREER AT MC²+';

$hero_title_line_1 = get_field('hero_title_line_1') ?: 'Help Build India’s';

$hero_title_line_2 = get_field('hero_title_line_2') ?: 'Flagship Energy';

$hero_title_line_3 = get_field('hero_title_line_3') ?: 'innovation platform.';

$hero_description_1 = get_field('hero_description_1') ?: 'MC²+ is a Section 8 not-for-profit backed by the Ministry of Petroleum & Natural Gas and seven of India\'s largest energy majors. We\'re a small, high-ownership team working at the intersection of deep-tech, industrial pilots, and public-sector partnership — turning lab-stage energy IP into ventures that get built in the real world.';

$hero_description_2 = get_field('hero_description_2') ?: 'If you want your work to move India\'s energy transition forward, and you\'re comfortable operating in a fast-moving, mission-first organisation, we\'d like to hear from you.';

/*
 * ============================================================
 * OPEN ROLES SECTION
 * ============================================================
 */

$open_roles_eyebrow = get_field('open_roles_eyebrow') ?: 'OPEN ROLES';

$open_roles_title = get_field('open_roles_title') ?: 'Current openings';

$open_roles_intro = get_field('open_roles_intro') ?: 'Click a role to read the full job description and apply.';

/*
 * Existing roles are retained as fallback data.
 */

$default_roles = array(

    array(
        'title' => 'Manager, Marketing & Communications',
        'meta' => 'New Delhi · Full-time · Reports to CEO / Head of Programs',
        'about_title' => 'About the role',
        'about_description' => 'Own MC² Foundation\'s public brand and the Cohort 1 launch — press, social, partner communications and crisis comms — as the entire marketing function for Year 1, working alongside an external agency.',
        'ownership_title' => 'What you\'ll own',
        'responsibilities' => array(
            'Brand, website and the Cohort 1 launch campaign',
            'Media relationships and earned coverage across business, tech and sectoral press',
            'Social channels, partner newsletters and Demo Day communications',
            'Marketing analytics across the applicant and investor funnel'
        ),
        'actions' => array(
            array(
                'label' => 'Apply for this role',
                'url' => 'https://app.mc2plus.in/ext/survey/17992/apply',
                'type' => 'filled',
                'aria_label' => ''
            ),
            array(
                'label' => 'Download full JD (PDF)',
                'url' => get_template_directory_uri() . '/assets/careers/MC2-JD-Manager-Marketing-Communications.pdf',
                'type' => 'ghost',
                'aria_label' => 'Download full job description PDF for Manager, Marketing & Communications'
            )
        )
    ),

    array(
        'title' => 'Finance Manager',
        'meta' => 'New Delhi · Full-time · Reports to CEO / Finance Committee',
        'about_title' => 'About the role',
        'about_description' => 'MC² Foundation\'s senior-most finance leader — owning budgeting, monthly close and MIS, statutory compliance, and grant accounting for PSU-funded programmes, and building the Foundation\'s Year-1 finance backbone.',
        'ownership_title' => 'What you\'ll own',
        'responsibilities' => array(
            'Budgeting, monthly close and MIS reporting',
            'Statutory audit, tax, FCRA/MCA compliance and grant accounting',
            'Internal controls, procurement and the delegation matrix',
            'Line management of the Legal Associate'
        ),
        'actions' => array(
            array(
                'label' => 'Apply for this role',
                'url' => 'https://app.mc2plus.in/ext/survey/17992/apply',
                'type' => 'filled',
                'aria_label' => ''
            ),
            array(
                'label' => 'Download full JD (PDF)',
                'url' => get_template_directory_uri() . '/assets/careers/MC2-JD-Finance-Manager.pdf',
                'type' => 'ghost',
                'aria_label' => 'Download full job description PDF for Finance Manager'
            )
        )
    ),

    array(
        'title' => 'HR Manager',
        'meta' => 'New Delhi · Full-time · Reports to CEO',
        'about_title' => 'About the role',
        'about_description' => 'Run MC² Foundation\'s people function end-to-end, as a team of one — recruitment, performance management, culture, compliance and founder experience for our incubated cohorts.',
        'ownership_title' => 'What you\'ll own',
        'responsibilities' => array(
            'Recruitment, performance management and the compensation framework',
            'Culture, policy and POSH/DEI processes',
            'The HRMS rollout and day-to-day people operations',
            'Founder onboarding and mentor empanelment with Programmes and Partnerships'
        ),
        'actions' => array(
            array(
                'label' => 'Apply for this role',
                'url' => 'https://app.mc2plus.in/ext/survey/17992/apply',
                'type' => 'filled',
                'aria_label' => ''
            ),
            array(
                'label' => 'Download full JD (PDF)',
                'url' => get_template_directory_uri() . '/assets/careers/MC2-JD-HR-Manager.pdf',
                'type' => 'ghost',
                'aria_label' => 'Download full job description PDF for HR Manager'
            )
        )
    ),

    array(
        'title' => 'Manager, Partnerships',
        'meta' => 'New Delhi · Full-time · Reports to Chief Incubation Officer',
        'about_title' => 'About the role',
        'about_description' => 'The operating quarterback for MC²\'s partner network — 7 PSU sponsors, academic incubator partners and IIMA Ventures — owning MoUs, infrastructure cataloguing, and PoC R&D agreement closures.',
        'ownership_title' => 'What you\'ll own',
        'responsibilities' => array(
            'Closing and operationalising all partner MoUs',
            'Infrastructure cataloguing across the spoke network',
            'Matching cohort startups to PSU challenge briefs and PoC agreements',
            'Line management of the Partnerships Analyst and partner-health reporting to the Board'
        ),
        'actions' => array(
            array(
                'label' => 'Apply for this role',
                'url' => 'https://app.mc2plus.in/ext/survey/17992/apply',
                'type' => 'filled',
                'aria_label' => ''
            ),
            array(
                'label' => 'Download full JD (PDF)',
                'url' => get_template_directory_uri() . '/assets/careers/MC2-JD-Manager-Partnerships.pdf',
                'type' => 'ghost',
                'aria_label' => 'Download full job description PDF for Manager, Partnerships'
            )
        )
    )
);

$roles = get_field('career_roles');

if (!$roles || !is_array($roles)) {
    $roles = $default_roles;
}

/*
 * ============================================================
 * WHY WORK HERE SECTION
 * ============================================================
 */

$why_title = get_field('why_work_title') ?: 'Why Work Here';

$why_steps = get_field('why_work_steps');

if (!$why_steps || !is_array($why_steps)) {
    $why_steps = array(
        array(
            'class' => 'step--o1',
            'title' => 'Mission at national scale',
            'body' => 'work that plugs directly into India\'s energy security and transition goals.'
        ),
        array(
            'class' => 'step--o2',
            'title' => 'Access & network',
            'body' => 'close working relationships with IIT Kanpur, IIT Madras, IIT Bombay, C-CAMP, Venture Center, and the country\'s largest energy PSUs.'
        ),
        array(
            'class' => 'step--o3',
            'title' => 'Ownership',
            'body' => 'a lean team means real responsibility from day one.'
        )
    );
}
?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" data-astro-cid-lmcbnwuj>
  <div class="orbit position-absolute top-0 start-0 w-100" aria-hidden="true" data-astro-cid-lmcbnwuj>
    <svg width="1920" height="1040" viewBox="0 0 1920 1040" fill="none" class="curves"
      data-astro-cid-lmcbnwuj="true">
      <path id="Vector"
        d="M1920 0C1920 530.19 1490.19 960 960 960C429.81 960 -0.000244141 530.19 -0.000244141 0" stroke="#F37D2C"
        stroke-miterlimit="10" />
      <path id="Vector_2"
        d="M1667.63 739.96C1667.63 792.4 1625.12 834.9 1572.69 834.9C1520.25 834.9 1477.75 792.39 1477.75 739.96C1477.75 687.52 1520.26 645.02 1572.69 645.02C1625.13 645.02 1667.63 687.53 1667.63 739.96Z"
        stroke="#F37D2C" stroke-miterlimit="10" />
      <path id="Vector_3"
        d="M-19.1301 414.94C284.03 461.59 516.18 723.59 516.18 1039.81"
        stroke="#F37D2C"
        stroke-miterlimit="10" />
      <path id="Vector_4"
        d="M1622.04 695.2L1630.19 684.27C1634.32 678.73 1633.97 671.05 1629.36 665.91L1624.26 660.22L1635.48 666.45C1639.54 668.7 1644.53 668.41 1648.3 665.69L1659.14 657.88L1652.31 667.5C1649.42 671.57 1648.82 676.85 1650.74 681.47L1656.45 695.2L1649.73 687.86C1645.55 683.3 1638.59 682.67 1633.66 686.4L1622.05 695.2H1622.04Z"
        fill="#F37D2C" />
      <path id="Vector_5"
        d="M1484.47 775.12L1491.6 784.71C1494.65 788.81 1500.14 790.22 1504.78 788.09L1514.97 783.43L1504.22 793.02C1501.65 795.32 1501.23 799.19 1503.27 801.97C1506.45 806.32 1510.94 812.2 1513.04 813.83C1513.04 813.83 1505.82 810.66 1500.02 805.65C1496.93 802.98 1492.58 802.33 1488.82 803.91L1477.75 808.56L1487.16 798.58C1488.83 796.81 1489.41 794.27 1488.67 791.95C1487.42 788.06 1485.55 781.62 1484.48 775.12H1484.47Z"
        fill="#F37D2C" />
      <path id="Vector_6"
        d="M96.4798 419.94L102.58 435.64C104.09 439.52 100.64 443.49 96.5898 442.56L81.7998 439.13L101.67 448.76C106.67 451.18 110.99 454.81 114.25 459.3L125.36 474.63L121.36 465.31C119.59 461.19 123.54 456.92 127.79 458.37L148.83 465.54L122.12 451.29C117.19 448.66 112.99 444.84 109.9 440.18L96.4798 419.93V419.94Z"
        fill="#F37D2C" />
      <path id="Vector_7"
        d="M451.08 760.06L468.24 809.38C469.49 812.98 465.71 816.26 462.33 814.52L413.98 789.7L444.38 812.49C465.36 828.22 481.37 849.67 490.47 874.27L501.68 904.55L489.96 849.12C489.23 845.68 492.78 842.91 495.94 844.45C508.04 850.37 530.94 861.25 540.07 863.52L519.68 849.9C497.17 834.86 478.88 814.32 466.53 790.22L451.08 760.06Z"
        fill="#F37D2C" />
    </svg>
  </div>

  <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-lmcbnwuj>

    <p class="eyebrow" data-astro-cid-lmcbnwuj>
      <?php echo esc_html($hero_eyebrow); ?>
    </p>

    <div class="underline mx-auto" aria-hidden="true" data-astro-cid-lmcbnwuj></div>

    <h1 data-astro-cid-lmcbnwuj>

      <span class="line reveal-line" data-astro-cid-lmcbnwuj>
        <span class="reveal-line-box" data-astro-cid-lmcbnwuj>
          <span class="reveal-line-text" data-astro-cid-lmcbnwuj>
            <?php echo esc_html($hero_title_line_1); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
            data-astro-cid-lmcbnwuj="true">
            <path
              d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
              fill="#1E1E3C" />
          </svg>
        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-lmcbnwuj>
        <span class="reveal-line-box" data-astro-cid-lmcbnwuj>
          <span class="reveal-line-text accent" data-astro-cid-lmcbnwuj>
            <?php echo esc_html($hero_title_line_2); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
            data-astro-cid-lmcbnwuj="true">
            <path
              d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
              fill="#1E1E3C" />
          </svg>
        </span>
      </span>

      <span class="line reveal-line" data-astro-cid-lmcbnwuj>
        <span class="reveal-line-box" data-astro-cid-lmcbnwuj>
          <span class="reveal-line-text" data-astro-cid-lmcbnwuj>
            <?php echo esc_html($hero_title_line_3); ?>
          </span>

          <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
            data-astro-cid-lmcbnwuj="true">
            <path
              d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
              fill="#1E1E3C" />
          </svg>
        </span>
      </span>

    </h1>

    <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-lmcbnwuj>
      <?php echo wp_kses_post($hero_description_1); ?>
    </p>

    <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-lmcbnwuj>
      <?php echo wp_kses_post($hero_description_2); ?>
    </p>

    <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section"
      data-astro-cid-lmcbnwuj>
      <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-lmcbnwuj="true">
        <path id="Vector"
          d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z"
          fill="#1E1E3C" />
      </svg>
    </button>

  </div>
</section>

<!-- Open Roles Section -->
<section class="openings" data-astro-cid-sfqplgyv>
  <div class="container" data-astro-cid-sfqplgyv>

    <div class="container heading reveal text-center" data-astro-cid-sfqplgyv>

      <div class="section-heading" data-astro-cid-ypavld2q>

        <p class="eyebrow" data-astro-cid-ypavld2q>
          <?php echo esc_html($open_roles_eyebrow); ?>
        </p>

        <h2 data-astro-cid-ypavld2q>

          <span class="reveal-line" data-astro-cid-sfqplgyv>
            <span class="reveal-line-box" data-astro-cid-sfqplgyv>

              <span class="reveal-line-text" data-astro-cid-sfqplgyv>
                <?php echo esc_html($open_roles_title); ?>
              </span>

              <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                data-astro-cid-sfqplgyv="true">
                <path
                  d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                  fill="#1E1E3C" />
              </svg>

            </span>
          </span>

        </h2>

      </div>

      <p class="intro" data-astro-cid-sfqplgyv>
        <?php echo wp_kses_post($open_roles_intro); ?>
      </p>

    </div>

    <div class="role-list" data-astro-cid-sfqplgyv>

      <?php foreach ($roles as $role) : ?>

        <?php
        $role_title = !empty($role['title']) ? $role['title'] : '';
        $role_meta = !empty($role['meta']) ? $role['meta'] : '';
        $about_title = !empty($role['about_title']) ? $role['about_title'] : 'About the role';
        $about_description = !empty($role['about_description']) ? $role['about_description'] : '';
        $ownership_title = !empty($role['ownership_title']) ? $role['ownership_title'] : 'What you\'ll own';

        $responsibilities = !empty($role['responsibilities']) && is_array($role['responsibilities'])
            ? $role['responsibilities']
            : array();

        $actions = !empty($role['actions']) && is_array($role['actions'])
            ? $role['actions']
            : array();
        ?>

        <details class="role" data-astro-cid-sfqplgyv>

          <summary data-astro-cid-sfqplgyv>

            <div data-astro-cid-sfqplgyv>

              <p class="role-title" data-astro-cid-sfqplgyv>
                <?php echo wp_kses_post($role_title); ?>
              </p>

              <p class="role-meta" data-astro-cid-sfqplgyv>
                <?php echo wp_kses_post($role_meta); ?>
              </p>

            </div>

            <span class="chev" aria-hidden="true" data-astro-cid-sfqplgyv>
              <svg viewBox="0 0 10 6" fill="none" data-astro-cid-sfqplgyv>
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" data-astro-cid-sfqplgyv></path>
              </svg>
            </span>

          </summary>

          <div class="role-body" data-astro-cid-sfqplgyv>

            <h3 data-astro-cid-sfqplgyv>
              <?php echo esc_html($about_title); ?>
            </h3>

            <p data-astro-cid-sfqplgyv>
              <?php echo wp_kses_post($about_description); ?>
            </p>

            <h3 data-astro-cid-sfqplgyv>
              <?php echo esc_html($ownership_title); ?>
            </h3>

            <?php if ($responsibilities) : ?>

              <ul data-astro-cid-sfqplgyv>

                <?php foreach ($responsibilities as $responsibility) : ?>

                  <?php
                  $responsibility_text = is_array($responsibility)
                      ? (!empty($responsibility['text']) ? $responsibility['text'] : '')
                      : $responsibility;
                  ?>

                  <?php if ($responsibility_text) : ?>

                    <li data-astro-cid-sfqplgyv>
                      <?php echo wp_kses_post($responsibility_text); ?>
                    </li>

                  <?php endif; ?>

                <?php endforeach; ?>

              </ul>

            <?php endif; ?>

            <div class="actions d-flex flex-wrap align-items-center" data-astro-cid-sfqplgyv>

              <?php foreach ($actions as $action) : ?>

                <?php
                $action_label = !empty($action['label']) ? $action['label'] : '';

                $action_url = !empty($action['url']) ? $action['url'] : '';

                /*
                 * Support ACF Link/File fields returning arrays.
                 */
                if (is_array($action_url)) {
                    $action_url = !empty($action_url['url'])
                        ? $action_url['url']
                        : '';
                }

                if (!empty($action['file'])) {
                    if (is_array($action['file']) && !empty($action['file']['url'])) {
                        $action_url = $action['file']['url'];
                    } elseif (is_string($action['file'])) {
                        $action_url = $action['file'];
                    }
                }

                $action_type = !empty($action['type'])
                    ? $action['type']
                    : 'ghost';

                $action_aria_label = !empty($action['aria_label'])
                    ? $action['aria_label']
                    : '';

                $action_target = !empty($action['target'])
                    ? $action['target']
                    : '_blank';
                ?>

                <?php if ($action_url && $action_label) : ?>

                  <a
                    href="<?php echo esc_url($action_url); ?>"
                    target="<?php echo esc_attr($action_target); ?>"
                    rel="noopener noreferrer"
                    <?php if ($action_aria_label) : ?>
                      aria-label="<?php echo esc_attr($action_aria_label); ?>"
                    <?php endif; ?>
                    data-astro-cid-b7tmfpbf="true"
                    class="pill <?php echo esc_attr($action_type); ?>">

                    <span class="pill-label" data-astro-cid-b7tmfpbf>
                      <?php echo esc_html($action_label); ?>
                    </span>

                    <span class="pill-arrow" aria-hidden="true" data-astro-cid-b7tmfpbf>

                      <svg viewBox="0 0 44.9099 24.3499" fill="none" data-astro-cid-b7tmfpbf>

                        <path
                          d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z"
                          fill="currentColor"
                          data-astro-cid-b7tmfpbf>
                        </path>

                        <path
                          d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z"
                          fill="currentColor"
                          data-astro-cid-b7tmfpbf>
                        </path>

                      </svg>

                    </span>

                  </a>

                <?php endif; ?>

              <?php endforeach; ?>

            </div>

          </div>

        </details>

      <?php endforeach; ?>

    </div>

  </div>
</section>

<!-- Why Work Here Section -->
<section class="how-it-works" data-astro-cid-qa4re6mg>

  <div class="container heading reveal text-center" data-astro-cid-qa4re6mg>

    <div class="section-heading" data-astro-cid-ypavld2q>

      <p class="eyebrow" data-astro-cid-ypavld2q>
      </p>

      <h2 data-astro-cid-ypavld2q>

        <span class="reveal-line" data-astro-cid-qa4re6mg>
          <span class="reveal-line-box" data-astro-cid-qa4re6mg>

            <span class="reveal-line-text" data-astro-cid-qa4re6mg>
              <?php echo esc_html($why_title); ?>
            </span>

            <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
              data-astro-cid-qa4re6mg="true">
              <path
                d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                fill="#1E1E3C" />
            </svg>

          </span>
        </span>

      </h2>

    </div>

  </div>

  <div class="container" data-astro-cid-qa4re6mg>

    <div class="steps-row" data-astro-cid-qa4re6mg>

      <?php foreach ($why_steps as $index => $step) : ?>

        <?php
        $step_class = !empty($step['class'])
            ? $step['class']
            : 'step--o' . ($index + 1);

        $step_title = !empty($step['title'])
            ? $step['title']
            : '';

        $step_body = !empty($step['body'])
            ? $step['body']
            : '';
        ?>

        <article class="step <?php echo esc_attr($step_class); ?>" data-astro-cid-qa4re6mg>

          <div class="step-foot" data-astro-cid-qa4re6mg>

            <h3 class="step-title" data-astro-cid-qa4re6mg>
              <?php echo esc_html($step_title); ?>
            </h3>

            <p class="step-body" data-astro-cid-qa4re6mg>
              <?php echo wp_kses_post($step_body); ?>
            </p>

          </div>

        </article>

      <?php endforeach; ?>

    </div>

  </div>

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
            for (let t of e)
              t.target.classList.toggle(`is-active`, t.isIntersecting)
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

  s(),
    window.addEventListener(`resize`, s);
</script>

<?php get_footer(); ?>