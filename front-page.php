<?php get_header();

?>


<main id="main" class="main-front-page">
    <?php
    $language = pll_current_language();
    if( $language == 'fi'){

    ?>

    <?php } ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else: endif; ?>
</main>
<script>
    window.onload = function() {

            var button = document.querySelector('button.asr_texonomy[data_id="-1"]');
            if (button) {
                button.click();
            }

    };
</script>
<?php get_footer(); ?>
