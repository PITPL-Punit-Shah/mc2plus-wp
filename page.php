<?php
/**
 * The template for displaying all default WordPress pages
 *
 * @package Global_Processing
 */

get_header();
?>

    <!-- Dark Mesh Hero Section -->
    <section class="bg-mesh-dark py-4 py-lg-5 text-white position-relative text-center">
      <div class="container py-2">
        <?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-2' ); ?>
        <h1 class="display-5 fw-extrabold text-white mb-2"><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) : ?>
          <p class="lead text-white-50 mx-auto mb-0 fs-6" style="max-width: 720px;">
            <?php echo get_the_excerpt(); ?>
          </p>
        <?php endif; ?>
      </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-5 bg-white content-section" id="page-content">
      <div class="container py-lg-3">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <?php
            if ( have_posts() ) :
              while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-4 text-center">
                      <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4 shadow-sm border border-line' ) ); ?>
                    </div>
                  <?php endif; ?>

                  <div class="page-body text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                    <?php the_content(); ?>
                  </div>

                  <?php
                  wp_link_pages(
                    array(
                      'before' => '<div class="page-links mt-4 pt-3 border-top border-line fw-bold">' . esc_html__( 'Pages:', 'global-processing' ) . ' ',
                      'after'  => '</div>',
                    )
                  );
                  ?>
                </article>
                <?php
              endwhile;
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
