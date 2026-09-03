<?php
/**
 * Template Name: Procurements Page
 */

get_header();

/*
 * ============================================================
 * HERO SECTION
 * ============================================================
 */

$hero_eyebrow = get_field('hero_eyebrow') ?: 'PROCUREMENTS';

$hero_description_1 = get_field('hero_description_1') ?: 'Open tenders, RFPs and vendor empanelment opportunities at MC²+.';

$hero_description_2 = get_field('hero_description_2') ?: 'MC²+ periodically invites bids from qualified vendors, service providers and agencies to support our infrastructure, programme delivery and operations. All tenders are published here along with the relevant documents and submission process. MC²+ reserves the right to accept or reject any or all bids without assigning reasons.';

/*
 * ============================================================
 * TENDERS SECTION
 * ============================================================
 */

$tenders_section_eyebrow = get_field('tenders_section_eyebrow') ?: 'OPEN TENDERS';

$tenders_section_title = get_field('tenders_section_title') ?: 'Current tenders';

$tenders_section_intro = get_field('tenders_section_intro') ?: 'Click a tender to submit a bid or download the full RFP document.';

/*
 * ============================================================
 * DEFAULT TENDER FALLBACK
 * ============================================================
 *
 * Existing tender content is retained here as fallback.
 * If ACF has no tender entries, this original tender is shown.
 */

$default_tenders = array(
    array(
        'title' => 'RFP for Selection of a System Integrator for Design, Development, Implementation and Operation of the Integrated Startup Platform for Asset, Resource & Knowledge Exchange',
        'meta' => 'RFP · New Delhi · Issued by MC²+ (MC2 Foundation)',
        'prebid_enabled' => 1,
        'prebid_text' => 'Pre-Bid Meeting: 4:00 PM, 25 August 2026',
        'documents' => array(
            array(
                'type' => 'submit',
                'label' => 'Submit Bid',
                'url' => 'https://zfrmz.in/xPSRohUBq9q2fXMFqrxu',
                'target' => '_blank',
                'class' => 'filled',
                'aria_label' => ''
            ),
            array(
                'type' => 'pdf',
                'label' => 'Download full RFP (PDF)',
                'url' => get_template_directory_uri() . '/assets/procurements/MC2P-RFP-System-Integrator.pdf',
                'target' => '_blank',
                'class' => 'ghost',
                'aria_label' => 'Download full RFP PDF for RFP for Selection of a System Integrator for Design, Development, Implementation and Operation of the Integrated Startup Platform for Asset, Resource & Knowledge Exchange'
            ),
            array(
                'type' => 'pdf',
                'label' => 'Download Pre-Bid Meeting Notice (PDF)',
                'url' => get_template_directory_uri() . '/assets/procurements/MC2P-IT-SI-2026-27-001-Notice-01.pdf',
                'target' => '_blank',
                'class' => 'ghost',
                'aria_label' => 'Download Pre-Bid Meeting Notice (PDF)'
            ),
            array(
                'type' => 'pdf',
                'label' => 'CORRIGENDUM No. 1, dated 26.08.2026',
                'url' => get_template_directory_uri() . '/assets/procurements/MC2P-IT-SI-2026-27-001-Corrigendum-01.pdf',
                'target' => '_blank',
                'class' => 'ghost',
                'aria_label' => 'Download Corrigendum (PDF)'
            )
        )
    )
);

$tenders = get_field('tenders');

if (!$tenders || !is_array($tenders)) {
    $tenders = $default_tenders;
}
?>

