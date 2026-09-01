<?php
/**
 * Template Name: About Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

/*
|--------------------------------------------------------------------------
| ACF Availability
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'get_field' ) ) {
	get_footer();
	return;
}

/*
|--------------------------------------------------------------------------
| ACF Helpers
|--------------------------------------------------------------------------
| Safely handle ACF values that may unexpectedly be arrays.
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'gms_about_field' ) ) {

	function gms_about_field( $field_name, $default = '', $post_id = false ) {

		$value = get_field( $field_name, $post_id );

		if ( $value === null || $value === false || $value === '' ) {
			return $default;
		}

		if ( is_array( $value ) ) {

			if ( isset( $value['value'] ) && is_scalar( $value['value'] ) ) {
				return (string) $value['value'];
			}

			if ( isset( $value['label'] ) && is_scalar( $value['label'] ) ) {
				return (string) $value['label'];
			}

			if ( isset( $value['title'] ) && is_scalar( $value['title'] ) ) {
				return (string) $value['title'];
			}

			if ( isset( $value['text'] ) && is_scalar( $value['text'] ) ) {
				return (string) $value['text'];
			}

			if ( isset( $value['url'] ) && is_scalar( $value['url'] ) ) {
				return (string) $value['url'];
			}

			return $default;
		}

		return (string) $value;
	}
}


/*
|--------------------------------------------------------------------------
| Safe Text Helper
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'gms_about_text' ) ) {

	function gms_about_text( $value, $default = '' ) {

		if ( $value === null || $value === false || $value === '' ) {
			return $default;
		}

		if ( is_array( $value ) ) {

			if ( isset( $value['value'] ) && is_scalar( $value['value'] ) ) {
				return (string) $value['value'];
			}

			if ( isset( $value['label'] ) && is_scalar( $value['label'] ) ) {
				return (string) $value['label'];
			}

			if ( isset( $value['title'] ) && is_scalar( $value['title'] ) ) {
				return (string) $value['title'];
			}

			if ( isset( $value['text'] ) && is_scalar( $value['text'] ) ) {
				return (string) $value['text'];
			}

			if ( isset( $value['url'] ) && is_scalar( $value['url'] ) ) {
				return (string) $value['url'];
			}

			return $default;
		}

		return (string) $value;
	}
}


/*
|--------------------------------------------------------------------------
| Safe URL Helper
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'gms_about_url' ) ) {

	function gms_about_url( $value, $default = '#' ) {

		if ( empty( $value ) ) {
			return $default;
		}

		if ( is_array( $value ) ) {

			if ( ! empty( $value['url'] ) ) {
				$value = $value['url'];
			} elseif ( ! empty( $value['value'] ) ) {
				$value = $value['value'];
			} else {
				return $default;
			}
		}

		return esc_url( (string) $value );
	}
}


/*
|--------------------------------------------------------------------------
| Safe Icon Helper
|--------------------------------------------------------------------------
*/

if ( ! function_exists( 'gms_about_icon' ) ) {

	function gms_about_icon( $value, $default = '' ) {

		$value = gms_about_text( $value, $default );

		return sanitize_html_class( $value, $default );
	}
}


/*
|--------------------------------------------------------------------------
| HERO SECTION
|--------------------------------------------------------------------------
*/

$hero_heading = gms_about_field(
	'about_hero_heading',
	'Almost 2 Decades of Leadership in <span class="gradient-text-blue">Payment Processing</span> &amp; ATM Solutions'
);

$hero_subtitle = gms_about_field(
	'about_hero_subtitle',
	'Global Merchant Services is a dynamic merchant advocate dedicated to empowering businesses nationwide with transparent, cost-effective payment processing, smart POS equipment, and wholesale ATM programs built on complete integrity.'
);


/*
|--------------------------------------------------------------------------
| STATISTICS
|--------------------------------------------------------------------------
*/

$stats = array(
	array(
		'number'  => gms_about_field( 'about_stat_1_number', '50' ),
		'prefix'  => gms_about_field( 'about_stat_1_prefix', '' ),
		'suffix'  => gms_about_field( 'about_stat_1_suffix', '+' ),
		'display' => gms_about_field( 'about_stat_1_display', '50+' ),
		'label'   => gms_about_field( 'about_stat_1_label', 'States Served Nationwide' ),
		'color'   => 'text-gms-blue',
		'counter' => true,
		'border'  => true,
	),
	array(
		'number'  => gms_about_field( 'about_stat_2_number', '658' ),
		'prefix'  => gms_about_field( 'about_stat_2_prefix', '$' ),
		'suffix'  => gms_about_field( 'about_stat_2_suffix', 'M+' ),
		'display' => gms_about_field( 'about_stat_2_display', '$658M+' ),
		'label'   => gms_about_field( 'about_stat_2_label', 'Annual Volume Processed' ),
		'color'   => 'text-gms-navy',
		'counter' => true,
		'border'  => true,
	),
	array(
		'number'  => gms_about_field( 'about_stat_3_number', '4000' ),
		'prefix'  => gms_about_field( 'about_stat_3_prefix', '' ),
		'suffix'  => gms_about_field( 'about_stat_3_suffix', '+' ),
		'display' => gms_about_field( 'about_stat_3_display', '4,000+' ),
		'label'   => gms_about_field( 'about_stat_3_label', 'Active Merchants Nationwide' ),
		'color'   => 'text-gms-blue',
		'counter' => true,
		'border'  => true,
	),
	array(
		'number'  => '',
		'prefix'  => '',
		'suffix'  => '',
		'display' => gms_about_field( 'about_stat_4_display', '24/7' ),
		'label'   => gms_about_field( 'about_stat_4_label', 'US-Based Concierge Support' ),
		'color'   => 'text-gms-navy',
		'counter' => false,
		'border'  => false,
	),
);


