<?php
/**
 * Template Name: Faqs Page
 *
 * Dynamic FAQ Page using ACF Pro
 *
 * ACF FIELD STRUCTURE
 * -------------------
 *
 * faq_hero_heading
 * faq_hero_subtitle
 *
 * faq_sections                      Repeater
 *   ├── section_id                 Text
 *   ├── section_icon               Text
 *   ├── section_icon_color         Text
 *   ├── section_label              Text
 *   ├── section_title              Text
 *   └── section_items              Repeater
 *        ├── faq_question          Text
 *        ├── faq_answer            WYSIWYG
 *        └── faq_open              True / False
 *
 * faq_support_heading
 * faq_support_description
 * faq_support_phone
 * faq_support_button_text
 */

get_header();


/*
|--------------------------------------------------------------------------
| ACF SAFE HELPERS
|--------------------------------------------------------------------------
|
| These helpers prevent PHP / WordPress errors when ACF returns an array
| instead of a string.
|
|--------------------------------------------------------------------------
*/


/**
 * Convert an ACF value into a safe string.
 *
 * @param mixed  $value
 * @param string $default
 *
 * @return string
 */
if ( ! function_exists( 'gms_faq_safe_string' ) ) {

	function gms_faq_safe_string( $value, $default = '' ) {

		if ( $value === null || $value === false || $value === '' ) {
			return $default;
		}

		if ( is_string( $value ) || is_numeric( $value ) ) {
			return (string) $value;
		}

		if ( is_array( $value ) ) {

			/*
			 * Common ACF return structures.
			 */
			$possible_keys = array(
				'value',
				'label',
				'title',
				'text',
				'name',
				'description',
				'content',
			);

			foreach ( $possible_keys as $key ) {

				if ( isset( $value[ $key ] ) ) {

					$nested_value = $value[ $key ];

					if ( is_string( $nested_value ) || is_numeric( $nested_value ) ) {
						return (string) $nested_value;
					}
				}
			}

			/*
			 * If an array contains simple values, join them.
			 */
			$simple_values = array();

			foreach ( $value as $item ) {

				if ( is_string( $item ) || is_numeric( $item ) ) {
					$simple_values[] = (string) $item;
				}
			}

			if ( ! empty( $simple_values ) ) {
				return implode( ', ', $simple_values );
			}
		}

		return $default;
	}
}


/**
 * Get an ACF field safely.
 *
 * @param string $field_name
 * @param mixed  $default
 * @param mixed  $post_id
 *
 * @return mixed
 */
if ( ! function_exists( 'gms_faq_field' ) ) {

	function gms_faq_field( $field_name, $default = '', $post_id = false ) {

		if ( ! function_exists( 'get_field' ) ) {
			return $default;
		}

		$value = get_field( $field_name, $post_id );

		if ( $value === null || $value === false || $value === '' ) {
			return $default;
		}

		return $value;
	}
}


/**
 * Sanitize a FAQ section ID.
 *
 * @param string $value
 * @param string $fallback
 *
 * @return string
 */
if ( ! function_exists( 'gms_faq_section_id' ) ) {

	function gms_faq_section_id( $value, $fallback = 'faq-section' ) {

		$value = gms_faq_safe_string( $value, $fallback );

		$value = sanitize_title( $value );

		if ( empty( $value ) ) {
			$value = $fallback;
		}

		return $value;
	}
}


/*
|--------------------------------------------------------------------------
| HERO CONTENT
|--------------------------------------------------------------------------
*/


$faq_hero_heading = gms_faq_field(
	'faq_hero_heading',
	'Frequently Asked Questions'
);

$faq_hero_subtitle = gms_faq_field(
	'faq_hero_subtitle',
	'Find quick answers to common questions about payment processing, equipment setup, EMV compliance, and merchant rates.'
);

$faq_hero_heading = gms_faq_safe_string(
	$faq_hero_heading,
	'Frequently Asked Questions'
);

$faq_hero_subtitle = gms_faq_safe_string(
	$faq_hero_subtitle,
	'Find quick answers to common questions about payment processing, equipment setup, EMV compliance, and merchant rates.'
);


/*
|--------------------------------------------------------------------------
| DEFAULT FAQ SECTIONS
|--------------------------------------------------------------------------
|
| These defaults contain the complete original FAQ content.
| If ACF has no data, the page continues to display exactly the
| original FAQ content.
|
|--------------------------------------------------------------------------
*/


