<?php
/**
 * The main template file
 *
 * @package Global_Processing
 */

get_header();
?>

    <!-- Dark Mesh Hero Section -->
    <section class="bg-mesh-dark py-4 py-lg-5 text-white position-relative text-center">
      <div class="container py-2">
        <?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-2' ); ?>
        <h1 class="display-5 fw-extrabold text-white mb-2">
          <?php
          if ( is_home() && ! is_front_page() ) {
            single_post_title();
          } elseif ( is_archive() ) {
            the_archive_title();
          } elseif ( is_search() ) {
            printf( esc_html__( 'Search Results for: %s', 'global-processing' ), '<span class="text-gms-blue">' . get_search_query() . '</span>' );
          } else {
            the_title();
          }
          ?>
        </h1>
      </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-5 bg-white content-section" id="main-content">
      <div class="container py-lg-3">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <?php
            if ( have_posts() ) :
              while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 pb-4 border-bottom border-line' ); ?>>
                  <h2 class="h3 fw-bold text-gms-navy mb-2">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-gms-navy">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  
                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="my-3">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4 shadow-sm border border-line' ) ); ?>
                      </a>
                    </div>
                  <?php endif; ?>

                  <div class="page-body text-secondary" style="line-height: 1.8;">
                    <?php the_excerpt(); ?>
                  </div>

                  <div class="mt-3">
                    <a href="<?php the_permalink(); ?>" class="btn btn-gms btn-sm">
                      <?php esc_html_e( 'Read More', 'global-processing' ); ?> <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                  </div>
                </article>
                <?php
              endwhile;

              the_posts_pagination(
                array(
                  'prev_text' => '<i class="bi bi-chevron-left me-1"></i> ' . esc_html__( 'Previous', 'global-processing' ),
                  'next_text' => esc_html__( 'Next', 'global-processing' ) . ' <i class="bi bi-chevron-right ms-1"></i>',
                  'class'     => 'pagination justify-content-center',
                )
              );
            else :
              ?>
              <div class="text-center py-5">
                <h2 class="h4 fw-bold text-gms-navy mb-3"><?php esc_html_e( 'Nothing Found', 'global-processing' ); ?></h2>
                <p class="text-secondary mb-4"><?php esc_html_e( 'It seems we cannot find what you are looking for.', 'global-processing' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-gms fw-bold">
                  <i class="bi bi-house-fill me-1"></i> <?php esc_html_e( 'Return Home', 'global-processing' ); ?>
                </a>
              </div>
              <?php
            endif;
            ?>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
