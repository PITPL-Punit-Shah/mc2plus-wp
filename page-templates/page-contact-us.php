<?php
/**
 * Template Name: Contact Us Page
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

if ( ! function_exists( 'gms_contact_field' ) ) {

    function gms_contact_field( $field_name, $default = '', $post_id = false ) {

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
         * Prevent WordPress 6.7+ str_contains()
         * errors caused by arrays.
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

$hero_heading = gms_contact_field(
    'contact_hero_heading',
    'Contact Us'
);

$hero_subtitle = gms_contact_field(
    'contact_hero_subtitle',
    'Connect with our payment specialists for rate reviews, POS setup &amp; 24/7 support'
);


/*
|--------------------------------------------------------------------------
| CONTACT INFORMATION
|--------------------------------------------------------------------------
*/

/*
 * Phone Card
 */
$phone_badge = gms_contact_field(
    'contact_phone_badge',
    'Direct Sales &amp; Rates'
);

$phone_number = gms_contact_field(
    'contact_phone_number',
    '516 422 2002'
);

$phone_national_label = gms_contact_field(
    'contact_phone_national_label',
    'National:'
);

$phone_national_number = gms_contact_field(
    'contact_phone_national_number',
    '877-770-3322'
);

$phone_national_link = gms_contact_field(
    'contact_phone_national_link',
    '8777703322'
);

$phone_icon = gms_contact_field(
    'contact_phone_icon',
    'bi-telephone-outbound-fill'
);


/*
 * Headquarters Card
 */
$hq_badge = gms_contact_field(
    'contact_hq_badge',
    'NY Headquarters'
);

$hq_address = gms_contact_field(
    'contact_hq_address',
    '324 Jericho Tpke'
);

$hq_city = gms_contact_field(
    'contact_hq_city',
    'Syosset, NY 11791'
);

$hq_icon = gms_contact_field(
    'contact_hq_icon',
    'bi-geo-alt-fill'
);


/*
 * Support Card
 */
$support_badge = gms_contact_field(
    'contact_support_badge',
    '24/7 Technical Support'
);

$support_title = gms_contact_field(
    'contact_support_title',
    'Email Specialist'
);

$support_email = gms_contact_field(
    'contact_support_email',
    'support@globalmerchantservicesny.com'
);

$support_email_link = gms_contact_field(
    'contact_support_email_link',
    'support@globalmerchantservicesny.com'
);

$support_icon = gms_contact_field(
    'contact_support_icon',
    'bi-headset'
);


/*
|--------------------------------------------------------------------------
| CONTACT FORM SECTION
|--------------------------------------------------------------------------
*/

$form_section_label = gms_contact_field(
    'contact_form_section_label',
    'Get In Touch'
);

$form_heading = gms_contact_field(
    'contact_form_heading',
    'Speak With A Payment Expert'
);

$form_description = gms_contact_field(
    'contact_form_description',
    'Complete the form below to request a rate comparison, POS hardware demo, or account pre-qualification.'
);

$form_shortcode = gms_contact_field(
    'contact_form_shortcode',
    '[contact-form-7 id="5ef0f24" title="Contact Us"]'
);


/*
|--------------------------------------------------------------------------
| MERCHANT COMMITMENT SECTION
|--------------------------------------------------------------------------
*/

$commitment_badge = gms_contact_field(
    'contact_commitment_badge',
    'Merchant Commitment'
);

$commitment_heading = gms_contact_field(
    'contact_commitment_heading',
    'Why Merchants Trust Global Merchant Services'
);


/*
 * Advantage 1
 */
$commitment_1_icon = gms_contact_field(
    'contact_commitment_1_icon',
    'bi-lightning-charge-fill'
);

$commitment_1_title = gms_contact_field(
    'contact_commitment_1_title',
    'Same-Day Payouts:'
);

$commitment_1_description = gms_contact_field(
    'contact_commitment_1_description',
    'Get funded in as fast as 5 hours from batch settlement, 365 days a year.'
);


/*
 * Advantage 2
 */
$commitment_2_icon = gms_contact_field(
    'contact_commitment_2_icon',
    'bi-flag-fill'
);

$commitment_2_title = gms_contact_field(
    'contact_commitment_2_title',
    'US-Based Support:'
);

$commitment_2_description = gms_contact_field(
    'contact_commitment_2_description',
    'Dedicated account teams based right here in New York &amp; Michigan.'
);


/*
 * Advantage 3
 */
$commitment_3_icon = gms_contact_field(
    'contact_commitment_3_icon',
    'bi-patch-check-fill'
);

$commitment_3_title = gms_contact_field(
    'contact_commitment_3_title',
    'No-Fee Guarantee:'
);

$commitment_3_description = gms_contact_field(
    'contact_commitment_3_description',
    'Zero-cost terminal reprogramming with transparent wholesale rates.'
);


/*
|--------------------------------------------------------------------------
| IMMEDIATE QUESTIONS
|--------------------------------------------------------------------------
*/

$questions_label = gms_contact_field(
    'contact_questions_label',
    'Have immediate questions? Call us directly:'
);