$default_faq_sections = array(

	/*
	|--------------------------------------------------------------------------
	| CATEGORY 1
	|--------------------------------------------------------------------------
	*/

	array(

		'section_id'         => 'getting-started',
		'section_icon'       => 'bi-rocket-takeoff-fill',
		'section_icon_color' => 'text-gms-green',
		'section_label'      => 'Merchant Setup &amp; Account Details',
		'section_title'      => 'Getting Started',

		'section_items' => array(

			array(
				'faq_question' => 'How long does the application process take?',
				'faq_answer'   => 'When we receive a completed processing application from a merchant, we work directly with some of the country’s top processors to get it approved as quickly as possible. They do a thorough check of the business including its practices and banking information. Once we receive the approval (generally a 24-48 hour process, but longer lead times may be necessary for some P.O.S. systems) we download the terminal/equipment in our office and ship to the merchant location.',
				'faq_open'     => true,
			),

			array(
				'faq_question' => 'How does Global Merchant Services determine a merchant’s pricing?',
				'faq_answer'   => '<p>Several factors go into determining a merchant’s initial pricing, including the type of business, the goods/services they provide, how long they have been in business as well the volume the location does and/or is estimated to do.</p><p class="mb-0">If you are currently processing with another servicer, Global Merchant Services provides <strong>complimentary statement analysis</strong>. To ensure we are giving you the lowest rate possible, simply provide us with a copy of your current processing statement, and we will take it from there.</p>',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'Does Global Merchant Services provide the processing equipment?',
				'faq_answer'   => 'Yes! We can even provide you a <strong>processing terminal with zero upfront cost</strong> for the length of your processing agreement. A PIN pad, wireless terminal, or Point of Sale system are available at additional cost options.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'What does EMV mean?',
				'faq_answer'   => 'EMV stands for Europay, MasterCard, Visa. It is the global standard for chip-based Debit and Credit Card transactions. It is a joint effort between Europay, MasterCard and Visa to ensure security and global acceptance so that cardholders can continue to process payments securely everywhere.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'Is the equipment provided by Global Merchant Services EMV compliant?',
				'faq_answer'   => 'Although no retailer is legally obligated to have EMV compliant equipment (it’s a mandate, not a law) – since the liability shift, any payment fraud is the responsibility of whichever party is using the lesser technology. We care about the safety and security of our merchants, so all of our equipment is fully EMV compliant!',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'What are the fees incurred when processing a credit card?',
				'faq_answer'   => 'Fees are clearly outlined in your merchant processing agreement. Fees vary based on card type (rewards, debit, corporate), entry method (swiped, dipped, keyed, online), and business category.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'When will my processing fees be charged?',
				'faq_answer'   => 'Your business bank account will be debited between the 1st and 4th of every month for the previous month’s processing fees.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How do I change the bank account associated with my merchant account?',
				'faq_answer'   => 'Contact our Syosset, NY office at <a href="tel:5164222002" class="fw-bold text-gms-green">516 422 2002</a> and we will provide you a Bank Account Change form. The owner of the account will need to complete and sign the form and return it along with verification from your bank for the new account.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How long does it take to receive my money from credit card transactions?',
				'faq_answer'   => 'Standard settlement takes 1 to 2 business days from the day you batch out your transactions. We also offer <strong>Same-Day and Next-Day Funding</strong> options for qualified merchant accounts. Bank holidays and weekends may adjust settlement timing.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'I just sold my business to a new owner. Can the new owner use my account?',
				'faq_answer'   => 'Our Support team would be happy to transfer or establish an account for the new owner. If you sell your business, please contact our office to begin the application process under the new business entity name.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How do I start processing with Global Merchant Services?',
				'faq_answer'   => 'Call us directly at <a href="tel:5164222002" class="fw-bold text-gms-green">516 422 2002</a> or email us at <a href="mailto:support@globalmerchantservicesny.com" class="fw-bold text-gms-green">support@globalmerchantservicesny.com</a> and one of our dedicated merchant specialists will assist you immediately!',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How can I view my monthly processing statement?',
				'faq_answer'   => 'Please contact our Support team at <a href="tel:5164222002" class="fw-bold text-gms-green">516 422 2002</a> and we will set you up with online merchant portal credentials to view and download all of your monthly statements.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'Am I able to access my transactions and batches online?',
				'faq_answer'   => 'Yes! Our online merchant portal gives you real-time visibility into daily batches, transaction history, chargeback tracking, and fee reports. Contact support to activate portal access.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'What is PCI Compliance?',
				'faq_answer'   => 'The Payment Card Industry Data Security Standard (PCI DSS) is a set of security standards designed to ensure that all companies that process, store, or transmit credit card data maintain a secure environment. Established by Visa, Mastercard, Discover, Amex, and JCB, PCI compliance protects cardholder data from unauthorized breaches.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'Can I accept Apple Pay, Google Pay, and contactless payments?',
				'faq_answer'   => 'Yes! All new terminals provided by Global Merchant Services are NFC contactless-enabled as well as EMV compliant. Your customers can tap-to-pay with Apple Pay, Google Pay, smartwatch wallets, and contactless cards.',
				'faq_open'     => false,
			),
		),
	),


	/*
	|--------------------------------------------------------------------------
	| CATEGORY 2
	|--------------------------------------------------------------------------
	*/

	array(

		'section_id'         => 'using-equipment',
		'section_icon'       => 'bi-terminal-fill',
		'section_icon_color' => 'text-primary',
		'section_label'      => 'Terminal Operation &amp; Troubleshooting',
		'section_title'      => 'Using Your Equipment',

		'section_items' => array(

			array(
				'faq_question' => 'How do I use my credit card terminal?',
				'faq_answer'   => 'Our terminals are pre-programmed for quick plug-and-play setup. If you have any questions or need step-by-step guidance, one of our knowledgeable representatives will be happy to assist you over the phone. Contact Global Merchant Services at <a href="tel:5164222002" class="fw-bold text-gms-green">516 422 2002</a> or email <a href="mailto:support@globalmerchantservicesny.com" class="fw-bold text-gms-green">support@globalmerchantservicesny.com</a>.',
				'faq_open'     => true,
			),

			array(
				'faq_question' => 'I received a “Declined” message when running a customer’s card. How do I fix this?',
				'faq_answer'   => '“Declined” is a valid security response sent directly from the cardholder’s issuing bank (e.g. insufficient funds, temporary card lock, or fraud check). You will need to ask the customer for a different form of payment or card.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How do I change the date and time on a Verifone VX520 terminal?',
				'faq_answer'   => '<div class="p-3 bg-light rounded-3 border border-line"><ol class="mb-0 ps-3"><li class="mb-2">From the <strong>Welcome</strong> screen, press the green <span class="badge bg-success">Enter</span> key.</li><li class="mb-2">Press <strong>F2</strong> for <em>“Set Up”</em>.</li><li class="mb-2">Enter password <strong>72797</strong> or <strong>11739</strong> and press Enter.</li><li class="mb-2">Press the purple <strong>MORE</strong> key until you see <em>Date/Time</em> and press <strong>F4</strong>.</li><li class="mb-2">Enter the date first (Format: <code>MM/DD/YYYY</code>).</li><li class="mb-2">Enter the time (Format: Military time <code>HH:MM</code>).</li><li class="mb-0">Press the red <strong>X</strong> key to return to the Welcome screen.</li></ol></div>',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'What do I do when I receive a “Connect Error”?',
				'faq_answer'   => 'A connect error indicates a communication disruption (phone line signal loss or internet disconnection). Please check your Ethernet/phone cable connection. You can also call the 24/7 Tech Support phone number printed on the side sticker of your terminal.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How do I perform a manual settlement / batch out on a VX520?',
				'faq_answer'   => '<div class="p-3 bg-light rounded-3 border border-line"><ol class="mb-0 ps-3"><li class="mb-2">From your <strong>Welcome</strong> screen, press the purple <strong>MORE</strong> key on the top left of the terminal keypad.</li><li class="mb-2">Select <strong>F4</strong> for <em>Settlement</em>.</li><li class="mb-2">Press the green <span class="badge bg-success">Enter</span> key to confirm batch totals.</li><li class="mb-0">Your settlement receipt will print and display <em>“Settlement Successful”</em>.</li></ol></div>',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'What do I do when my terminal displays a “Power Failure” message?',
				'faq_answer'   => 'Power failure messages occur when power was interrupted during a transaction batch. Unplug the power adapter for 10 seconds and plug back in. If the message persists, call the 24/7 Tech Support hotline listed on your terminal sticker.',
				'faq_open'     => false,
			),

			array(
				'faq_question' => 'How do I unlock the keyboard on a Verifone VX520?',
				'faq_answer'   => '<div class="p-3 bg-light rounded-3 border border-line mb-3"><ol class="mb-0 ps-3"><li class="mb-2">From the <strong>Welcome</strong> screen, press key <strong>#8</strong>.</li><li class="mb-2">Enter Password: <strong>11739</strong> and press Enter.</li><li class="mb-0">When screen reads <em>“Lock lkd”</em>, select <strong>F2</strong> for <em>“No”</em> to unlock.</li></ol></div><p class="mb-0">Still have questions? Contact technical support at <a href="tel:5164222002" class="fw-bold text-gms-green">516 422 2002</a> or email <a href="mailto:support@globalmerchantservicesny.com" class="fw-bold text-gms-green">support@globalmerchantservicesny.com</a>.</p>',
				'faq_open'     => false,
			),
		),
	),
);


