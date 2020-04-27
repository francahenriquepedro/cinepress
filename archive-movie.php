<?php 
/**
 * Listagem dos Filmes
 * 
 */

get_header();

?>

<?php if ( have_posts() ): ?>

    <section class="index">

        <div class="container">

            <div class="row">

                <?php while( have_posts() ): the_post(); ?>

                    <article <?php post_class('col-12 col-md-3') ?>>

                        <div class="entry-content">

                            <?php if ( has_post_thumbnail( ) ): ?>

                                <div class="post-thumbnail">

                                    <?php the_post_thumbnail( 'full' ); ?>

                                </div>

                            <?php endif; ?>

                            <h2><?php the_title() ?></h2>

                            <p><?php the_excerpt() ?></p>

                        </div>

                    </article>                    

                <?php endwhile; ?>

            </div>

        </div>

    </section>

<?php endif; ?>

<?php get_footer(); ?>