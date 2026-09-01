<?php
/**
 * Template Name: Partnership Opportunity Page
 */
get_header();
/*
|--------------------------------------------------------------------------
| ACF Helper
|--------------------------------------------------------------------------
| Safely returns an ACF value.
| Prevents arrays from being passed into functions expecting strings.
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'gms_agent_field' ) ) {
    function gms_agent_field( $field_name, $default = '', $post_id = false ) {
        /*
         * If ACF is unavailable, use the default.
         */
        if ( ! function_exists( 'get_field' ) ) {
            return $default;
        }
        $value = get_field( $field_name, $post_id );
        /*
         * Empty value = default content.
         */
        if ( $value === null || $value === false || $value === '' ) {
            return $default;
        }
        /*
         * Prevent arrays from reaching string functions.
         */
        if ( is_array( $value ) ) {
            if ( isset( $value['value'] ) && is_string( $value['value'] ) ) {
                return $value['value'];
            }
            if ( isset( $value['label'] ) && is_string( $value['label'] ) ) {
                return $value['label'];
            }
            if ( isset( $value['title'] ) && is_string( $value['title'] ) ) {
                return $value['title'];
            }
            if ( isset( $value['text'] ) && is_string( $value['text'] ) ) {
                return $value['text'];
            }
            return $default;
        }
        return $value;
    }
}
/*
|--------------------------------------------------------------------------
| HERO SECTION
|--------------------------------------------------------------------------
*/
$hero_heading = gms_agent_field(
    'agent_hero_heading',
    'Agent Program'
);
$hero_subtitle = gms_agent_field(
    'agent_hero_subtitle',
    'Build a rewarding, lucrative career in credit card processing with 50/50 residual splits, comprehensive agent support, and outstanding bonus options.'
);
/*
|--------------------------------------------------------------------------
| INTRO SECTION
|--------------------------------------------------------------------------
*/
$intro_section_label = gms_agent_field(
    'agent_intro_section_label',
    'Grow Your Payments Business'
);
$intro_heading = gms_agent_field(
    'agent_intro_heading',
    'ISO Merchant Services Agent Program'
);
$intro_lead = gms_agent_field(
    'agent_intro_lead',
    'Being an agent of Global Merchant Services offers many opportunities and benefits, especially for those who want to develop a rewarding career in the credit card processing industry. Here are some key benefits:'
);
$intro_description = gms_agent_field(
    'agent_intro_description',
    'Our agent program is tailored to give you maximum independence while providing full institutional backing, transparent residual tracking, and high-margin product offerings. Whether you are an experienced sales professional or expanding your merchant service portfolio, Global Merchant Services equips you with everything needed for long-term growth.'
);
$intro_primary_button_text = gms_agent_field(
    'agent_intro_primary_button_text',
    'Apply to Become an Agent'
);
$intro_primary_button_url = gms_agent_field(
    'agent_intro_primary_button_url',
    '#apply-now'
);
$intro_secondary_button_text = gms_agent_field(
    'agent_intro_secondary_button_text',
    'Call 516 422 2002'
);
$intro_phone = gms_agent_field(
    'agent_intro_phone',
    '5164222002'
);
/*
|--------------------------------------------------------------------------
| WHY PARTNER WITH US
|--------------------------------------------------------------------------
*/
$why_partner_heading = gms_agent_field(
    'agent_why_partner_heading',
    'Why Partner With Us?'
);
$why_partner_icon = gms_agent_field(
    'agent_why_partner_icon',
    'bi-shield-check'
);
$why_partner_items = get_field( 'agent_why_partner_items' );
if ( ! is_array( $why_partner_items ) || empty( $why_partner_items ) ) {
    $why_partner_items = array(
        array(
            'icon'        => 'bi-pie-chart-fill',
            'title'       => '50 / 50 Balance Split',
            'description' => 'Reliable ongoing residual income',
            'icon_class'  => 'text-gms-green',
            'bg_class'    => 'bg-success',
        ),
        array(
            'icon'        => 'bi-trophy-fill',
            'title'       => 'Bonus Rewards',
            'description' => 'Growth incentives for new accounts',
            'icon_class'  => 'text-primary',
            'bg_class'    => 'bg-primary',
        ),
        array(
            'icon'        => 'bi-headset',
            'title'       => 'Detailed Support',
            'description' => 'Dedicated managers &amp; sales training',
            'icon_class'  => 'text-warning',
            'bg_class'    => 'bg-warning',
        ),
    );
}
/*
|--------------------------------------------------------------------------
| PROGRAM FEATURES
|--------------------------------------------------------------------------
*/
$features_section_label = gms_agent_field(
    'agent_features_section_label',
    'Program Features'
);
$features_heading = gms_agent_field(
    'agent_features_heading',
    'Core Benefits of Becoming an Agent'
);
$features_description = gms_agent_field(
    'agent_features_description',
    'Empowering representatives with generous profit shares, responsive support networks, and continuous educational resources.'
);
$features = get_field( 'agent_program_features' );
if ( ! is_array( $features ) || empty( $features ) ) {
    $features = array(
        array(
            'icon'        => 'bi-cash-coin',
            'title'       => '50/50 Monthly Balance Split',
            'description' => 'As a Global Merchant Service Representative, you will receive 50/50 of your monthly balance. As a result, your active accounts will continue to earn interest, providing you with a reliable source of ongoing income. This is a huge advantage because it provides a fixed payment each time the customer completes a transaction, rather than a one-time payment to acquire a new customer.',
        ),
        array(
            'icon'        => 'bi-gift-fill',
            'title'       => 'Bonus Options &amp; Rewards',
            'description' => 'Global Business Services offers bonus options as well as outstanding payments. As you continue to open new accounts, you can receive more rewards, which can significantly increase your overall income. This encourages you to expand your customer base.',
        ),
        array(
            'icon'        => 'bi-headset',
            'title'       => 'Detailed Support',
            'description' => 'Detailed support: As an agent, you are not alone. Global Merchant Services provides comprehensive support to support your success. This may include customer service support, marketing materials, dedicated account managers, and sales training for potential issues or concerns.',
        ),
        array(
            'icon'        => 'bi-calendar-check-fill',
            'title'       => 'Flexible Schedule',
            'description' => 'Flexible schedule: The ability to create your own schedule is often a benefit of working as an agent. You can decide where and when you work, improving your work-life balance.',
        ),
        array(
            'icon'        => 'bi-lightbulb-fill',
            'title'       => 'Industry Knowledge',
            'description' => 'Industry Knowledge: Working with Global Merchant Services provides a great opportunity to learn more about credit card processing. You will learn about the latest trends, laws and technologies that will help you better serve your customers and establish your authority in the industry.',
        ),
        array(
            'icon'        => 'bi-graph-up-arrow',
            'title'       => 'Possible Developments',
            'description' => 'Possible Developments: The field of credit card transactions is a very broad field. It is expected that more companies will realize the need for more efficient payment solutions and therefore, as agent productivity increases, the need for business services will also increase.',
        ),
    );
}
/*
|--------------------------------------------------------------------------
| SUCCESS CALLOUT
|--------------------------------------------------------------------------
*/
$success_icon = gms_agent_field(
    'agent_success_icon',
    'bi-award-fill'
);
$success_heading = gms_agent_field(
    'agent_success_heading',
    'Keys to Your Success'
);
$success_description = gms_agent_field(
    'agent_success_description',
    'Remember that, as with any career, your ability to market and market business services effectively, as well as your commitment to providing first-class customer service, will likely be key factors in your level of success as an employer.'
);
/*
|--------------------------------------------------------------------------
| AGENT ENROLLMENT
|--------------------------------------------------------------------------
*/
$enrollment_section_label = gms_agent_field(
    'agent_enrollment_section_label',
    'Agent Enrollment'
);
$enrollment_heading = gms_agent_field(
    'agent_enrollment_heading',
    'Join Our Agent Network'
);
$enrollment_description = gms_agent_field(
    'agent_enrollment_description',
    'Take charge of your career in payment processing. Fill out the application form or reach out directly to discuss partnership opportunities.'
);
/*
|--------------------------------------------------------------------------
| ENROLLMENT CONTACT INFORMATION
|--------------------------------------------------------------------------
*/
$enrollment_phone_label = gms_agent_field(
    'agent_enrollment_phone_label',
    'Phone Support'
);
$enrollment_phone = gms_agent_field(
    'agent_enrollment_phone',
    '516 422 2002'
);
$enrollment_phone_link = gms_agent_field(
    'agent_enrollment_phone_link',
    '5164222002'
);
$enrollment_email_label = gms_agent_field(
    'agent_enrollment_email_label',
    'Email Inquiry'
);
$enrollment_email = gms_agent_field(
    'agent_enrollment_email',
    'support@globalmerchantservicesny.com'
);
$enrollment_email_link = gms_agent_field(
    'agent_enrollment_email_link',
    'support@globalmerchantservicesny.com'
);
$enrollment_address_label = gms_agent_field(
    'agent_enrollment_address_label',
    'Office Location'
);
$enrollment_address = gms_agent_field(
    'agent_enrollment_address',
    '324 Jericho Tpke, Syosset, NY 11791'
);
/*
|--------------------------------------------------------------------------
| APPLICATION FORM
|--------------------------------------------------------------------------
*/
$form_heading = gms_agent_field(
    'agent_form_heading',
    'Agent Application Form'
);
?>
<!-- Page Hero -->
<section class="page-hero">
  <div class="container text-center">
    <?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-2' ); ?>
    <h1>
      <?php echo wp_kses_post( $hero_heading ); ?>
    </h1>
    <p class="subtitle mb-0">
      <?php echo wp_kses_post( $hero_subtitle ); ?>
    </p>
  </div>