<!-- Hero Section -->
<section class="hero position-relative overflow-hidden" data-astro-cid-p5233ohg>
  <div class="orbit position-absolute top-0 start-0 w-100" aria-hidden="true" data-astro-cid-p5233ohg>
    <svg width="1920" height="1040" viewBox="0 0 1920 1040" fill="none" class="curves"
      data-astro-cid-p5233ohg="true">
      <path id="Vector" d="M1920 0C1920 530.19 1490.19 960 960 960C429.81 960 -0.000244141 530.19 -0.000244141 0"
        stroke="#F37D2C" stroke-miterlimit="10" />
      <path id="Vector_2"
        d="M1667.63 739.96C1667.63 792.4 1625.12 834.9 1572.69 834.9C1520.25 834.9 1477.75 792.39 1477.75 739.96C1477.75 687.52 1520.26 645.02 1572.69 645.02C1625.13 645.02 1667.63 687.53 1667.63 739.96Z"
        stroke="#F37D2C" stroke-miterlimit="10" />
      <path id="Vector_3" d="M-19.1301 414.94C284.03 461.59 516.18 723.59 516.18 1039.81" stroke="#F37D2C"
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

  <div class="hero-inner reveal text-center mx-auto position-relative" data-astro-cid-p5233ohg>

    <p class="eyebrow" data-astro-cid-p5233ohg>
      <?php echo esc_html($hero_eyebrow); ?>
    </p>

    <div class="underline mx-auto" aria-hidden="true" data-astro-cid-p5233ohg></div>

    <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-p5233ohg>
      <?php echo wp_kses_post($hero_description_1); ?>
    </p>

    <p class="lede reveal-rise reveal-rise--after-3-lines" data-astro-cid-p5233ohg>
      <?php echo wp_kses_post($hero_description_2); ?>
    </p>

    <button type="button" class="scroll border-0 bg-transparent" aria-label="Scroll to next section"
      data-astro-cid-p5233ohg>
      <svg width="36" height="21" viewBox="0 0 36 21" fill="none" aria-hidden="true" data-astro-cid-p5233ohg="true">
        <path id="Vector"
          d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z"
          fill="#1E1E3C" />
      </svg>
    </button>

  </div>
</section>

<!-- Tenders Section -->
<section class="tenders" data-astro-cid-ohdyr4rw>
  <div class="container" data-astro-cid-ohdyr4rw>

    <div class="container heading reveal text-center" data-astro-cid-ohdyr4rw>
      <div class="section-heading" data-astro-cid-ypavld2q>

        <p class="eyebrow" data-astro-cid-ypavld2q>
          <?php echo esc_html($tenders_section_eyebrow); ?>
        </p>

        <h2 data-astro-cid-ypavld2q>
          <span class="reveal-line" data-astro-cid-ohdyr4rw>
            <span class="reveal-line-box" data-astro-cid-ohdyr4rw>
              <span class="reveal-line-text" data-astro-cid-ohdyr4rw>
                <?php echo esc_html($tenders_section_title); ?>
              </span>

              <svg width="138" height="146" viewBox="0 0 138 146" fill="none" class="reveal-star" aria-hidden="true"
                data-astro-cid-ohdyr4rw="true">
                <path
                  d="M114.544 61.331 L137.512 60.621 L94.388 74.263 C82.894 77.898 74.078 87.197 71.053 98.887 L58.985 145.497 L59.086 119.387 C59.162 99.530 42.783 83.557 22.968 84.166 L0.000 84.876 L43.124 71.235 C54.618 67.599 63.434 58.300 66.459 46.610 L78.527 0.000 L78.427 26.110 C78.351 45.968 94.730 61.940 114.544 61.331 Z"
                  fill="#1E1E3C" />
              </svg>
            </span>
          </span>
        </h2>

      </div>

      <p class="intro" data-astro-cid-ohdyr4rw>
        <?php echo wp_kses_post($tenders_section_intro); ?>
      </p>
    </div>

    <div class="tender-list" data-astro-cid-ohdyr4rw>

      <?php foreach ($tenders as $tender) : ?>

        <?php
        $tender_title = !empty($tender['title'])
            ? $tender['title']
            : '';

        $tender_meta = !empty($tender['meta'])
            ? $tender['meta']
            : '';

        $prebid_enabled = !empty($tender['prebid_enabled']);

        $prebid_text = !empty($tender['prebid_text'])
            ? $tender['prebid_text']
            : '';

        $documents = !empty($tender['documents']) && is_array($tender['documents'])
            ? $tender['documents']
            : array();
        ?>

        <details class="tender" data-astro-cid-ohdyr4rw>

          <summary data-astro-cid-ohdyr4rw>
            <div data-astro-cid-ohdyr4rw>

              <p class="tender-title" data-astro-cid-ohdyr4rw>
                <?php echo wp_kses_post($tender_title); ?>
              </p>

              <p class="tender-meta" data-astro-cid-ohdyr4rw>
                <?php echo wp_kses_post($tender_meta); ?>
              </p>

            </div>

            <span class="chev" aria-hidden="true" data-astro-cid-ohdyr4rw>
              <svg viewBox="0 0 10 6" fill="none" data-astro-cid-ohdyr4rw>
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" data-astro-cid-ohdyr4rw></path>
              </svg>
            </span>
          </summary>

          <div class="tender-body" data-astro-cid-ohdyr4rw>

            <?php if ($prebid_enabled && $prebid_text) : ?>
              <p class="prebid-badge" data-astro-cid-ohdyr4rw>
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" data-astro-cid-ohdyr4rw>
                  <circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.3" data-astro-cid-ohdyr4rw>
                  </circle>
                  <path d="M8 4.5V8l2.5 1.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                    stroke-linejoin="round" data-astro-cid-ohdyr4rw></path>
                </svg>

                <?php echo wp_kses_post($prebid_text); ?>
              </p>
            <?php endif; ?>

            <div class="actions d-flex flex-wrap align-items-center" data-astro-cid-ohdyr4rw>
