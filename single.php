<?php get_header(); ?>
<main id="main" class="main-single">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else: endif; ?>
</main>
<?php get_footer(); ?>