/*
|--------------------------------------------------------------------------
| GET ACF FAQ SECTIONS
|--------------------------------------------------------------------------
*/


$acf_faq_sections = gms_faq_field( 'faq_sections', array() );


/*
|--------------------------------------------------------------------------
| Normalize ACF FAQ Sections
|--------------------------------------------------------------------------
|
| If ACF contains valid section data, use it.
| Otherwise use the complete default FAQ content above.
|
|--------------------------------------------------------------------------
*/


$faq_sections = array();


if ( is_array( $acf_faq_sections ) && ! empty( $acf_faq_sections ) ) {

	foreach ( $acf_faq_sections as $section_index => $acf_section ) {

		if ( ! is_array( $acf_section ) ) {
			continue;
		}

		$section_id = gms_faq_section_id(
			isset( $acf_section['section_id'] )
				? $acf_section['section_id']
				: '',
			'faq-section-' . ( $section_index + 1 )
		);

		$section_icon = gms_faq_safe_string(
			isset( $acf_section['section_icon'] )
				? $acf_section['section_icon']
				: '',
			'bi-question-circle-fill'
		);

		$section_icon_color = gms_faq_safe_string(
			isset( $acf_section['section_icon_color'] )
				? $acf_section['section_icon_color']
				: '',
			'text-gms-green'
		);

		$section_label = gms_faq_safe_string(
			isset( $acf_section['section_label'] )
				? $acf_section['section_label']
				: '',
			'Frequently Asked Questions'
		);

		$section_title = gms_faq_safe_string(
			isset( $acf_section['section_title'] )
				? $acf_section['section_title']
				: '',
			'FAQ'
		);

		$acf_items = isset( $acf_section['section_items'] )
			? $acf_section['section_items']
			: array();

		$section_items = array();

		if ( is_array( $acf_items ) ) {

			foreach ( $acf_items as $item_index => $acf_item ) {

				if ( ! is_array( $acf_item ) ) {
					continue;
				}

				$question = gms_faq_safe_string(
					isset( $acf_item['faq_question'] )
						? $acf_item['faq_question']
						: '',
					''
				);

				$answer = gms_faq_safe_string(
					isset( $acf_item['faq_answer'] )
						? $acf_item['faq_answer']
						: '',
					''
				);

				if ( $question === '' || $answer === '' ) {
					continue;
				}

				$faq_open = false;

				if ( isset( $acf_item['faq_open'] ) ) {
					$faq_open = (bool) $acf_item['faq_open'];
				}

				$section_items[] = array(
					'faq_question' => $question,
					'faq_answer'   => $answer,
					'faq_open'     => $faq_open,
				);
			}
		}

		/*
		 * Do not display an empty section.
		 */
		if ( empty( $section_items ) ) {
			continue;
		}

		$faq_sections[] = array(
			'section_id'         => $section_id,
			'section_icon'       => $section_icon,
			'section_icon_color' => $section_icon_color,
			'section_label'      => $section_label,
			'section_title'      => $section_title,
			'section_items'      => $section_items,
		);
	}
}


