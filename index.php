<?php
/**
 * The main template file
 *
 * @package mc2plus
 */

get_header();

/*
 * ============================================================
 * HERO SECTION
 * ============================================================
 */
?>

<section class="hero position-relative overflow-hidden" data-astro-cid-dslprd6j>

  <div class="orbit position-absolute top-0 start-0 w-100"
    aria-hidden="true"
    data-astro-cid-dslprd6j>

    <svg width="1920" height="1012" viewBox="0 0 1920 1012"
      fill="none"
      class="curves"
      data-astro-cid-dslprd6j="true">

      <g id="Desktop">
        <g id="contact test 1">
          <g id="Group">
            <g id="Layer_1">
              <g id="Group_2">

                <path id="Vector"
                  d="M1876.32 -138.81C1980.88 380.97 1644.28 887.1 1124.5 991.66C604.71 1096.22 98.5903 759.61 -5.96973 239.83"
                  stroke="#F37D2C"
                  stroke-miterlimit="10" />

                <path id="Vector_2"
                  d="M1891.29 38.68C1937.81 38.68 1981.55 56.8 2014.45 89.69C2047.35 122.59 2065.46 166.33 2065.46 212.85C2065.46 259.37 2047.34 303.11 2014.45 336.01C1981.55 368.91 1937.81 387.02 1891.29 387.02C1844.77 387.02 1801.03 368.9 1768.13 336.01C1735.23 303.11 1717.12 259.38 1717.12 212.85C1717.12 166.32 1735.24 122.59 1768.13 89.69C1801.03 56.79 1844.77 38.68 1891.29 38.68ZM1891.29 37.68C1794.55 37.68 1716.12 116.11 1716.12 212.85C1716.12 309.59 1794.55 388.02 1891.29 388.02C1988.03 388.02 2066.46 309.59 2066.46 212.85C2066.46 116.11 1988.03 37.68 1891.29 37.68Z"
                  fill="#F37D2C" />

                <path id="Vector_4"
                  d="M1843.93 359.88L1839.2 368.38C1837.07 372.2 1832.71 374.21 1828.42 373.33L1814.95 370.57L1826.87 377.73C1830.43 379.87 1832.29 383.98 1831.54 388.06L1829.45 399.46L1836.01 388.5C1837.99 385.19 1841.7 383.31 1845.54 383.66L1857.82 384.79L1848.26 379.97C1844.55 378.1 1842.4 374.13 1842.84 370.01L1843.94 359.87L1843.93 359.88Z"
                  fill="#F37D2C" />

                <path id="Vector_3"
                  d="M344.04 109.3C422.17 375.25 321.97 679.45 102.15 847.97C30.1101 904.54 -53.3298 946.38 -141.59 970.78C226.38 870.95 449.12 475.74 344.04 109.3Z"
                  fill="#F37D2C" />

                <path id="Vector_5"
                  d="M264.85 665.66L250.67 681.95C242.30 691.56 227.72 692.55 218.14 684.16L200.45 668.67L222.16 699.00C225.88 704.20 226.33 711.06 223.33 716.70L209.20 743.20L222.58 731.23C230.88 723.81 243.29 723.38 252.08 730.22L277.79 750.23L252.54 716.88C248.93 712.11 248.12 705.78 250.43 700.26L264.86 665.68L264.85 665.66Z"
                  fill="#F37D2C" />

              </g>
            </g>
          </g>
        </g>
      </g>

    </svg>
  </div>


  <div class="hero-inner reveal text-center mx-auto position-relative"
    data-astro-cid-dslprd6j>

    <h1 class="eyebrow" data-astro-cid-dslprd6j>
      NEWS &amp; MEDIA
    </h1>

    <div class="underline mx-auto"
      aria-hidden="true"
      data-astro-cid-dslprd6j>
    </div>

    <p class="lede reveal-rise mx-auto"
      data-astro-cid-dslprd6j>
      Announcements, coverages and updates from MC&sup2;+
      and India&rsquo;s oil &amp; gas sector partners.
    </p>

    <button type="button"
      class="scroll border-0 bg-transparent"
      aria-label="Scroll to next section"
      data-astro-cid-dslprd6j>

      <svg width="36"
        height="21"
        viewBox="0 0 36 21"
        fill="none"
        aria-hidden="true"
        data-astro-cid-dslprd6j="true">

        <g id="Desktop" clip-path="url(#clip0_0_1)">
          <g id="home test 1">
            <g id="Group">

              <path id="Vector"
                d="M35.55 0.0100098C30.43 7.53001 24.2 14.21 17.77 20.61L16.36 19.19C10.44 13.21 4.74 6.98 0 0C6.98 4.74 13.21 10.44 19.19 16.36H16.36C22.34 10.45 28.58 4.75 35.55 0V0.0100098Z"
                fill="#1E1E3C" />

            </g>
          </g>
        </g>

        <defs>
          <clipPath id="clip0_0_1">
            <rect width="1920"
              height="4496"
              fill="white"
              transform="translate(-942.22 -963.55)" />
          </clipPath>
        </defs>

      </svg>

    </button>

  </div>

</section>


<?php
/*
 * ============================================================
 * PRESS GRID SECTION
 * ============================================================
 *
 * Fetch published WordPress Posts.
 *
 * Create a category with slug:
 * news-media
 *
 * OR remove the category_name argument below if all Posts
 * should appear here.
 */

$news_media_query = new WP_Query(
  array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 6,
    'orderby'             => 'date',
    'order'               => 'DESC',
    'category_name'      => 'news-media',
    'ignore_sticky_posts' => true,
  )
);
?>


