<?php 
/**
 * Página de Blog
 */

get_header();

?>

<?php if ( have_posts() ): ?>

  <section class="blog">

    <div class="container">

      <div class="section-title d-flex justify-content-between align-items-center">

          <h3><?php echo get_the_title( get_option( 'page_for_posts' ) ) ?></h3>

      </div>

      <div class="section-content">

        <div class="row">

          <?php while( have_posts() ): the_post(); ?>

            <article <?php post_class('post-card col-12 col-md-4') ?>>
            
              <div class="entry-header">

                <?php if ( has_post_thumbnail( ) ): ?>

                  <a href="<?php the_permalink() ?>" title="<?php printf(__('Ver mais sobre %s', 'cinepress'), get_the_title()) ?>">
                    <?php the_post_thumbnail( 'full' ); ?>
                  </a>

                <?php endif; ?>

                <a href="<?php the_permalink() ?>" title="<?php printf(__('Ver mais sobre %s', 'cinepress'), get_the_title()) ?>">
                  <h2><?php echo get_the_title() ?> </h2>
                </a>

              </div>

              <div class="entry-content">

                <?php the_excerpt() ?>

              </div>

              <div class="entry-footer">

                <div class="category">
                
                </div>
                
                <div class="d-lg-flex justify-content-between">

                  <div class="author">

                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
                      
                      <?php the_author() ?>

                    </a>

                  </div>

                  <div class="date">

                    <?php echo get_the_date() ?>

                  </div>

                </div>

              </div>

            </article>

          <?php endwhile; wp_reset_postdata(); ?>

        </div>
      
      </div>

      <div class="section-footer d-flex justify-content-center">

        <nav class="pagination-holder">

          <div class="container">

            <?php echo paginate_links(); ?>

          </div>

        </nav>

      </div>

    </div>

  </section>

<?php endif; ?>

<?php get_footer(); ?>