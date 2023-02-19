<?php get_header(); ?>


    <!--Start Main-->
    <main>
        <!--Start Aside-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <!--Start Article-->

        <div class="articles">
            <!--Start Article 2-->

            <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="thumb">
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                </div>

                <div class="description">
                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span><?php the_time( 'M j y' ); ?>  |  <?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?> </span>
                    <p><?php echo substr(strip_tags($post->post_content), 0, 160) . '...'; ?>
                    <a href="<?php the_permalink(); ?>"> Read more.</a></p>
                </div>
            </article>

            
            
            <?php endwhile; ?>

            <div class="navigation index">
                <div class="align left"><?php next_posts_link( 'Prev Page' ); ?></div>
                <div class="align right"><?php previous_posts_link( 'Next Page' ); ?></div>
            </div><!--end navigation-->
            
            <?php else : ?>
            <?php endif; ?>


        </div>




    </main>

<?php get_footer(); ?>