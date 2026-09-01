<?php
/**
 * Global Processing Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Setup
 */
function global_processing_theme_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'custom-background' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'global-processing' ),
		)
	);

}
add_action( 'after_setup_theme', 'global_processing_theme_setup' );


/**
 * Performance
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter( 'xmlrpc_enabled', '__return_false' );


/**
 * Disable Gutenberg
 */
add_filter( 'use_block_editor_for_post', '__return_false' );


/**
 * Allow SVG Upload
 */
function global_processing_allow_svg( $mimes ) {

	$mimes['svg'] = 'image/svg+xml';

	return $mimes;

}
add_filter( 'upload_mimes', 'global_processing_allow_svg' );


/**
 * Genuine & Dynamic Breadcrumbs
 */
function global_processing_breadcrumbs( $class = 'd-flex justify-content-center mb-2' ) {
	if ( is_front_page() || is_home() ) {
		return;
	}

	$home_url = home_url( '/' );
	$items    = array();

	// Home Item
	$items[] = array(
		'title' => __( 'Home', 'global-processing' ),
		'url'   => $home_url,
	);

	global $post;

	if ( is_page() ) {
		// 1. Check for hierarchical WordPress parent pages
		if ( $post && $post->post_parent ) {
			$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
			foreach ( $ancestors as $ancestor_id ) {
				$items[] = array(
					'title' => get_the_title( $ancestor_id ),
					'url'   => get_permalink( $ancestor_id ),
				);
			}
		} else {
			// 2. Intelligent virtual hierarchy based on template & slug conventions
			$slug     = $post ? $post->post_name : '';
			$template = get_page_template_slug( $post );

			// Services group
			$service_slugs = array(
				'card-processing',
				'merchant-services',
				'cash-discount-program',
				'same-day-funding',
				'e-commerce',
				'virtual-terminal',
				'atm-machine-processing',
				'gift-cards',
				'cash-advances',
				'internet-processing',
			);

			// Products group
			$product_slugs = array(
				'point-of-sale-system',
				'atm-machines',
				'credit-card-terminals-michigan',
				'emv-credit-card-terminals',
				'mobile-payment-system',
				'equipment-supplies',
			);

			// Programs group
			$program_slugs = array(
				'agent-program',
				'partnership-opportunity',
			);

			if ( in_array( $slug, $service_slugs, true ) || ( $template && strpos( $template, 'services/' ) !== false ) ) {
				if ( $slug !== 'merchant-services' && $slug !== 'services' && $slug !== 'services-overview' ) {
					$items[] = array(
						'title' => __( 'Services', 'global-processing' ),
						'url'   => home_url( '/services/merchant-services/' ),
					);
				}
			} elseif ( in_array( $slug, $product_slugs, true ) ) {
				if ( $slug !== 'products' ) {
					$items[] = array(
						'title' => __( 'Products', 'global-processing' ),
						'url'   => home_url( '/products/' ),
					);
				}
			} elseif ( in_array( $slug, $program_slugs, true ) ) {
				$items[] = array(
					'title' => __( 'Programs', 'global-processing' ),
					'url'   => home_url( '/agent-program/' ),
				);
			}
		}

		// Current Page
		$items[] = array(
			'title' => get_the_title(),
			'url'   => '',
		);
	} elseif ( is_404() ) {
		$items[] = array(
			'title' => __( 'Page Not Found', 'global-processing' ),
			'url'   => '',
		);
	} elseif ( is_search() ) {
		$items[] = array(
			'title' => sprintf( __( 'Search: %s', 'global-processing' ), get_search_query() ),
			'url'   => '',
		);
	} elseif ( is_archive() ) {
		$items[] = array(
			'title' => get_the_archive_title(),
			'url'   => '',
		);
	} elseif ( is_single() ) {
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$items[] = array(
				'title' => $categories[0]->name,
				'url'   => get_category_link( $categories[0]->term_id ),
			);
		}
		$items[] = array(
			'title' => get_the_title(),
			'url'   => '',
		);
	}

	if ( empty( $items ) ) {
		return;
	}

	echo '<nav aria-label="breadcrumb" class="' . esc_attr( $class ) . '">';
	echo '<ol class="breadcrumb mb-0 opacity-75 small" itemscope itemtype="https://schema.org/BreadcrumbList">';

	$total = count( $items );
	foreach ( $items as $i => $item ) {
		$position = $i + 1;
		$is_last  = ( $i === $total - 1 );

		echo '<li class="breadcrumb-item' . ( $is_last ? ' active text-white' : '' ) . '" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"';
		if ( $is_last ) {
			echo ' aria-current="page"';
		}
		echo '>';

		if ( $is_last || empty( $item['url'] ) ) {
			echo '<span itemprop="name" class="text-white">' . esc_html( $item['title'] ) . '</span>';
		} else {
			echo '<a href="' . esc_url( $item['url'] ) . '" class="text-white text-decoration-none" itemprop="item"><span itemprop="name" class="text-white">' . esc_html( $item['title'] ) . '</span></a>';
		}

		echo '<meta itemprop="position" content="' . esc_attr( (string) $position ) . '" />';
		echo '</li>';
	}

	echo '</ol>';
	echo '</nav>';
}