/*
|--------------------------------------------------------------------------
| FALLBACK TO ORIGINAL CONTENT
|--------------------------------------------------------------------------
*/


if ( empty( $faq_sections ) ) {
	$faq_sections = $default_faq_sections;
}


/*
|--------------------------------------------------------------------------
| SUPPORT CALLOUT
|--------------------------------------------------------------------------
*/


$faq_support_heading = gms_faq_field(
	'faq_support_heading',
	'Need Immediate Terminal Support?'
);

$faq_support_description = gms_faq_field(
	'faq_support_description',
	'Our US-based technical support team is ready to assist you 24 hours a day, 7 days a week.'
);

$faq_support_phone = gms_faq_field(
	'faq_support_phone',
	'5164222002'
);

$faq_support_button_text = gms_faq_field(
	'faq_support_button_text',
	'516 422 2002'
);


$faq_support_heading = gms_faq_safe_string(
	$faq_support_heading,
	'Need Immediate Terminal Support?'
);

$faq_support_description = gms_faq_safe_string(
	$faq_support_description,
	'Our US-based technical support team is ready to assist you 24 hours a day, 7 days a week.'
);

$faq_support_phone = gms_faq_safe_string(
	$faq_support_phone,
	'5164222002'
);

$faq_support_button_text = gms_faq_safe_string(
	$faq_support_button_text,
	'516 422 2002'
);