/*
|--------------------------------------------------------------------------
| WHO WE ARE
|--------------------------------------------------------------------------
*/

$who_label = gms_about_field(
	'about_who_label',
	'Who We Are'
);

$who_heading = gms_about_field(
	'about_who_heading',
	'Syosset, NY Roots — Nationwide Impact'
);

$who_intro = gms_about_field(
	'about_who_intro',
	'Headquartered in Syosset, NY, Global Merchant Services has spent almost two decades pioneering transparent, high-performance financial technology solutions for businesses of every scale.'
);

$who_description = gms_about_field(
	'about_who_description',
	'Founded on the belief that merchants deserve honest pricing, robust terminal hardware, and uncompromised customer support, we have grown into one of the nation\'s most trusted independent payment providers. From single-location family retailers to high-volume multi-state franchises, we engineer custom payment systems that boost profitability and eliminate unnecessary overhead.'
);

$who_description_2 = gms_about_field(
	'about_who_description_2',
	'Our executive management team brings decades of combined payments industry sales and operations expertise, maintaining a direct, advisory relationship with each client rather than treating them as an anonymous account number.'
);

$who_primary_button_text = gms_about_field(
	'about_who_primary_button_text',
	'Schedule A Consultation'
);

$who_primary_button_url = gms_about_field(
	'about_who_primary_button_url',
	'/contact-us/'
);

$who_secondary_button_text = gms_about_field(
	'about_who_secondary_button_text',
	'Explore Services'
);

$who_secondary_button_url = gms_about_field(
	'about_who_secondary_button_url',
	'services/card-processing.html'
);


/*
|--------------------------------------------------------------------------
| MERCHANT ECOSYSTEM
|--------------------------------------------------------------------------
*/

$ecosystem_title = gms_about_field(
	'about_ecosystem_title',
	'Comprehensive Merchant Ecosystem'
);

$ecosystem_subtitle = gms_about_field(
	'about_ecosystem_subtitle',
	'All-in-one payment technology suite'
);

$ecosystem_items = get_field( 'about_ecosystem_items' );

if ( ! is_array( $ecosystem_items ) || empty( $ecosystem_items ) ) {

	$ecosystem_items = array(
		array(
			'icon'        => 'bi-credit-card-2-front-fill',
			'title'       => 'Credit &amp; Debit Card Processing',
			'description' => 'Low-rate interchange-plus and zero-fee cash discount models.',
		),
		array(
			'icon'        => 'bi-cash-coin',
			'title'       => 'Wholesale ATM Machine Placement',
			'description' => 'Turnkey ATM deployment, turnkey placement, and passive revenue splits.',
		),
		array(
			'icon'        => 'bi-laptop-fill',
			'title'       => 'E-Commerce &amp; Virtual Gateways',
			'description' => 'Seamless online checkouts, recurring billing, and API integrations.',
		),
		array(
			'icon'        => 'bi-bank2',
			'title'       => 'Merchant Working Capital &amp; Cash Advance',
			'description' => 'Rapid funding programs to expand inventory and scale operations.',
		),
	);
}


/*
|--------------------------------------------------------------------------
| ORGANIZATIONAL PILLARS
|--------------------------------------------------------------------------
*/

$pillar_section_label = gms_about_field(
	'about_pillars_label',
	'Organizational Pillars'
);

$pillar_heading = gms_about_field(
	'about_pillars_heading',
	'What Defines Global Merchant Services'
);

$pillar_description = gms_about_field(
	'about_pillars_description',
	'Discover the principles, capabilities, and partnership opportunities that set us apart in the payment technology landscape.'
);

$pillar_tabs = get_field( 'about_pillar_tabs' );