<?php foreach ($documents as $document) : ?>

    <?php
    $document_label = !empty($document['label'])
        ? $document['label']
        : '';

    $document_class = !empty($document['class'])
        ? $document['class']
        : 'ghost';

    $document_target = !empty($document['target'])
        ? $document['target']
        : '_blank';

    $document_aria_label = !empty($document['aria_label'])
        ? $document['aria_label']
        : '';

    $document_url = '';

    /*
     * ------------------------------------------------------------
     * 1. External URL
     * ------------------------------------------------------------
     */
    if (!empty($document['url'])) {

        $document_url = $document['url'];

        /*
         * In case the URL field itself returns an array.
         */
        if (is_array($document_url)) {
            $document_url = !empty($document_url['url'])
                ? $document_url['url']
                : '';
        }
    }

    /*
     * ------------------------------------------------------------
     * 2. ACF File field
     *
     * We don't depend on the PDF field name here.
     * Detect any ACF File field that returns an array
     * containing a URL.
     * ------------------------------------------------------------
     */
    if (empty($document_url)) {

        foreach ($document as $field_name => $field_value) {

            /*
             * ACF File field returning an array.
             */
            if (
                is_array($field_value) &&
                !empty($field_value['url'])
            ) {
                $document_url = $field_value['url'];
                break;
            }

            /*
             * ACF File field returning an attachment ID.
             */
            if (
                is_numeric($field_value) &&
                !empty($field_value)
            ) {
                $attachment_url = wp_get_attachment_url((int) $field_value);

                if ($attachment_url) {
                    $document_url = $attachment_url;
                    break;
                }
            }
        }
    }

    /*
     * ------------------------------------------------------------
     * 3. ACF File field returning a direct URL
     *
     * If the file field is configured to return URL.
     * ------------------------------------------------------------
     */
    if (empty($document_url)) {

        foreach ($document as $field_name => $field_value) {

            if (
                is_string($field_value) &&
                filter_var($field_value, FILTER_VALIDATE_URL)
            ) {
                $document_url = $field_value;
                break;
            }
        }
    }
    ?>

    <?php if ($document_url && $document_label) : ?>

        <a
            href="<?php echo esc_url($document_url); ?>"
            target="<?php echo esc_attr($document_target); ?>"
            rel="noopener noreferrer"
            <?php if ($document_aria_label) : ?>
                aria-label="<?php echo esc_attr($document_aria_label); ?>"
            <?php endif; ?>
            data-astro-cid-b7tmfpbf="true"
            class="pill <?php echo esc_attr($document_class); ?>"
        >

            <span class="pill-label" data-astro-cid-b7tmfpbf>
                <?php echo esc_html($document_label); ?>
            </span>

            <span
                class="pill-arrow"
                aria-hidden="true"
                data-astro-cid-b7tmfpbf
            >
                <svg
                    viewBox="0 0 44.9099 24.3499"
                    fill="none"
                    data-astro-cid-b7tmfpbf
                >
                    <path
                        d="M0 12.1699L41.62 9.84009V14.51L0 12.1699Z"
                        fill="currentColor"
                        data-astro-cid-b7tmfpbf
                    ></path>

                    <path
                        d="M29.4399 0C35.4099 3.05 40.2699 7.47992 44.9099 12.1699C40.2799 16.8799 35.4199 21.3099 29.4399 24.3499C32.1299 19.0599 35.88 14.68 39.97 10.53V13.8301C35.89 9.66008 32.1399 5.29001 29.4399 0.0100098V0Z"
                        fill="currentColor"
                        data-astro-cid-b7tmfpbf
                    ></path>
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

<?php get_footer(); ?>