/*
|--------------------------------------------------------------------------
| CLEAN TELEPHONE NUMBER
|--------------------------------------------------------------------------
*/


$faq_support_phone_href = preg_replace(
	'/[^0-9+]/',
	'',
	$faq_support_phone
);

if ( empty( $faq_support_phone_href ) ) {
	$faq_support_phone_href = '5164222002';
}


/*
|--------------------------------------------------------------------------
| PAGE OUTPUT
|--------------------------------------------------------------------------
*/

?>

<!-- Page Hero Banner -->
<section class="page-hero">
	<div class="container text-center">

		<?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-2' ); ?>

		<h1 class="display-5 fw-extrabold text-white mb-2">
			<?php echo wp_kses_post( $faq_hero_heading ); ?>
		</h1>

		<p class="subtitle mx-auto mb-0" style="max-width: 680px;">
			<?php echo wp_kses_post( $faq_hero_subtitle ); ?>
		</p>

	</div>
</section>


<!-- Main FAQ Content Section -->
<section class="py-5 bg-gms-light faq-section">

	<div class="container py-lg-3" style="max-width: 1000px;">


		<!-- Quick Jump Category Navigation -->
		<div class="d-flex flex-wrap justify-content-center gap-2 mb-5">

			<?php foreach ( $faq_sections as $section_index => $section ) : ?>

				<?php
				$section_id = gms_faq_section_id(
					isset( $section['section_id'] )
						? $section['section_id']
						: '',
					'faq-section-' . ( $section_index + 1 )
				);

				$section_icon = gms_faq_safe_string(
					isset( $section['section_icon'] )
						? $section['section_icon']
						: '',
					'bi-question-circle-fill'
				);

				$section_title = gms_faq_safe_string(
					isset( $section['section_title'] )
						? $section['section_title']
						: '',
					'FAQ'
				);
				?>

				<a
					href="#<?php echo esc_attr( $section_id ); ?>"
					class="btn btn-gms-outline text-dark border bg-white shadow-sm px-4 py-2 rounded-pill fw-semibold"
				>
					<i class="bi <?php echo esc_attr( $section_icon ); ?> text-gms-green me-1"></i>
					<?php echo esc_html( $section_title ); ?>
				</a>

			<?php endforeach; ?>


			<!-- Ask Tech Support -->
			<a
				href="/contact-us/"
				class="btn btn-gms-outline text-dark border bg-white shadow-sm px-4 py-2 rounded-pill fw-semibold"
			>
				<i class="bi bi-headset text-gms-green me-1"></i>
				Ask Tech Support
			</a>

		</div>


		<!-- Dynamic FAQ Sections -->

		<?php foreach ( $faq_sections as $section_index => $section ) : ?>

			<?php
			$section_id = gms_faq_section_id(
				isset( $section['section_id'] )
					? $section['section_id']
					: '',
				'faq-section-' . ( $section_index + 1 )
			);

			$section_icon = gms_faq_safe_string(
				isset( $section['section_icon'] )
					? $section['section_icon']
					: '',
				'bi-question-circle-fill'
			);

			$section_icon_color = gms_faq_safe_string(
				isset( $section['section_icon_color'] )
					? $section['section_icon_color']
					: '',
				'text-gms-green'
			);

			$section_label = gms_faq_safe_string(
				isset( $section['section_label'] )
					? $section['section_label']
					: '',
				'Frequently Asked Questions'
			);

			$section_title = gms_faq_safe_string(
				isset( $section['section_title'] )
					? $section['section_title']
					: '',
				'FAQ'
			);

			$section_items = isset( $section['section_items'] ) && is_array( $section['section_items'] )
				? $section['section_items']
				: array();

			$accordion_id = 'faqAccordion' . ( $section_index + 1 );
			?>

			<!-- FAQ CATEGORY -->
			<div class="mb-5" id="<?php echo esc_attr( $section_id ); ?>">

				<div class="d-flex align-items-center mb-4">

					<div
						class="rounded-circle bg-success bg-opacity-10 <?php echo esc_attr( $section_icon_color ); ?> p-3 me-3 d-flex align-items-center justify-content-center"
						style="width: 52px; height: 52px;"
					>
						<i class="bi <?php echo esc_attr( $section_icon ); ?> fs-3"></i>
					</div>

					<div>

						<span class="section-label">
							<?php echo wp_kses_post( $section_label ); ?>
						</span>

						<h2 class="h3 fw-bold text-gms-navy mb-0">
							<?php echo wp_kses_post( $section_title ); ?>
						</h2>

					</div>

				</div>


				<div
					class="accordion shadow-sm rounded-4 overflow-hidden"
					id="<?php echo esc_attr( $accordion_id ); ?>"
				>

					<?php foreach ( $section_items as $item_index => $item ) : ?>

						<?php
						$question = gms_faq_safe_string(
							isset( $item['faq_question'] )
								? $item['faq_question']
								: '',
							''
						);

						$answer = gms_faq_safe_string(
							isset( $item['faq_answer'] )
								? $item['faq_answer']
								: '',
							''
						);

						if ( $question === '' || $answer === '' ) {
							continue;
						}

						/*
						 * Use the first FAQ as open by default if no
						 * explicit ACF value is provided.
						 */
						$is_open = false;

						if ( isset( $item['faq_open'] ) ) {
							$is_open = (bool) $item['faq_open'];
						}

						$heading_id  = 'heading' . ( $section_index + 1 ) . '-' . ( $item_index + 1 );
						$collapse_id = 'collapse' . ( $section_index + 1 ) . '-' . ( $item_index + 1 );

						/*
						 * Make the first FAQ open if no explicit
						 * faq_open fields are configured.
						 */
						if (
							$item_index === 0
							&& ! array_key_exists( 'faq_open', $item )
						) {
							$is_open = true;
						}
						?>

						<!-- FAQ ITEM -->
						<div
							class="accordion-item border-0 <?php echo ( $item_index < count( $section_items ) - 1 ) ? 'border-bottom' : ''; ?>"
						>

							<h3
								class="accordion-header"
								id="<?php echo esc_attr( $heading_id ); ?>"
							>

								<button
									class="accordion-button <?php echo ! $is_open ? 'collapsed' : ''; ?> py-3 fs-6 fw-bold"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#<?php echo esc_attr( $collapse_id ); ?>"
									aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
									aria-controls="<?php echo esc_attr( $collapse_id ); ?>"
								>
									<?php echo esc_html( $question ); ?>
								</button>

							</h3>


							<div
								id="<?php echo esc_attr( $collapse_id ); ?>"
								class="accordion-collapse collapse <?php echo $is_open ? 'show' : ''; ?>"
								aria-labelledby="<?php echo esc_attr( $heading_id ); ?>"
								data-bs-parent="#<?php echo esc_attr( $accordion_id ); ?>"
							>

								<div class="accordion-body text-secondary">
									<?php echo wp_kses_post( $answer ); ?>
								</div>

							</div>

						</div>

					<?php endforeach; ?>

				</div>

			</div>

		<?php endforeach; ?>


		<!-- Technical Support Assistance Callout -->
		<div class="p-4 p-md-5 rounded-4 bg-gms-navy text-white shadow text-center text-md-start">

			<div class="row align-items-center g-4">

				<div class="col-md-2 text-center">

					<div
						class="d-inline-flex align-items-center justify-content-center rounded-circle bg-white bg-opacity-10 text-gms-gold p-3"
						style="width: 72px; height: 72px;"
					>
						<i class="bi bi-headset fs-1"></i>
					</div>

				</div>


				<div class="col-md-7">

					<h3 class="h4 text-white mb-2 fw-bold">
						<?php echo esc_html( $faq_support_heading ); ?>
					</h3>

					<p class="mb-0 text-white-50 lead fs-6">
						<?php echo wp_kses_post( $faq_support_description ); ?>
					</p>

				</div>


				<div class="col-md-3 text-center text-md-end">

					<a
						href="tel:<?php echo esc_attr( $faq_support_phone_href ); ?>"
						class="btn btn-gms btn-lg px-4 py-3 fw-bold w-100"
					>
						<i class="bi bi-telephone-fill me-1"></i>
						<?php echo esc_html( $faq_support_button_text ); ?>
					</a>

				</div>

			</div>

		</div>


	</div>
</section>


<?php get_footer(); ?>