$questions_phone = gms_contact_field(
    'contact_questions_phone',
    '516 422 2002'
);

$questions_phone_link = gms_contact_field(
    'contact_questions_phone_link',
    '5164222002'
);


/*
|--------------------------------------------------------------------------
| MAP SECTION
|--------------------------------------------------------------------------
*/

$map_title = gms_contact_field(
    'contact_map_title',
    'Syosset, NY Headquarters'
);

$map_link_text = gms_contact_field(
    'contact_map_link_text',
    'Directions'
);

$map_link_url = gms_contact_field(
    'contact_map_link_url',
    'https://maps.google.com/?q=324+Jericho+Tpke,+Syosset,+NY+11791'
);

$map_embed_url = gms_contact_field(
    'contact_map_embed_url',
    'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.3121543888365!2d-73.5015949234236!3d40.8012679713801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2826cf0faed9b%3A0x6b6c00d4d29a5fa9!2s324%20Jericho%20Tpke%2C%20Syosset%2C%20NY%2011791!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus'
);

$map_iframe_title = gms_contact_field(
    'contact_map_iframe_title',
    'Global Merchant Services Headquarters Location'
);

$map_height = gms_contact_field(
    'contact_map_height',
    '220'
);

?>

<!-- Simple & Modern Dark Mesh Hero Section -->
<section class="bg-mesh-dark py-4 py-lg-5 text-white position-relative text-center test">

    <div class="container py-2">

        <?php global_processing_breadcrumbs(); ?>

        <h1 class="display-5 fw-extrabold text-white mb-2">
            <?php echo wp_kses_post( $hero_heading ); ?>
        </h1>

        <p class="lead text-white-50 mx-auto mb-0 fs-6" style="max-width: 650px;">
            <?php echo wp_kses_post( $hero_subtitle ); ?>
        </p>

    </div>

</section>