if ( ! is_array( $pillar_tabs ) || empty( $pillar_tabs ) ) {

	$pillar_tabs = array(

		array(
			'tab_id'              => 'tab-overview',
			'tab_icon'            => 'bi-building',
			'tab_title'           => 'Company Overview',
			'tab_badge'           => 'Syosset, NY Headquarters',
			'tab_heading'         => 'Payment &amp; ATM Processing Specialists',
			'tab_lead'            => 'Located in Syosset, NY, Global Merchant Services specializes in customized credit card processing, wholesale ATM machines, and superior 24/7 customer support.',
			'tab_description'     => 'As a dynamic industry leader for almost 2 decades, we deliver a full spectrum of transaction technology including custom ATM placements, high-speed EMV terminals, point-of-sale systems, check cashing, EBT, cash advances, e-commerce gateways, and custom gift and loyalty programs.',
			'tab_description_2'   => 'Our management team couples extensive industry sales experience with personalized advisory to deliver unbeatable value, zero junk fees, and reliable payment rails.',
			'tab_side_title'      => 'Full Spectrum Offerings',
			'tab_side_items'      => array(
				'Custom ATM Machine Placements',
				'Credit &amp; Debit Card Processing',
				'E-Commerce Payment Gateways',
				'Check Cashing &amp; EBT Acceptance',
				'Merchant Cash Advance Programs',
				'Gift, Loyalty &amp; Prepaid Cards',
			),
		),

		array(
			'tab_id'              => 'tab-nationwide',
			'tab_icon'            => 'bi-geo-alt-fill',
			'tab_title'           => 'Nationwide Leadership',
			'tab_badge'           => 'All 50 States',
			'tab_heading'         => 'Market Leader With 4,000+ Merchants Nationwide',
			'tab_lead'            => 'With over 4,000+ active merchants nationwide, Global Merchant Services is a recognized market leader across retail, hospitality, convenience, professional services, and e-commerce.',
			'tab_description'     => 'Our continuous national expansion is backed by state-of-the-art terminal hardware, same-day settlement capabilities, 99.99% transaction uptime, and dedicated US account specialists available around the clock. Whether you process $10,000 or $10,000,000 monthly, we scale alongside your business.',
			'tab_description_2'   => '',
			'tab_side_title'      => 'Rapid National Scale',
			'tab_side_subtitle'   => 'Expanding processing rails across all 50 states',
			'tab_side_icon'       => 'bi-graph-up-arrow',
			'tab_side_description' => 'Continuous infrastructure investments ensure complete PCI-DSS security compliance, robust fraud prevention algorithms, and transparent zero-fee processing capabilities.',
		),

		array(
			'tab_id'              => 'tab-mission',
			'tab_icon'            => 'bi-shield-check',
			'tab_title'           => 'Our Goal &amp; Integrity',
			'tab_badge'           => 'Uncompromising Transparency',
			'tab_heading'         => 'Becoming Your Trusted Financial Advisor',
			'tab_lead'            => 'Global Merchant Services\' goal is to serve as a trusted long-term advisor, guiding business owners to the most cost-effective and compliant processing structures.',
			'tab_description'     => 'Our core commitment is integrity: we disclose all available processing structures, point out hidden rate markups on existing statements, and suggest what genuinely protects your bottom line. Even if you are not ready to switch today, our certified specialists are always ready to educate and guide you.',
			'tab_description_2'   => '',
			'tab_side_title'      => 'Integrity Framework',
			'tab_side_icon'       => 'bi-shield-lock-fill',
			'tab_side_items'      => array(
				'Unbiased, line-by-line statement audits',
				'Zero hidden junk fees or deceptive clauses',
				'Full merchant education before any contract setup',
				'Direct access to dedicated human account managers',
			),
		),

		array(
			'tab_id'                => 'tab-agent',
			'tab_icon'              => 'bi-people-fill',
			'tab_title'             => 'Agent ISR Program',
			'tab_badge'             => 'Partnership Program',
			'tab_heading'           => 'Highly Competitive ISR Agent &amp; Partner Program',
			'tab_lead'              => 'We offer an industry-leading Independent Sales Representative (ISR) and Developer Partner program designed to build long-term recurring revenue.',
			'tab_description'       => 'Enjoy generous 50/50 monthly balance splits, complete back-office support, hardware provisioning, and dedicated onboarding training. Partner with a proven processor that values your relationships.',
			'tab_description_2'     => '',
			'tab_side_title'        => '50 / 50',
			'tab_side_subtitle'     => 'Monthly Residual Balance Split',
			'tab_side_description' => 'Predictable, lifetime recurring income generated on every merchant transaction processed across your portfolio.',
			'tab_primary_button_text' => 'Join Our Agent Network',
			'tab_primary_button_url'  => 'agent-program.html',
			'tab_secondary_button_text' => 'Developer Partners',
			'tab_secondary_button_url'  => 'partnership-opportunity.html',
		),
	);
}


/*
|--------------------------------------------------------------------------
| JOURNEY / TIMELINE
|--------------------------------------------------------------------------
*/

$journey_label = gms_about_field(
	'about_journey_label',
	'Our Journey'
);

$journey_heading = gms_about_field(
	'about_journey_heading',
	'Proven Industry Milestones'
);

$journey_description = gms_about_field(
	'about_journey_description',
	'A continuous history of innovation, merchant advocacy, and reliable payment infrastructure.'
);

$timeline_items = get_field( 'about_timeline_items' );

if ( ! is_array( $timeline_items ) || empty( $timeline_items ) ) {

	$timeline_items = array(
		array(
			'number'      => '1',
			'title'       => 'Founding in Syosset, NY',
			'badge'       => 'Syosset HQ',
			'description' => 'Established Global Merchant Services with a clear focus: delivering honest credit card processing, wholesale ATM deployments, and dedicated 24/7 US customer support.',
			'badge_class' => 'text-gms-blue',
		),
		array(
			'number'      => '2',
			'title'       => 'Full Ecosystem &amp; Gateway Expansion',
			'badge'       => 'Service Expansion',
			'description' => 'Expanded offerings to include e-commerce payment gateways, virtual terminals, Merchant Cash Advances, EBT check cashing, and custom gift &amp; loyalty card programs.',
			'badge_class' => 'text-gms-navy',
		),
		array(
			'number'      => '3',
			'title'       => '4,000+ Merchants Across 50 States',
			'badge'       => 'Nationwide Scale',
			'description' => 'Grew the active merchant community past 4,000 businesses nationwide, exceeding $650M+ in annual processing volume and solidifying GMS as an industry leader.',
			'badge_class' => 'text-gms-blue',
		),
		array(
			'number'      => '4',
			'title'       => 'Zero-Fee Processing &amp; Next-Gen Fintech',
			'badge'       => 'Innovation &amp; Growth',
			'description' => 'Rolled out 100% compliant Zero-Fee Cash Discount dual-pricing programs, cutting merchant processing costs to zero while expanding ISO agent residual opportunities.',
			'badge_class' => 'text-gms-blue',
		),
	);
}


/*
|--------------------------------------------------------------------------
| GMS ADVANTAGES
|--------------------------------------------------------------------------
*/

$advantage_label = gms_about_field(
	'about_advantage_label',
	'The GMS Advantage'
);

$advantage_heading = gms_about_field(
	'about_advantage_heading',
	'Why Thousands of Merchants Choose Us'
);

$advantage_description = gms_about_field(
	'about_advantage_description',
	'We combine high-performance processing hardware with unmatched personal service and zero deceptive fees.'
);

$advantages = get_field( 'about_advantages' );