<section class="press" data-astro-cid-cvekidvy>

  <div class="container" data-astro-cid-cvekidvy>

    <div class="grid" data-astro-cid-cvekidvy>


      <?php if ( $news_media_query->have_posts() ) : ?>

        <?php while ( $news_media_query->have_posts() ) : ?>

          <?php
          $news_media_query->the_post();

          /*
           * ====================================================
           * POST DATA
           * ====================================================
           */

          $post_id = get_the_ID();

          // ACF fields
          $press_source  = get_field( 'press_source', $post_id );
          $press_link    = get_field( 'press_link', $post_id );
          $press_pdf     = get_field( 'press_pdf', $post_id );
          $press_summary = get_field( 'press_summary', $post_id );


          /*
           * ====================================================
           * FEATURED IMAGE
           * ====================================================
           */

          $image_url = get_the_post_thumbnail_url(
            $post_id,
            'large'
          );


          /*
           * If no Featured Image exists,
           * use your existing MC2 logo as fallback.
           */

          if ( ! $image_url ) {
            $image_url = get_template_directory_uri()
              . '/assets/mc2-logo-thumbnail.Dbe-y4vl_2dboTA.webp';
          }


          /*
           * ====================================================
           * SUMMARY
           * ====================================================
           *
           * Priority:
           *
           * 1. ACF Press Summary
           * 2. WordPress Excerpt
           * 3. Post Content
           */

          if ( ! $press_summary ) {

            $press_summary = get_the_excerpt();

          }

          if ( ! $press_summary ) {

            $press_summary = wp_trim_words(
              wp_strip_all_tags(
                get_the_content()
              ),
              30
            );

          }


          /*
           * ====================================================
           * LINK
           * ====================================================
           *
           * Priority:
           *
           * 1. Press PDF
           * 2. Press Link
           * 3. WordPress Post Permalink
           */

          $card_link = get_permalink();
          $target    = '';

          if ( $press_pdf ) {

            /*
             * ACF File field may return:
             * URL / Array / Attachment ID
             */

            if ( is_array( $press_pdf ) && ! empty( $press_pdf['url'] ) ) {

              $card_link = $press_pdf['url'];

            } elseif ( is_numeric( $press_pdf ) ) {

              $card_link = wp_get_attachment_url(
                $press_pdf
              );

            } elseif ( is_string( $press_pdf ) ) {

              $card_link = $press_pdf;

            }

            $target = ' target="_blank" rel="noopener"';

          } elseif ( $press_link ) {

            $card_link = $press_link;
            $target    = ' target="_blank" rel="noopener noreferrer"';

          }


          /*
           * ====================================================
           * DATE
           * ====================================================
           */

          $post_date = get_the_date(
            'j F Y'
          );

          ?>

          <a class="card"
            href="<?php echo esc_url( $card_link ); ?>"
            <?php echo $target; ?>
            aria-label="<?php echo esc_attr( 'Read: ' . get_the_title() ); ?>"
            data-astro-cid-cvekidvy>


            <div class="photo-wrap"
              data-astro-cid-cvekidvy>

              <span class="v-line"
                aria-hidden="true"
                data-astro-cid-cvekidvy>
              </span>

              <span class="h-line"
                aria-hidden="true"
                data-astro-cid-cvekidvy>
              </span>


              <svg width="46"
                height="46"
                viewBox="0 0 46 46"
                fill="none"
                class="card-spark"
                aria-hidden="true"
                data-astro-cid-cvekidvy="true">

                <path
                  d="M34.18 21.34L45.92 22.96L34.18 24.58C29.19 25.27 25.27 29.1899 24.58 34.1799L22.96 45.9199L21.34 34.1799C20.65 29.1899 16.73 25.27 11.74 24.58L0 22.96L11.74 21.34C16.73 20.65 20.65 16.73 21.34 11.74L22.96 0L24.58 11.74C25.27 16.73 29.19 20.65 34.18 21.34Z"
                  fill="#FF7400" />

              </svg>


              <img
                src="<?php echo esc_url( $image_url ); ?>"
                alt="<?php echo esc_attr( get_the_title() ); ?>"
                sizes="(max-width: 639.98px) 90vw, (max-width: 1023.98px) 45vw, 480px"
                data-astro-cid-cvekidvy="true"
                loading="lazy"
                decoding="async"
                class="cover">

            </div>


            <p class="date"
              data-astro-cid-cvekidvy>

              <?php echo esc_html( $post_date ); ?>


              <?php if ( $press_source ) : ?>

                <span class="sep"
                  aria-hidden="true"
                  data-astro-cid-cvekidvy>
                  ·
                </span>

                <?php echo esc_html( $press_source ); ?>

              <?php endif; ?>

            </p>


            <h2 class="title"
              data-astro-cid-cvekidvy>

              <?php the_title(); ?>

            </h2>


            <?php if ( $press_summary ) : ?>

              <p class="summary"
                data-astro-cid-cvekidvy>

                <?php echo esc_html( $press_summary ); ?>

              </p>

            <?php endif; ?>


          </a>


        <?php endwhile; ?>


      <?php else : ?>


        <p class="no-results">
          No news and media posts found.
        </p>


      <?php endif; ?>


      <?php
      /*
       * Restore original WordPress query.
       */
      wp_reset_postdata();
      ?>

    </div>

  </div>

</section>


<?php get_footer(); ?>


<script type="module">

document.querySelector(`.hero .scroll`)?.addEventListener(`click`, () => {

  document
    .querySelector(`.hero`)
    ?.nextElementSibling
    ?.scrollIntoView({
      behavior: `smooth`
    });

});

</script>