</section>
<!-- Intro Section -->
<section class="py-5 content-section">
  <div class="container">
    <div class="row align-items-center g-4 mb-5">
      <div class="col-lg-7">
        <span class="section-label">
          <?php echo wp_kses_post( $intro_section_label ); ?>
        </span>
        <h2 class="mt-1 section-title text-gms-navy">
          <?php echo wp_kses_post( $intro_heading ); ?>
        </h2>
        <p class="lead text-secondary fs-5">
          <?php echo wp_kses_post( $intro_lead ); ?>
        </p>
        <p class="text-muted">
          <?php echo wp_kses_post( $intro_description ); ?>
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="<?php echo esc_url( $intro_primary_button_url ); ?>" class="btn btn-gms btn-lg">
            <?php echo esc_html( $intro_primary_button_text ); ?>
          </a>
          <a href="tel:<?php echo esc_attr( $intro_phone ); ?>" class="btn btn-outline-dark btn-lg">
            <i class="bi bi-telephone-fill me-2"></i>
            <?php echo esc_html( $intro_secondary_button_text ); ?>
          </a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="card border-0 shadow-sm p-4 bg-gms-light rounded-4">
          <h4 class="h5 fw-bold text-gms-navy mb-4">
            <i class="bi <?php echo esc_attr( $why_partner_icon ); ?> text-gms-green me-2"></i>
            <?php echo wp_kses_post( $why_partner_heading ); ?>
          </h4>
          <?php foreach ( $why_partner_items as $item ) : ?>
          <?php
                        $item_icon = ! empty( $item['icon'] )
                            ? $item['icon']
                            : 'bi-check-circle-fill';
                        $item_title = ! empty( $item['title'] )
                            ? $item['title']
                            : '';
                        $item_description = ! empty( $item['description'] )
                            ? $item['description']
                            : '';
                        $item_icon_class = ! empty( $item['icon_class'] )
                            ? $item['icon_class']
                            : 'text-gms-green';
                        $item_bg_class = ! empty( $item['bg_class'] )
                            ? $item['bg_class']
                            : 'bg-success';
                        ?>
          <div class="d-flex align-items-center mb-3 p-3 bg-white rounded-3 shadow-sm gap-3">
            <div class="rounded-circle <?php echo esc_attr( $item_bg_class ); ?> p-3 me-3 <?php echo esc_attr( $item_icon_class ); ?> d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
              <i class="bi <?php echo esc_attr( $item_icon ); ?> fs-4"></i>
            </div>
            <div>
              <div class="fw-bold text-gms-navy">
                <?php echo wp_kses_post( $item_title ); ?>
              </div>
              <div class="small text-muted">
                <?php echo wp_kses_post( $item_description ); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!-- Key Benefits Section -->
    <div class="text-center mb-5">
      <span class="section-label">
        <?php echo wp_kses_post( $features_section_label ); ?>
      </span>
      <h2 class="section-title mt-1">
        <?php echo wp_kses_post( $features_heading ); ?>
      </h2>
      <p class="text-muted mx-auto" style="max-width: 680px;">
        <?php echo wp_kses_post( $features_description ); ?>
      </p>
    </div>
    <div class="row g-4">
      <?php foreach ( $features as $feature ) : ?>
      <?php
                $feature_icon = ! empty( $feature['icon'] )
                    ? $feature['icon']
                    : 'bi-check-circle-fill';
                $feature_title = ! empty( $feature['title'] )
                    ? $feature['title']
                    : '';
                $feature_description = ! empty( $feature['description'] )
                    ? $feature['description']
                    : '';
                ?>
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100 p-4 border rounded-3 bg-white">
          <div class="icon-wrap mb-3 text-gms-green bg-gms-light rounded-3 p-3 d-inline-flex align-items-center justify-content-center" style="width: 56px; height: 56px;">
            <i class="bi <?php echo esc_attr( $feature_icon ); ?> fs-3"></i>
          </div>
          <h3 class="h5 fw-bold text-gms-navy mb-3">
            <?php echo wp_kses_post( $feature_title ); ?>
          </h3>
          <p class="text-secondary mb-0">
            <?php echo wp_kses_post( $feature_description ); ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Success Callout Box -->
    <div class="mt-5 p-4 p-md-5 rounded-4 bg-gms-navy text-white shadow">
      <div class="row align-items-center g-4">
        <div class="col-lg-2 text-center text-lg-start">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-white bg-opacity-10 text-gms-gold p-3" style="width: 76px; height: 76px;">
            <i class="bi <?php echo esc_attr( $success_icon ); ?> fs-1"></i>
          </div>
        </div>
        <div class="col-lg-10">
          <h3 class="h4 text-white mb-2 fw-bold">
            <?php echo wp_kses_post( $success_heading ); ?>
          </h3>
          <p class="mb-0 text-white-50 lead fs-6" style="line-height: 1.7;">
            <?php echo wp_kses_post( $success_description ); ?>
          </p>
        </div>
      </div>
    </div>
    <!-- Agent Application Form & Contact Section -->
    <div class="row mt-5 pt-4 g-4 align-items-stretch" id="apply-now">
      <div class="col-lg-5">
        <div class="contact-info-card p-4 p-md-5 rounded-4 bg-gms-light h-100">
          <span class="section-label">
            <?php echo wp_kses_post( $enrollment_section_label ); ?>
          </span>
          <h3 class="section-title text-gms-navy mt-1 mb-3">
            <?php echo wp_kses_post( $enrollment_heading ); ?>
          </h3>
          <p class="text-secondary mb-4">
            <?php echo wp_kses_post( $enrollment_description ); ?>
          </p>
          <div class="d-flex align-items-start mb-4">
            <div class="me-3 text-gms-green fs-4">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div>
              <div class="fw-bold text-gms-navy">
                <?php echo esc_html( $enrollment_phone_label ); ?>
              </div>
              <a href="tel:<?php echo esc_attr( $enrollment_phone_link ); ?>" class="text-decoration-none text-secondary">
                <?php echo esc_html( $enrollment_phone ); ?>
              </a>
            </div>
          </div>
          <div class="d-flex align-items-start mb-4">
            <div class="me-3 text-gms-green fs-4">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <div>
              <div class="fw-bold text-gms-navy">
                <?php echo esc_html( $enrollment_email_label ); ?>
              </div>
              <a href="mailto:<?php echo esc_attr( $enrollment_email_link ); ?>" class="text-decoration-none text-secondary">
                <?php echo esc_html( $enrollment_email ); ?>
              </a>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <div class="me-3 text-gms-green fs-4">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <div class="fw-bold text-gms-navy">
                <?php echo esc_html( $enrollment_address_label ); ?>
              </div>
              <span class="text-secondary">
                <?php echo esc_html( $enrollment_address ); ?>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="contact-form-panel p-4 p-md-5 rounded-4 shadow-sm border bg-white h-100">
          <h3 class="h4 fw-bold text-gms-navy mb-4">
            <?php echo wp_kses_post( $form_heading ); ?>
          </h3>
          <?php echo do_shortcode('[contact-form-7 id="cc8fc64" title="Partnership Application Form"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>