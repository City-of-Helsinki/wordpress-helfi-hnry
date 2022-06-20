<?php get_header();

?>


<main id="main" class="main-front-page">
    <h1>
    <?php
    $language = pll_current_language();
    if( $language == 'fi'){

    echo '
    <script>
        jQuery(document).ready(function() {
        jQuery(".asr-filter-div > ul > li:first-child").text("Kaikki");
        });
    </script>';

    }

     ?>
    </h1>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else: endif; ?>
</main>
<?php get_footer(); ?>