if ( ! is_array( $advantages ) || empty( $advantages ) ) {

	$advantages = array(
		array(
			'icon'        => 'bi-wallet2',
			'title'       => 'Zero Hidden Junk Fees',
			'description' => 'Transparent statement billing with no surprise rate hikes, PCI penalty traps, or ambiguous annual fees.',
		),
		array(
			'icon'        => 'bi-percent',
			'title'       => '100% Zero-Fee Option',
			'description' => 'Eliminate up to 100% of your credit card processing fees with fully compliant cash discount &amp; dual pricing.',
		),
		array(
			'icon'        => 'bi-lightning-charge-fill',
			'title'       => 'Next-Day &amp; Same-Day Funding',
			'description' => 'Accelerate cash flow with direct bank settlement options ensuring your funds arrive when you need them.',
		),
		array(
			'icon'        => 'bi-terminal-fill',
			'title'       => 'Modern Hardware Upgrades',
			'description' => 'State-of-the-art EMV, NFC contactless, wireless smart POS terminals, and wholesale ATM machines.',
		),
		array(
			'icon'        => 'bi-headset',
			'title'       => '24/7 Dedicated US Support',
			'description' => 'Reach live, experienced payment professionals in Syosset, NY without waiting in robotic phone queues.',
		),
		array(
			'icon'        => 'bi-shield-check',
			'title'       => 'Bank-Grade Security',
			'description' => 'PCI-DSS Level 1 compliance, end-to-end tokenization, and built-in fraud prevention on every transaction.',
		),
	);
}


/*
|--------------------------------------------------------------------------
| CORE VALUES
|--------------------------------------------------------------------------
*/

$value_label = gms_about_field(
	'about_values_label',
	'Core Values'
);

$value_heading = gms_about_field(
	'about_values_heading',
	'Principles That Guide Our Success'
);

$value_description = gms_about_field(
	'about_values_description',
	'How we deliver value, transparency, and trust to every merchant and partner we serve.'
);

$values = get_field( 'about_values' );

if ( ! is_array( $values ) || empty( $values ) ) {

	$values = array(
		array(
			'icon'        => 'bi-shield-check',
			'title'       => '1. Integrity First',
			'description' => 'We clearly disclose all processing rates and recommend the plan that protects your profits, never our margins.',
		),
		array(
			'icon'        => 'bi-book-fill',
			'title'       => '2. Merchant Education',
			'description' => 'We demystify interchange rates, batch fees, and terminal equipment so you make completely informed decisions.',
		),
		array(
			'icon'        => 'bi-headset',
			'title'       => '3. 24/7 US Support',
			'description' => 'Dedicated US-based account managers and technical specialists ready to troubleshoot and resolve issues immediately.',
		),
		array(
			'icon'        => 'bi-graph-up-arrow',
			'title'       => '4. Partner Growth',
			'description' => 'Empowering agents and developers with generous 50/50 balance splits, reliable tools, and dedicated back-office support.',
		),
	);
}


/*
|--------------------------------------------------------------------------
| EXECUTIVE PROMISE
|--------------------------------------------------------------------------
*/

$promise_label = gms_about_field(
	'about_promise_label',
	'Our Executive Commitment'
);

$promise_heading = gms_about_field(
	'about_promise_heading',
	'Dedicated to Your Long-Term Profitability &amp; Security'
);

$promise_quote = gms_about_field(
	'about_promise_quote',
	'"We promise to work with you as a trusted advisor, implementing the best credit card processing plan for your business, and maintaining your account with superior service and integrity."'
);

$promise_author = gms_about_field(
	'about_promise_author',
	'— Global Merchant Services Executive Leadership Team'
);

$promise_location = gms_about_field(
	'about_promise_location',
	'Syosset, NY'
);


/*
|--------------------------------------------------------------------------
| BOTTOM CTA
|--------------------------------------------------------------------------
*/

$cta_label = gms_about_field(
	'about_cta_label',
	'Get In Touch'
);

$cta_heading = gms_about_field(
	'about_cta_heading',
	'Partner With A Winning Payment Processor'
);

$cta_description = gms_about_field(
	'about_cta_description',
	'Reach out to our Syosset, NY headquarters today for a custom rate audit, terminal consultation, or agent partnership.'
);

$cta_primary_text = gms_about_field(
	'about_cta_primary_text',
	'Statement Analysis'
);

$cta_primary_url = gms_about_field(
	'about_cta_primary_url',
	'/contact-us/'
);

$cta_secondary_text = gms_about_field(
	'about_cta_secondary_text',
	'Call (516) 422-2002'
);

$cta_phone = gms_about_field(
	'about_cta_phone',
	'5164222002'
);
?>


<!-- Modern Dark Mesh Hero Section -->
<section class="bg-mesh-dark py-5 text-white position-relative pb-5">
	<div class="container py-lg-4 text-center">

		<!-- Breadcrumb Navigation -->
		<?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-3' ); ?>

		<!-- Main Headline -->
		<h1 class="display-4 fw-extrabold text-white mb-3" style="line-height: 1.15; max-width: 920px; margin: 0 auto;">
			<?php echo wp_kses_post( gms_about_text( $hero_heading ) ); ?>
		</h1>

		<!-- Subtitle -->
		<p class="lead text-white-50 mx-auto mb-4 fs-5" style="max-width: 760px;">
			<?php echo wp_kses_post( gms_about_text( $hero_subtitle ) ); ?>
		</p>

	</div>
</section>


