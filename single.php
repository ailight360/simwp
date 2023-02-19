<?php get_header(); ?>


    <!--Start Main-->
    <main>
        <!--Start Aside-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <!--Start Article-->

        <div class="single-articles">
            <!--Start Article 2-->

            <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="single-thumb">
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                </div>

                <div class="single-description">
                    <h3><?php the_title(); ?></h3>
                    <span><?php the_time( 'M j y' ); ?>  |  <?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?> </span>
                    <?php the_content(); ?>
                </div>
            </article>

            
            
            <?php endwhile; ?>

            <?php else : ?>
            <?php endif; ?>


        </div>

    </main>

<?php get_footer(); ?>