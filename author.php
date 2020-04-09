<?php 
/**
 * Página do Autor
 * 
 */

get_header();

?>

<?php if ( have_posts() ) : the_post(); ?>

    <section class="author">

        <div class="container">

            <div class="author-data">

                <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>

                <h1><?php echo get_author_name(); ?></h1>

                <p><i><?php the_author_meta( 'user_url' ); ?></i></p>


                <?php if ( get_the_author_meta( 'description' ) ) : ?>
				    <div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
            
            </div>

            <div class="author-posts">

                <h3><?php printf( __( 'Todas as postagens de %s', 'cinepress' ), get_the_author() ); ?></h3>

                <?php rewind_posts() ?>

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