<!-- Overlapping Key Metrics Card Banner -->
<div class="container overlapping-stats-wrapper">
	<div class="overlapping-stats-card">
		<div class="row g-4 text-center">

			<?php foreach ( $stats as $stat ) : ?>

				<div class="col-md-3 col-6 <?php echo ! empty( $stat['border'] ) ? 'border-end border-line-sm' : ''; ?>">

					<div
						class="stat-num <?php echo ! empty( $stat['counter'] ) ? 'stat-counter' : ''; ?> <?php echo esc_attr( gms_about_text( $stat['color'] ) ); ?> fw-extrabold fs-1"
						<?php if ( ! empty( $stat['counter'] ) ) : ?>
							data-count="<?php echo esc_attr( gms_about_text( $stat['number'] ) ); ?>"
							<?php if ( gms_about_text( $stat['prefix'] ) !== '' ) : ?>
								data-prefix="<?php echo esc_attr( gms_about_text( $stat['prefix'] ) ); ?>"
							<?php endif; ?>
							data-suffix="<?php echo esc_attr( gms_about_text( $stat['suffix'] ) ); ?>"
						<?php endif; ?>
					>
						<?php echo esc_html( gms_about_text( $stat['display'] ) ); ?>
					</div>

					<div class="text-muted small fw-semibold mt-1">
						<?php echo wp_kses_post( gms_about_text( $stat['label'] ) ); ?>
					</div>

				</div>

			<?php endforeach; ?>

		</div>
	</div>
</div>


<!-- Company Story & Who We Are Section -->
<section class="py-5">
	<div class="container py-lg-3">

		<div class="row align-items-center g-5">

			<div class="col-lg-6">

				<span class="section-label">
					<?php echo esc_html( gms_about_text( $who_label ) ); ?>
				</span>

				<h2 class="section-title text-gms-navy mt-1">
					<?php echo wp_kses_post( gms_about_text( $who_heading ) ); ?>
				</h2>

				<p class="lead text-secondary fs-6 mb-3">
					<?php echo wp_kses_post( gms_about_text( $who_intro ) ); ?>
				</p>

				<p class="text-muted mb-3">
					<?php echo wp_kses_post( gms_about_text( $who_description ) ); ?>
				</p>

				<p class="text-muted mb-4">
					<?php echo wp_kses_post( gms_about_text( $who_description_2 ) ); ?>
				</p>

				<div class="d-flex flex-wrap gap-3">

					<a href="<?php echo gms_about_url( $who_primary_button_url, home_url( '/contact-us/' ) ); ?>" class="btn btn-gms">
						<?php echo esc_html( gms_about_text( $who_primary_button_text ) ); ?>
						<i class="bi bi-arrow-right ms-1"></i>
					</a>

					<a href="<?php echo gms_about_url( $who_secondary_button_url, home_url( '/services/card-processing/' ) ); ?>" class="btn btn-gms-outline">
						<?php echo esc_html( gms_about_text( $who_secondary_button_text ) ); ?>
					</a>

				</div>

			</div>


			<div class="col-lg-6">

				<div class="p-4 p-md-5 bg-gms-light rounded-4 shadow-sm border border-line position-relative">

					<div class="d-flex align-items-center gap-3 mb-4">

						<div class="service-icon-circle m-0"
							style="width: 54px !important; height: 54px !important; flex: 0 0 54px !important;">
							<i class="bi bi-grid-fill text-white fs-4"></i>
						</div>

						<div>

							<h3 class="h5 fw-bold text-gms-navy mb-0">
								<?php echo esc_html( gms_about_text( $ecosystem_title ) ); ?>
							</h3>

							<span class="small text-muted">
								<?php echo esc_html( gms_about_text( $ecosystem_subtitle ) ); ?>
							</span>

						</div>

					</div>


					<div class="row g-3">

						<?php foreach ( $ecosystem_items as $item ) : ?>

							<?php
							$item_icon        = isset( $item['icon'] ) ? gms_about_text( $item['icon'] ) : '';
							$item_title       = isset( $item['title'] ) ? gms_about_text( $item['title'] ) : '';
							$item_description = isset( $item['description'] ) ? gms_about_text( $item['description'] ) : '';
							?>

							<div class="col-12">

								<div class="p-3 bg-white rounded-3 border border-line d-flex align-items-center gap-3">

									<i class="bi <?php echo esc_attr( gms_about_icon( $item_icon ) ); ?> text-gms-blue fs-4"></i>

									<div>

										<h4 class="h6 fw-bold text-gms-navy mb-0">
											<?php echo wp_kses_post( $item_title ); ?>
										</h4>

										<p class="text-muted small mb-0">
											<?php echo wp_kses_post( $item_description ); ?>
										</p>

									</div>

								</div>

							</div>

						<?php endforeach; ?>

					</div>

				</div>

			</div>

		</div>

	</div>
</section>


