<?php
/**
 * The template for displaying all single blog posts
 *
 * @package Global_Processing
 */

get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Dark Mesh Post Hero Section -->
      <section class="bg-mesh-dark py-4 py-lg-5 text-white position-relative text-center">
        <div class="container py-2">
          <?php global_processing_breadcrumbs( 'd-flex justify-content-center mb-2' ); ?>
          
          <!-- Category Badges -->
          <?php
          $categories = get_the_category();
          if ( ! empty( $categories ) ) :
            ?>
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
              <?php foreach ( $categories as $category ) : ?>
                <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="badge bg-gms-blue text-white text-decoration-none px-3 py-1 rounded-pill small fw-semibold">
                  <?php echo esc_html( $category->name ); ?>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <h1 class="display-5 fw-extrabold text-white mb-3 mx-auto" style="max-width: 900px; line-height: 1.2;">
            <?php the_title(); ?>
          </h1>

          <!-- Post Meta Details -->
          <div class="d-flex flex-wrap align-items-center justify-content-center gap-3 text-white-50 small">
            <div class="d-flex align-items-center gap-1">
              <i class="bi bi-person-circle text-gms-blue"></i>
              <span class="text-white"><?php the_author(); ?></span>
            </div>
            <span>•</span>
            <div class="d-flex align-items-center gap-1">
              <i class="bi bi-calendar3 text-gms-blue"></i>
              <span><?php echo get_the_date( 'F j, Y' ); ?></span>
            </div>
            <span>•</span>
            <div class="d-flex align-items-center gap-1">
              <i class="bi bi-clock text-gms-blue"></i>
              <span>
                <?php
                $word_count = str_word_count( strip_tags( get_the_content() ) );
                $reading_time = ceil( $word_count / 200 );
                echo esc_html( max( 1, $reading_time ) . ' min read' );
                ?>
              </span>
            </div>
          </div>
        </div>
      </section>

      <!-- Main Blog Post & Sidebar Grid -->
      <section class="py-5 bg-white content-section" id="single-post-content">
        <div class="container py-lg-3">
          <div class="row g-5">

            <!-- Main Post Body (col-lg-8) -->
            <div class="col-lg-8">
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-article' ); ?>>
                
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="mb-4">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4 shadow-sm border border-line w-100', 'style' => 'max-height: 480px; object-fit: cover;' ) ); ?>
                  </div>
                <?php endif; ?>

                <div class="page-body text-secondary mb-4" style="line-height: 1.85; font-size: 1.05rem;">
                  <?php the_content(); ?>
                </div>

                <?php
                wp_link_pages(
                  array(
                    'before' => '<div class="page-links my-4 pt-3 border-top border-line fw-bold">' . esc_html__( 'Pages:', 'global-processing' ) . ' ',
                    'after'  => '</div>',
                  )
                );
                ?>

                <!-- Post Tags -->
                <?php
                $tags = get_the_tags();
                if ( ! empty( $tags ) ) :
                  ?>
                  <div class="pt-4 mt-4 border-top border-line">
                    <div class="d-flex flex-wrap align-items-center gap-2">
                      <span class="fw-bold text-gms-navy small"><i class="bi bi-tags-fill text-gms-blue me-1"></i> Tags:</span>
                      <?php foreach ( $tags as $tag ) : ?>
                        <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="badge bg-gms-light text-gms-navy border border-line text-decoration-none px-3 py-2 rounded-pill small">
                          #<?php echo esc_html( $tag->name ); ?>
                        </a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                <?php endif; ?>

                <!-- Author Bio Box -->
                <div class="p-4 bg-gms-light rounded-4 border border-line my-5">
                  <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle overflow-hidden flex-shrink-0" style="width: 64px; height: 64px; min-width: 64px; border: 2px solid var(--gms-blue);">
                      <?php echo get_avatar( get_the_author_meta( 'ID' ), 64, '', get_the_author(), array( 'class' => 'w-100 h-100 object-fit-cover' ) ); ?>
                    </div>
                    <div>
                      <div class="small text-muted text-uppercase fw-bold">Published By</div>
                      <h4 class="h5 fw-bold text-gms-navy mb-1"><?php the_author(); ?></h4>
                      <p class="small text-secondary mb-0">
                        <?php echo esc_html( get_the_author_meta( 'description' ) ?: 'Payment processing and merchant services specialist at Global Merchant Services.' ); ?>
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Previous / Next Post Navigation -->
                <div class="row g-3 my-4">
                  <div class="col-sm-6">
                    <?php
                    $prev_post = get_previous_post();
                    if ( ! empty( $prev_post ) ) :
                      ?>
                      <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="p-3 bg-white rounded-3 border border-line text-decoration-none d-block h-100 hover-lift shadow-xs">
                        <div class="small text-muted"><i class="bi bi-arrow-left me-1"></i> Previous Post</div>
                        <div class="fw-bold text-gms-navy text-truncate"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></div>
                      </a>
                    <?php endif; ?>
                  </div>
                  <div class="col-sm-6 text-sm-end">
                    <?php
                    $next_post = get_next_post();
                    if ( ! empty( $next_post ) ) :
                      ?>
                      <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="p-3 bg-white rounded-3 border border-line text-decoration-none d-block h-100 hover-lift shadow-xs">
                        <div class="small text-muted">Next Post <i class="bi bi-arrow-right ms-1"></i></div>
                        <div class="fw-bold text-gms-navy text-truncate"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></div>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- Comments Section -->
                <?php
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;
                ?>

              </article>
            </div>

            <!-- Blog Sidebar (col-lg-4) -->
            <div class="col-lg-4">
              <aside class="sidebar-wrapper d-flex flex-column gap-4">

                <!-- Sidebar CTA Box -->
                <div class="p-4 rounded-4 bg-gms-navy text-white shadow-sm position-relative overflow-hidden">
                  <span class="badge bg-gms-blue text-white mb-2 px-3 py-1 rounded-pill small">Merchant Analysis</span>
                  <h4 class="h5 fw-bold text-white mb-2">Eliminate Processing Fees</h4>
                  <p class="small text-white-50 mb-3" style="line-height: 1.6;">
                    Upload your recent merchant statement for a side-by-side rate comparison and discover our 0% fee cash discount programs.
                  </p>
                  <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn btn-gms btn-sm w-100 fw-bold shadow-sm">
                    Get Statement Analysis <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>

                <!-- Recent Posts Widget -->
                <div class="p-4 bg-gms-light rounded-4 border border-line shadow-xs">
                  <h4 class="h6 fw-bold text-gms-navy mb-3 border-bottom border-line pb-2">
                    <i class="bi bi-newspaper text-gms-blue me-2"></i> Recent Articles
                  </h4>
                  <div class="d-flex flex-column gap-3">
                    <?php
                    $recent_posts = new WP_Query(
                      array(
                        'posts_per_page'      => 4,
                        'post__not_in'        => array( get_the_ID() ),
                        'ignore_sticky_posts' => 1,
                      )
                    );

                    if ( $recent_posts->have_posts() ) :
                      while ( $recent_posts->have_posts() ) :
                        $recent_posts->the_post();
                        ?>
                        <div class="d-flex align-items-start gap-2">
                          <i class="bi bi-chevron-right text-gms-blue small mt-1 flex-shrink-0"></i>
                          <div>
                            <a href="<?php the_permalink(); ?>" class="fw-semibold text-gms-navy text-decoration-none small d-block mb-1">
                              <?php the_title(); ?>
                            </a>
                            <span class="text-muted" style="font-size: 0.75rem;">
                              <?php echo get_the_date( 'M j, Y' ); ?>
                            </span>
                          </div>
                        </div>
                        <?php
                      endwhile;
                      wp_reset_postdata();
                    else :
                      ?>
                      <p class="small text-muted mb-0">No other recent articles found.</p>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- Categories Widget -->
                <div class="p-4 bg-gms-light rounded-4 border border-line shadow-xs">
                  <h4 class="h6 fw-bold text-gms-navy mb-3 border-bottom border-line pb-2">
                    <i class="bi bi-folder-fill text-gms-blue me-2"></i> Categories
                  </h4>
                  <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                    <?php
                    $all_categories = get_categories( array( 'hide_empty' => 1 ) );
                    foreach ( $all_categories as $cat ) :
                      ?>
                      <li class="d-flex justify-content-between align-items-center">
                        <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="text-secondary text-decoration-none small fw-medium">
                          <?php echo esc_html( $cat->name ); ?>
                        </a>
                        <span class="badge bg-white text-gms-navy border border-line rounded-pill small">
                          <?php echo esc_html( $cat->count ); ?>
                        </span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>

                <!-- Direct Assistance Box -->
                <div class="p-4 bg-white rounded-4 border border-line text-center shadow-xs">
                  <div class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center mb-3" style="width: 52px; height: 52px;">
                    <i class="bi bi-headset fs-4 text-gms-blue"></i>
                  </div>
                  <h5 class="h6 fw-bold text-gms-navy mb-1">Need Immediate Support?</h5>
                  <p class="small text-secondary mb-3">Speak directly with our Syosset, NY merchant support team.</p>
                  <a href="tel:5164222002" class="btn btn-gms-outline btn-sm w-100 fw-bold">
                    <i class="bi bi-telephone-fill me-1"></i> (516) 422-2002
                  </a>
                </div>

              </aside>
            </div>

          </div>
        </div>
      </section>

    <?php endwhile; endif; ?>

<?php
get_footer();