<!-- Main Contact Section (#F3F8FC) -->
<section class="py-5 bg-gms-light">

    <div class="container py-lg-4">


        <!-- Top Contact Info Strip (3 Columns) -->
        <div class="row g-4 mb-5">


            <!-- Phone Strip Card -->
            <div class="col-md-4">

                <div
                    class="modern-service-card p-4 bg-white border border-line rounded-4 shadow-sm h-100 d-flex align-items-center gap-3">

                    <div class="rounded-circle bg-gms-navy text-white p-3 flex-shrink-0">

                        <i class="bi <?php echo esc_attr( $phone_icon ); ?> text-gms-blue fs-4"></i>

                    </div>

                    <div>

                        <span class="badge bg-gms-navy text-white mb-1 testttt">
                            <?php echo wp_kses_post( $phone_badge ); ?> 4
                        </span>

                        <h5 class="fw-bold text-gms-navy mb-1">
                            <?php echo esc_html( $phone_number ); ?>
                        </h5>

                        <p class="text-secondary small mb-0">

                            <?php echo esc_html( $phone_national_label ); ?>

                            <a
                                href="tel:<?php echo esc_attr( $phone_national_link ); ?>"
                                class="text-gms-blue text-decoration-none fw-semibold"
                            >
                                <?php echo esc_html( $phone_national_number ); ?>
                            </a>

                        </p>

                    </div>

                </div>

            </div>


            <!-- Headquarters Card -->
            <div class="col-md-4">

                <div
                    class="modern-service-card p-4 bg-white border border-line rounded-4 shadow-sm h-100 d-flex align-items-center gap-3">

                    <div class="rounded-circle bg-gms-navy text-white p-3 flex-shrink-0">

                        <i class="bi <?php echo esc_attr( $hq_icon ); ?> text-gms-blue fs-4"></i>

                    </div>

                    <div>

                        <span class="badge bg-gms-navy text-white mb-1">
                            <?php echo wp_kses_post( $hq_badge ); ?>
                        </span>

                        <h5 class="fw-bold text-gms-navy mb-1">
                            <?php echo esc_html( $hq_address ); ?>
                        </h5>

                        <p class="text-secondary small mb-0">
                            <?php echo esc_html( $hq_city ); ?>
                        </p>

                    </div>

                </div>

            </div>


            <!-- Support & Email Card -->
            <div class="col-md-4">

                <div
                    class="modern-service-card p-4 bg-white border border-line rounded-4 shadow-sm h-100 d-flex align-items-center gap-3">

                    <div class="rounded-circle bg-gms-navy text-white p-3 flex-shrink-0">

                        <i class="bi <?php echo esc_attr( $support_icon ); ?> text-gms-blue fs-4"></i>

                    </div>

                    <div>

                        <span class="badge bg-gms-navy text-white mb-1">
                            <?php echo wp_kses_post( $support_badge ); ?>
                        </span>

                        <h5 class="fw-bold text-gms-navy mb-1">
                            <?php echo esc_html( $support_title ); ?>
                        </h5>

                        <p class="text-secondary small mb-0">

                            <a
                                href="mailto:<?php echo esc_attr( $support_email_link ); ?>"
                                class="text-gms-blue text-decoration-none fw-semibold"
                            >
                                <?php echo esc_html( $support_email ); ?>
                            </a>

                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- Contact Form & Company Profile Split -->
        <div class="row g-5 align-items-stretch">


            <!-- Column 1: Real Business Contact Form -->
            <div class="col-lg-7">

                <div
                    class="modern-service-card p-4 p-md-5 bg-white border border-line rounded-4 shadow-sm h-100">

                    <span class="section-label">
                        <?php echo esc_html( $form_section_label ); ?>
                    </span>

                    <h2 class="h3 fw-bold text-gms-navy mt-1 mb-2">
                        <?php echo wp_kses_post( $form_heading ); ?>
                    </h2>

                    <p class="text-secondary small mb-4">
                        <?php echo wp_kses_post( $form_description ); ?>
                    </p>

                    <?php
                    /*
                     * Contact Form 7 shortcode.
                     *
                     * do_shortcode() receives a string only.
                     */
                    echo do_shortcode( $form_shortcode );
                    ?>

                </div>

            </div>


            <!-- Column 2: Authentic Support Info & Office Map -->
            <div class="col-lg-5">

                <div class="d-flex flex-column gap-4 h-100">


                    <!-- Direct Support Info Box -->
                    <div
                        class="p-4 p-md-5 bg-gms-navy text-white rounded-4 shadow d-flex flex-column justify-content-between">

                        <div>

                            <span class="badge bg-gms-blue text-white fw-bold px-3 py-2 rounded-pill mb-3">
                                <?php echo wp_kses_post( $commitment_badge ); ?>
                            </span>

                            <h3 class="h4 text-white fw-bold mb-3">
                                <?php echo wp_kses_post( $commitment_heading ); ?>
                            </h3>


                            <ul class="list-unstyled mb-4">


                                <!-- Advantage 1 -->
                                <li class="mb-3 d-flex align-items-start gap-3 text-white-50 small">

                                    <i class="bi <?php echo esc_attr( $commitment_1_icon ); ?> text-gms-blue fs-5 flex-shrink-0"></i>

                                    <div>

                                        <strong class="text-white">
                                            <?php echo wp_kses_post( $commitment_1_title ); ?>
                                        </strong>

                                        <div>
                                            <?php echo wp_kses_post( $commitment_1_description ); ?>
                                        </div>

                                    </div>

                                </li>


                                <!-- Advantage 2 -->
                                <li class="mb-3 d-flex align-items-start gap-3 text-white-50 small">

                                    <i class="bi <?php echo esc_attr( $commitment_2_icon ); ?> text-gms-blue fs-5 flex-shrink-0"></i>

                                    <div>

                                        <strong class="text-white">
                                            <?php echo wp_kses_post( $commitment_2_title ); ?>
                                        </strong>

                                        <div>
                                            <?php echo wp_kses_post( $commitment_2_description ); ?>
                                        </div>

                                    </div>

                                </li>


                                <!-- Advantage 3 -->
                                <li class="mb-0 d-flex align-items-start gap-3 text-white-50 small">

                                    <i class="bi <?php echo esc_attr( $commitment_3_icon ); ?> text-gms-blue fs-5 flex-shrink-0"></i>

                                    <div>

                                        <strong class="text-white">
                                            <?php echo wp_kses_post( $commitment_3_title ); ?>
                                        </strong>

                                        <div>
                                            <?php echo wp_kses_post( $commitment_3_description ); ?>
                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>


                        <!-- Immediate Questions -->
                        <div
                            class="p-3 bg-white bg-opacity-10 rounded-3 border border-white border-opacity-15 text-center">

                            <div class="small text-white-50">
                                <?php echo esc_html( $questions_label ); ?>
                            </div>

                            <a
                                href="tel:<?php echo esc_attr( $questions_phone_link ); ?>"
                                class="text-gms-blue fw-bold fs-5 text-decoration-none"
                            >
                                <?php echo esc_html( $questions_phone ); ?>
                            </a>

                        </div>

                    </div>


                    <!-- Map Embed Card -->
                    <div class="modern-service-card p-3 bg-white border border-line rounded-4 shadow-sm">

                        <div class="d-flex align-items-center justify-content-between mb-2 px-2">

                            <span class="fw-bold text-gms-navy small">

                                <i class="bi bi-map-fill text-gms-blue me-1"></i>

                                <?php echo esc_html( $map_title ); ?>

                            </span>

                            <a
                                href="<?php echo esc_url( $map_link_url ); ?>"
                                target="_blank"
                                rel="noopener"
                                class="text-gms-blue small fw-semibold text-decoration-none"
                            >
                                <?php echo esc_html( $map_link_text ); ?>

                                <i class="bi bi-box-arrow-up-right ms-1"></i>

                            </a>

                        </div>


                        <div class="rounded-3 overflow-hidden border border-line">

                            <iframe
                                title="<?php echo esc_attr( $map_iframe_title ); ?>"
                                src="<?php echo esc_url( $map_embed_url ); ?>"
                                width="100%"
                                height="<?php echo esc_attr( $map_height ); ?>"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>

</section>


<?php get_footer(); ?>