<!-- Interactive Solution Pillar Tabs -->
<section class="py-5 bg-gms-light">

	<div class="container py-lg-3">

		<div class="text-center mb-4">

			<span class="section-label">
				<?php echo esc_html( gms_about_text( $pillar_section_label ) ); ?>
			</span>

			<h2 class="section-title text-gms-navy mt-1">
				<?php echo wp_kses_post( gms_about_text( $pillar_heading ) ); ?>
			</h2>

			<p class="text-muted mx-auto" style="max-width: 680px;">
				<?php echo wp_kses_post( gms_about_text( $pillar_description ) ); ?>
			</p>

		</div>


		<!-- Tab Navigation Buttons -->
		<div class="d-flex justify-content-center mb-4">

			<ul class="nav nav-pills about-nav-tabs gap-1 flex-wrap justify-content-center"
				id="aboutTabs"
				role="tablist">

				<?php foreach ( $pillar_tabs as $index => $tab ) : ?>

					<?php
					$raw_tab_id = isset( $tab['tab_id'] ) ? gms_about_text( $tab['tab_id'] ) : '';
					$tab_id     = $raw_tab_id ? sanitize_title( $raw_tab_id ) : 'about-tab-' . $index;
					$button_id  = $tab_id . '-btn';

					$tab_icon  = isset( $tab['tab_icon'] ) ? gms_about_text( $tab['tab_icon'] ) : '';
					$tab_title = isset( $tab['tab_title'] ) ? gms_about_text( $tab['tab_title'] ) : '';
					?>

					<li class="nav-item" role="presentation">

						<button
							class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
							id="<?php echo esc_attr( $button_id ); ?>"
							data-bs-toggle="pill"
							data-bs-target="#<?php echo esc_attr( $tab_id ); ?>"
							type="button"
							role="tab"
							aria-controls="<?php echo esc_attr( $tab_id ); ?>"
							aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
						>

							<?php if ( $tab_icon ) : ?>
								<i class="bi <?php echo esc_attr( gms_about_icon( $tab_icon ) ); ?> me-1"></i>
							<?php endif; ?>

							<?php echo wp_kses_post( $tab_title ); ?>

						</button>

					</li>

				<?php endforeach; ?>

			</ul>

		</div>


		<!-- Tab Content Panes -->
		<div class="tab-content p-4 p-md-5 bg-white rounded-4 shadow-sm border border-line"
			id="aboutTabsContent">

			<?php foreach ( $pillar_tabs as $index => $tab ) : ?>

				<?php
				$raw_tab_id = isset( $tab['tab_id'] ) ? gms_about_text( $tab['tab_id'] ) : '';
				$tab_id     = $raw_tab_id ? sanitize_title( $raw_tab_id ) : 'about-tab-' . $index;
				$button_id  = $tab_id . '-btn';

				$tab_badge              = isset( $tab['tab_badge'] ) ? gms_about_text( $tab['tab_badge'] ) : '';
				$tab_heading            = isset( $tab['tab_heading'] ) ? gms_about_text( $tab['tab_heading'] ) : '';
				$tab_lead               = isset( $tab['tab_lead'] ) ? gms_about_text( $tab['tab_lead'] ) : '';
				$tab_description        = isset( $tab['tab_description'] ) ? gms_about_text( $tab['tab_description'] ) : '';
				$tab_description_2      = isset( $tab['tab_description_2'] ) ? gms_about_text( $tab['tab_description_2'] ) : '';
				$tab_side_title         = isset( $tab['tab_side_title'] ) ? gms_about_text( $tab['tab_side_title'] ) : '';
				$tab_side_subtitle      = isset( $tab['tab_side_subtitle'] ) ? gms_about_text( $tab['tab_side_subtitle'] ) : '';
				$tab_side_icon          = isset( $tab['tab_side_icon'] ) ? gms_about_text( $tab['tab_side_icon'] ) : '';
				$tab_side_description   = isset( $tab['tab_side_description'] ) ? gms_about_text( $tab['tab_side_description'] ) : '';
				$tab_primary_text       = isset( $tab['tab_primary_button_text'] ) ? gms_about_text( $tab['tab_primary_button_text'] ) : '';
				$tab_primary_url        = isset( $tab['tab_primary_button_url'] ) ? gms_about_url( $tab['tab_primary_button_url'] ) : '';
				$tab_secondary_text     = isset( $tab['tab_secondary_button_text'] ) ? gms_about_text( $tab['tab_secondary_button_text'] ) : '';
				$tab_secondary_url      = isset( $tab['tab_secondary_button_url'] ) ? gms_about_url( $tab['tab_secondary_button_url'] ) : '';

				$tab_side_items = isset( $tab['tab_side_items'] ) && is_array( $tab['tab_side_items'] )
					? $tab['tab_side_items']
					: array();
				?>

				<div
					class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
					id="<?php echo esc_attr( $tab_id ); ?>"
					role="tabpanel"
					aria-labelledby="<?php echo esc_attr( $button_id ); ?>"
				>

					<div class="row align-items-center g-4">

						<div class="col-lg-7">

							<?php if ( $tab_badge ) : ?>

								<span class="badge bg-gms-light text-gms-blue border border-primary border-opacity-25 px-3 py-1 mb-2 fw-bold">
									<?php echo wp_kses_post( $tab_badge ); ?>
								</span>

							<?php endif; ?>


							<h3 class="h4 fw-bold text-gms-navy mb-3">
								<?php echo wp_kses_post( $tab_heading ); ?>
							</h3>


							<?php if ( $tab_lead ) : ?>

								<p class="text-secondary lead fs-6">
									<?php echo wp_kses_post( $tab_lead ); ?>
								</p>

							<?php endif; ?>


							<?php if ( $tab_description ) : ?>

								<p class="text-muted <?php echo $tab_description_2 ? '' : 'mb-0'; ?>">
									<?php echo wp_kses_post( $tab_description ); ?>
								</p>

							<?php endif; ?>


							<?php if ( $tab_description_2 ) : ?>

								<p class="text-muted mb-0">
									<?php echo wp_kses_post( $tab_description_2 ); ?>
								</p>

							<?php endif; ?>


							<?php if ( $tab_primary_text || $tab_secondary_text ) : ?>

								<div class="d-flex flex-wrap gap-3">

									<?php if ( $tab_primary_text ) : ?>

										<a href="<?php echo esc_url( $tab_primary_url ); ?>"
											class="btn btn-gms">

											<?php echo esc_html( $tab_primary_text ); ?>

											<i class="bi bi-arrow-right ms-1"></i>

										</a>

									<?php endif; ?>


									<?php if ( $tab_secondary_text ) : ?>

										<a href="<?php echo esc_url( $tab_secondary_url ); ?>"
											class="btn btn-gms-outline">

											<?php echo esc_html( $tab_secondary_text ); ?>

										</a>

									<?php endif; ?>

								</div>

							<?php endif; ?>

						</div>


						<div class="col-lg-5">

							<?php if ( $index === 0 ) : ?>

								<div class="p-4 bg-gms-light rounded-4 border border-line">

									<h4 class="h5 fw-bold text-gms-navy mb-3">

										<i class="bi bi-check2-circle text-gms-blue me-2"></i>

										<?php echo esc_html( $tab_side_title ); ?>

									</h4>


									<?php if ( ! empty( $tab_side_items ) ) : ?>

										<ul class="list-unstyled feature-list text-secondary mb-0 d-flex flex-column gap-2">

											<?php foreach ( $tab_side_items as $item ) : ?>

												<?php
												/*
												 * Supports both:
												 * - Plain Text repeater rows
												 * - Array rows containing "item"
												 */
												if ( is_array( $item ) ) {
													$item = isset( $item['item'] ) ? $item['item'] : '';
												}

												$item = gms_about_text( $item );
												?>

												<li class="d-flex align-items-center gap-2">

													<i class="bi bi-check-circle-fill text-gms-blue"></i>

													<?php echo wp_kses_post( $item ); ?>

												</li>

											<?php endforeach; ?>

										</ul>

									<?php endif; ?>

								</div>


							<?php elseif ( $index === 1 ) : ?>

								<div class="p-4 bg-gms-navy text-white rounded-4 shadow-sm">

									<div class="d-flex align-items-center mb-3">

										<i class="bi <?php echo esc_attr( gms_about_icon( $tab_side_icon, 'bi-graph-up-arrow' ) ); ?> text-gms-blue fs-1 me-3"></i>

										<div>

											<div class="fs-4 fw-bold text-white">
												<?php echo esc_html( $tab_side_title ); ?>
											</div>

											<div class="small text-white-50">
												<?php echo esc_html( $tab_side_subtitle ); ?>
											</div>

										</div>

									</div>

									<p class="small text-white-50 mb-0">
										<?php echo wp_kses_post( $tab_side_description ); ?>
									</p>

								</div>


							<?php elseif ( $index === 2 ) : ?>

								<div class="p-4 bg-gms-light rounded-4 border border-line">

									<h4 class="h5 fw-bold text-gms-navy mb-3">

										<i class="bi <?php echo esc_attr( gms_about_icon( $tab_side_icon, 'bi-shield-lock-fill' ) ); ?> text-gms-blue me-2"></i>

										<?php echo esc_html( $tab_side_title ); ?>

									</h4>


									<?php if ( ! empty( $tab_side_items ) ) : ?>

										<div class="d-flex flex-column gap-2">

											<?php foreach ( $tab_side_items as $item ) : ?>

												<?php
												if ( is_array( $item ) ) {
													$item = isset( $item['item'] ) ? $item['item'] : '';
												}

												$item = gms_about_text( $item );
												?>

												<p class="text-secondary small mb-0">

													<i class="bi bi-check-circle-fill text-gms-blue me-2"></i>

													<?php echo wp_kses_post( $item ); ?>

												</p>

											<?php endforeach; ?>

										</div>

									<?php endif; ?>

								</div>


							<?php else : ?>

								<div class="p-4 bg-gms-light rounded-4 border border-line text-center">

									<div class="fs-1 fw-extrabold text-gms-blue mb-1">
										<?php echo esc_html( $tab_side_title ); ?>
									</div>

									<div class="h5 fw-bold text-gms-navy mb-2">
										<?php echo esc_html( $tab_side_subtitle ); ?>
									</div>

									<p class="text-muted small mb-0">
										<?php echo wp_kses_post( $tab_side_description ); ?>
									</p>

								</div>

							<?php endif; ?>

						</div>

					</div>

				</div>

			<?php endforeach; ?>

		</div>

	</div>

</section>


<!-- Milestone Journey & Evolution Timeline -->
<section class="py-5">

	<div class="container py-lg-3">

		<div class="text-center mb-5">

			<span class="section-label">
				<?php echo esc_html( gms_about_text( $journey_label ) ); ?>
			</span>

			<h2 class="section-title text-gms-navy">
				<?php echo wp_kses_post( gms_about_text( $journey_heading ) ); ?>
			</h2>

			<p class="text-muted mx-auto" style="max-width: 680px;">
				<?php echo wp_kses_post( gms_about_text( $journey_description ) ); ?>
			</p>

		</div>


		<div class="row justify-content-center">

			<div class="col-lg-10">

				<div class="timeline-container">

					<?php foreach ( $timeline_items as $item ) : ?>

						<?php
						$timeline_number      = isset( $item['number'] ) ? gms_about_text( $item['number'] ) : '';
						$timeline_title       = isset( $item['title'] ) ? gms_about_text( $item['title'] ) : '';
						$timeline_badge       = isset( $item['badge'] ) ? gms_about_text( $item['badge'] ) : '';
						$timeline_description  = isset( $item['description'] ) ? gms_about_text( $item['description'] ) : '';
						$timeline_badge_class  = isset( $item['badge_class'] ) ? gms_about_text( $item['badge_class'] ) : 'text-gms-blue';
						?>

						<div class="timeline-step">

							<div class="timeline-node">
								<?php echo esc_html( $timeline_number ); ?>
							</div>

							<div class="timeline-card">

								<div class="d-flex flex-wrap align-items-center justify-content-between mb-2 gap-2">

									<h3 class="h5 fw-bold text-gms-navy mb-0">
										<?php echo wp_kses_post( $timeline_title ); ?>
									</h3>

									<span class="badge bg-gms-light <?php echo esc_attr( sanitize_html_class( $timeline_badge_class ) ); ?> border border-primary border-opacity-25 px-3 py-1 fw-bold">
										<?php echo wp_kses_post( $timeline_badge ); ?>
									</span>

								</div>

								<p class="text-secondary mb-0">
									<?php echo wp_kses_post( $timeline_description ); ?>
								</p>

							</div>

						</div>

					<?php endforeach; ?>

				</div>

			</div>

		</div>

	</div>

</section>


<!-- The GMS Advantage: Why Businesses Choose Us -->
<section class="py-5 bg-gms-light">

	<div class="container py-lg-3">

		<div class="text-center mb-5">

			<span class="section-label">
				<?php echo esc_html( gms_about_text( $advantage_label ) ); ?>
			</span>

			<h2 class="section-title text-gms-navy">
				<?php echo wp_kses_post( gms_about_text( $advantage_heading ) ); ?>
			</h2>

			<p class="text-muted mx-auto" style="max-width: 680px;">
				<?php echo wp_kses_post( gms_about_text( $advantage_description ) ); ?>
			</p>

		</div>


		<div class="row g-4">

			<?php foreach ( $advantages as $advantage ) : ?>

				<?php
				$advantage_icon        = isset( $advantage['icon'] ) ? gms_about_text( $advantage['icon'] ) : '';
				$advantage_title       = isset( $advantage['title'] ) ? gms_about_text( $advantage['title'] ) : '';
				$advantage_description = isset( $advantage['description'] ) ? gms_about_text( $advantage['description'] ) : '';
				?>

				<div class="col-md-6 col-lg-4">

					<div class="advantage-card">

						<div class="advantage-icon">
							<i class="bi <?php echo esc_attr( gms_about_icon( $advantage_icon ) ); ?>"></i>
						</div>

						<h3 class="h5 fw-bold text-gms-navy mb-2">
							<?php echo wp_kses_post( $advantage_title ); ?>
						</h3>

						<p class="text-secondary small mb-0">
							<?php echo wp_kses_post( $advantage_description ); ?>
						</p>

					</div>

				</div>

			<?php endforeach; ?>

		</div>

	</div>

</section>


<!-- Our Core Values Grid -->
<section class="py-5">

	<div class="container py-lg-3">

		<div class="text-center mb-5">

			<span class="section-label">
				<?php echo esc_html( gms_about_text( $value_label ) ); ?>
			</span>

			<h2 class="section-title text-gms-navy">
				<?php echo wp_kses_post( gms_about_text( $value_heading ) ); ?>
			</h2>

			<p class="text-muted mx-auto" style="max-width: 680px;">
				<?php echo wp_kses_post( gms_about_text( $value_description ) ); ?>
			</p>

		</div>


		<div class="row g-4">

			<?php foreach ( $values as $value ) : ?>

				<?php
				$value_icon        = isset( $value['icon'] ) ? gms_about_text( $value['icon'] ) : '';
				$value_title       = isset( $value['title'] ) ? gms_about_text( $value['title'] ) : '';
				$value_description = isset( $value['description'] ) ? gms_about_text( $value['description'] ) : '';
				?>

				<div class="col-md-6 col-lg-3">

					<div class="value-card-unique">

						<div class="value-icon-circle">

							<i class="bi <?php echo esc_attr( gms_about_icon( $value_icon ) ); ?>"></i>

						</div>

						<h3 class="h5 fw-bold text-gms-navy mb-2">
							<?php echo wp_kses_post( $value_title ); ?>
						</h3>

						<p class="text-secondary small mb-0">
							<?php echo wp_kses_post( $value_description ); ?>
						</p>

					</div>

				</div>

			<?php endforeach; ?>

		</div>

	</div>

</section>


<!-- Executive Promise Quote Spotlight Card -->
<section class="py-5 bg-gms-light">

	<div class="container">

		<div class="promise-quote-card">

			<div class="row align-items-center g-4">

				<div class="col-lg-2 text-center text-lg-start">

					<div
						class="d-inline-flex align-items-center justify-content-center rounded-circle bg-white bg-opacity-10 text-gms-blue p-3"
						style="width: 80px; height: 80px;">

						<i class="bi bi-quote fs-1 text-white"></i>

					</div>

				</div>


				<div class="col-lg-10">

					<span class="text-white-50 fw-bold text-uppercase tracking-wider small d-block mb-1">
						<?php echo esc_html( gms_about_text( $promise_label ) ); ?>
					</span>

					<h3 class="h4 text-white fw-bold mb-3">
						<?php echo wp_kses_post( gms_about_text( $promise_heading ) ); ?>
					</h3>

					<p class="lead text-white-50 fst-italic mb-3" style="line-height: 1.7;">
						<?php echo wp_kses_post( gms_about_text( $promise_quote ) ); ?>
					</p>

					<div class="d-flex align-items-center gap-3">

						<span class="text-white fw-bold">
							<?php echo esc_html( gms_about_text( $promise_author ) ); ?>
						</span>

						<span
							class="badge bg-white bg-opacity-10 text-white-50 border border-white border-opacity-25 px-2 py-1 small">
							<?php echo esc_html( gms_about_text( $promise_location ) ); ?>
						</span>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>


<!-- Bottom Call to Action Section -->
<section class="py-5 text-center">

	<div class="container py-lg-4">

		<span class="section-label">
			<?php echo esc_html( gms_about_text( $cta_label ) ); ?>
		</span>

		<h2 class="display-6 fw-extrabold text-gms-navy mb-3">
			<?php echo wp_kses_post( gms_about_text( $cta_heading ) ); ?>
		</h2>

		<p class="text-muted mx-auto mb-4 fs-5" style="max-width: 680px;">
			<?php echo wp_kses_post( gms_about_text( $cta_description ) ); ?>
		</p>


		<div class="d-flex flex-wrap justify-content-center gap-3">

			<a href="<?php echo gms_about_url( $cta_primary_url, home_url( '/contact-us/' ) ); ?>"
				class="btn btn-gms btn-lg px-5 py-3 fw-bold fs-6 shadow">

				<i class="bi bi-file-earmark-bar-graph me-2"></i>

				<?php echo esc_html( gms_about_text( $cta_primary_text ) ); ?>

			</a>


			<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', gms_about_text( $cta_phone, '5164222002' ) ) ); ?>"
				class="btn btn-outline-dark btn-lg px-4 py-3 fs-6">

				<i class="bi bi-telephone-fill me-2"></i>

				<?php echo esc_html( gms_about_text( $cta_secondary_text ) ); ?>

			</a>

		</div>

	</div>

</section>


<?php get_footer(); ?>